<!doctype html>
<html>
<head>
	<?php include('branding-head.inc'); ?>
    <title>Experimental Projects by Joby</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1"/>
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5"/>
    <link rel="stylesheet" href="layout/home.css" />
</head>
<body class="byjoby-section-code">
<?php include('branding-block.inc'); ?>

<?php 
    ini_set( 'display_errors','1');
    include("functionalProjects.inc");
?>

<div id="experimental-page">
    <h1>Experimental projects</h1>
    <p>Unless otherwise noted, everything you see here is experimental. That means varying degrees of not tested enough. Some of it is pretty neat, and feel free to use it and copy it, but you should <em>really</em> run it through its paces before you go using it in a production site or anything.</p>
    <?php
    	$projects = projectList();
    ?>
    <?php
        /*
        GENERATE MARKUP FOR FULL PROJECT LIST
        */
        $currentyear = 0;
    	foreach ($projects as $project) {
            $year = date("Y",$project['modified']);
            if ($year != $currentyear) {
                if ($currentyear != 0) {
                    echo "</ul>";
                }
                $currentyear = $year;
                echo "<h2 class='year-header'>$currentyear</h2>";
                echo "<ul class='all-projects'>";
            }
    ?>
        <li>
            <a href="<?=$project['path']?>" class="scrape-link">
            	<span class="name">
            		<?=$project['name']?>
            	</span>
            </a>
            <?/*var_dump($project)*/?>
        </li>
    <?php
    	}
    ?>
    </ul>
</div>

<?php include('branding-bottom.inc'); ?>
<script src="/layout/onlyslider.js"></script>
<script>
(function(){
    var el = document.getElementById("featured-slider");
    var sl = new onlySlider(el,{
        dotControls:true
    });
})();
</script>
</body>
</html>