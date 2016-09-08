<?php

function projectList($path = '.')
{
    $projectList = array();
    //get all the yearly project directories
    $years = scandir($path);
    //retrieve the list
    foreach ($years as $year) {
        if (preg_match('/[0-9]{4}/', $year)) {
            $projects = scandir($year);
            foreach ($projects as $project) {
                if (is_dir($year.'/'.$project) && $project != '.' && $project != '..') {
                    $projectList[] = projectInfo($year.'/'.$project);
                }
            }
        }
    }
    //return the list
    return sortProjectList($projectList, 'modified', SORT_DESC);
}

function projectInfo($path)
{
    /*
        Begin constructing new project
        project path is $path
    */
    $newProject = array(
        'name' => str_replace('-', ' ', basename($path)),
        'modified' => filemtime($path),
        'path' => $path,
        'sticky' => '0',
        'thumb' => '/layout/defaultthumb.png',
    );
    $ini = false;
    if (file_exists($path.'/.project/info') && is_file($path.'/.project/info')) {
        $ini = parse_ini_file($path.'/.project/info');
        $thumb_extensions = array('png', 'jpg', 'jpeg', 'gif', 'svg');
        foreach ($thumb_extensions as $extension) {
            if (file_exists($path.'/.project/thumb.'.$extension)) {
                $newProject['thumb'] = $path.'/.project/thumb.'.$extension;
            }
        }
    }
    if (file_exists($path.'/.project') && is_file($path.'/.project')) {
        $ini = parse_ini_file($path.'/.project');
        if ($ini) {
            $newProject = array_merge($newProject, $ini);
        }
    }
    if ($ini) {
        if (array_key_exists('modified', $ini) && $ini['modified']) {
            $ini['modified'] = strtotime($ini['modified']);
        }
        $newProject = array_merge($newProject, $ini);
    }

    return $newProject;
    /*
        End project construction
    */
}

function sortProjectList($list, $sortOn, $sort = SORT_ASC)
{
    $sortColumn = array();
    foreach ($list as $key => $row) {
        $sortColumn[$key] = $row[$sortOn];
    }
    array_multisort($sortColumn, $sort, $list);

    return $list;
}
