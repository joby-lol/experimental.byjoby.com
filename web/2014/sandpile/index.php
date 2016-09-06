<!doctype html>
<html>
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link href="/layout/jquery-ui-1.11.1/jquery-ui.css" rel="stylesheet">
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div id="experimental-page">
    	<h1>JS Sandpile Model</h1>
        <p>See <a href="http://en.wikipedia.org/wiki/Abelian_sandpile_model">http://en.wikipedia.org/wiki/Abelian_sandpile_model</a>.
        <p><canvas id="sandpile"  height="640" width="640" style="width:100%;"><img src="static.png" alt="sandpile static display" /></canvas></p>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/layout/jquery-ui-1.11.1/jquery-ui.js"></script>
<script src="sandpile-model.js"></script>
<script src="sandpile-display.js"></script>
<script>
$(function(){
    //set up model and display
    var model = new sandpileModel();
    var display = new sandpileDisplay(document.getElementById('sandpile'),model);
    display.options.left = 1;
    display.options.top = 1;
    display.options.width = model.options.width-3;
    display.options.height = model.options.height-3;
    model.options.heightComparison = "localHigh";
    model.options.distributionMethod = "random";
    model.options.neighborsMethod = "square";
    model.options.toppleHeight = 3;
    model.reset();
    model.play();
    setInterval(function(){
        model.dropGrain();
    },100)
    //set up controls
    $('#controls').tabs();
})
</script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>
