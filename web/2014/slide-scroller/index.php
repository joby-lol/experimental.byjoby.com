<!doctype html>
<html>
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" /><meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link rel="stylesheet" href="demo.css" />
</head>
<body style="margin:0;">
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>

    <div class="slideScroll-wrapper">
        <div class="test-overlay">
            constant overlay
        </div>
        <div class="slideScroll-slide" id="slide1">
            <h1>Scrolling-controlled slideshow</h1>
            slide 1
        </div>
        <div class="slideScroll-slide" id="slide2">
            slide 2
        </div>
        <div class="slideScroll-slide" id="slide3">
            slide 3
        </div>
        <div class="slideScroll-slide" id="slide4">
            slide 4
        </div>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="slideScroll.js"></script>
<script>
$(function(){
    $('.slideScroll-wrapper').slideScroll();
});
</script

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>