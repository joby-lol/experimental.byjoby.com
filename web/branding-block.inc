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

    <div class="byjoby-header">
        <div class="byjoby-header-navbar">
            <a href="http://code.byjoby.com/" class="code active">Code</a>
            <a href="http://art.byjoby.com/" class="art">Art</a>
            <a href="http://design.byjoby.com/" class="design">Design</a>
            <a href="http://blog.byjoby.com/" class="blog">Blog</a>
        </div>
        <a href="http://byjoby.com/" class="byjoby-header-logo">by joby</a>
    </div>