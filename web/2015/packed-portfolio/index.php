<!doctype html>
<html>
<head>
    <title>Experimental Projects by Joby</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link href="basic-layout.css" rel="stylesheet">
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div class="packed-container js-packery" style="margin-top:20px;" data-packery-options='{"columnWidth":300,"gutter":20,"itemSelector":".item"}'>
        <div class="row">
            <div class="item">
                This page uses <a href="http://packery.metafizzy.co/">packery.js</a>, which is pretty much the most amazing thing I've ever seen
            </div>
            <div class="item w2">
                <strong>Resize the window to see what happens!</strong><br/>
                double width<br/>
                packed item
            </div>
            <div class="item wf">
                <h1>Packed layout</h1>
            </div>
        </div>
        <div class="item">
            packed item
        </div>
        <div class="item w3">
            triple width<br/>
            packed item
        </div>
        <div class="item">
            packed item
        </div>
        <div class="item">
            packed item
        </div>
        <div class="item w2">
            double width<br/>
            packed item
        </div>
        <div class="item">
            packed item
        </div>
        <div class="item w3">
            triple width<br/>
            packed item
        </div>
        <div class="item">
            packed item
        </div>
        <div class="item">
            packed item
        </div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="packery.js"></script>
<script>
$(function(){
    /*$('.packed-container').masonry({
        itemSelector: '.packed-item'
        //,columnWidth: '.packed-column-sizer'
    });*/
})
</script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>