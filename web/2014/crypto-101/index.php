<!doctype html>
<html>
<head>
    <title>Experimental Projects by Joby</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
<style>
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
ul.crypto-exercises {
    list-style-type:none;
    padding:0;
    width:25%;
    float:right;
    margin:0;
    overflow:auto;
    height:550px;
    position:relative;
    z-index:1;
}
ul.crypto-exercises a {
    display:block;
    padding:5px;
}
ul.crypto-exercises a:hover,
ul.crypto-exercises a:focus {
    background:#eee;
}
ul.crypto-exercises a.active {
    background:#999;
    color:#fff;
}
.crypto-viewer {
    width:75%;
    float:left;
    background:#fafafa;
    z-index:2;
    position:relative;
}
.crypto-iframe {
    width:100%;
    height:550px;
    border:1px solid #ccc;
}
</style>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div id="experimental-page">
        <h1>Crypto 101 Exercises</h1>
        <p>Learning by doing! Because one must have hobbies, I'm currently making a pet project of implementing the various examples shown throughout the free book <a href="https://www.crypto101.io/"><em>Crypto 101</em></a>. I'm still starting off, but I like this book, and recommend it.</p>
        <ul class="crypto-exercises">
            <li><a href="tools/binarywidget.php" target="crypto-iframe">Binary widget</a></li>
            <li><a href="5/a.php" target="crypto-iframe">5.a: XOR pads</a></li>
        </ul>
        <div class="crypto-viewer">
            <iframe class="crypto-iframe" name="crypto-iframe"></iframe>
            <div class="crypto-source"></div>
        </div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function(){
    var $links = $('ul.crypto-exercises a');
    $links.removeClass('active');
    $links.each(function(){
        var $this = $(this);
        var hash = window.location.hash.substr(1);
        if (this.href.replace(/.+crypto-101\/([a-z0-9]+\/[a-z0-9]+)\.php/,"$1") == hash) {
            $this.addClass('active');
            $('.crypto-iframe').attr('src',this.href);
        }
    });
    //listeners
    $links.click(function(){
        var $this = $(this);
        $links.removeClass('active');
        $this.addClass('active');
        window.location.hash = this.href.replace(/.+crypto-101\/([a-z0-9]+\/[a-z0-9]+)\.php/,"$1");
    });
    //frame sizer
    $('.crypto-iframe').load(function(){
        var height = this.contentWindow.document.body.offsetHeight+50;
        $(this).height(height);
        $('.crypto-exercises').height(height);
    });
})
</script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>