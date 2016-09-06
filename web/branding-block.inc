<!--<div class="byjobywidget">
    <a href="http://experimental.byjoby.com/" class="byjobywidget__homelink">
        <h1 class="byjobywidget__header">
            Experimental Projects
        </h1>
        <h1 class="byjobywidget__header2">
            by Joby
        </h1>
    </a>
    <a class="byjobywidget__mainsite" href="http://byjoby.com/">Back to byjoby.com</a>
    <?php
        $filename = $_SERVER['SCRIPT_FILENAME'];
        if ($filename != '/home/byjobyne/public_html/experimental.byjoby.com/index.php') {
            $diff = time()-filemtime($filename);
            $mtime = date("F j, Y",filemtime($filename));
            $classes = "";
            if ($diff <= (25*60*60)*7) {//7 days
                $classes = " recently-updated";
            }
            echo "<div class='byjobywidget__lastupdated $classes'>Modified: $mtime</div>";
        }
    ?>
    <canvas id="lifecanvasdemo" style="position:absolute;width:100%;height:100%;top:0;left:0;bottom:0;right:0;"></canvas>
</div>-->

<header>
	<h1><a href="/" style="color:#fff;">(*joby_elliott).experimental_projects</a></h1>
</header>
<!-- <nav>
    <a href="http://www.byjoby.com/blog/">Blog</a>
    <a href="http://www.byjoby.com/cv/">CV</a>
    <a href="http://experimental.byjoby.com/" class="active">Experimental Projects</a>
</nav> -->
