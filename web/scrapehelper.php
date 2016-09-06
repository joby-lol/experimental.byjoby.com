<?php 
    header("Content-Type: text/plain");
    ini_set( 'display_errors','1');
    include("functionalProjects.inc");
    $projects = projectList();
    $scraped = [];
    foreach($projects as $project) {
        $scrape_item = [
            'guid' => md5($project['path']),
            'url' => "http://experimental.byjoby.com/".$project['path']."/",
            'image' => $project['path'].'/feature.png',
            'date' => $project['modified'],
            'title' => $project['name']
        ];
        if (file_exists($scrape_item['image'])) {
            $scrape_item['image'] = 'http://experimental.byjoby.com/'.$scrape_item['image'];
            $scraped[] = $scrape_item;
        }
    }
    echo serialize($scraped);
