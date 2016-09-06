<!doctype html>
<html>
<head>
    <title>Experimental Projects by Joby</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link href="gridpack.css" rel="stylesheet">
    <style>
        .gridpack-area .gridpack-item:nth-child(5n+1) {
            background:#4CAF50;
        }
        .gridpack-area .gridpack-item:nth-child(5n+2) {
            background:#2196F3;
        }
        .gridpack-area .gridpack-item:nth-child(5n+3) {
            background:#03A9F4;
        }
        .gridpack-area .gridpack-item:nth-child(5n+4) {
            background:#00BCD4;
        }
        .gridpack-area .gridpack-item:nth-child(5n+5) {
            background:#009688;
        }
        .gridpack-area.gridpack-active .gridpack-item {
            float:none;
            margin:0;
        }
    </style>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div class="gridpack-area">
        <div class="gridpack-item gridpack-big">
            <h1>Gridpack</h1>
        </div>
        <div class="gridpack-item">
            <p>Gridpack is exploring the possibility of a bare-bones grid system sugared with <a href="http://packery.metafizzy.co/">packery.js</a> to achieve maximum awesome with minimum effort.</p>
        </div>
        <div class="gridpack-item gridpack-big">
            <strong>Resize the window to see what happens!</strong><br/>
            big size<br/>
            packed item
        </div>
        <div class="gridpack-item gridpack-small">
            small size<br/>
            packed item
        </div>
        <div class="gridpack-item">
            packed item
        </div>
        <div class="gridpack-item">
            packed item
        </div>
        <div class="gridpack-item gridpack-big">
            big size<br/>
            <ul>
               <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
               <li>Aliquam tincidunt mauris eu risus.</li>
               <li>Vestibulum auctor dapibus neque.</li>
            </ul>
        </div>
        <div class="gridpack-item">
            packed item
        </div>
        <div class="gridpack-item gridpack-small">
            small size<br/>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
        </div>
        <div class="gridpack-item">
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        </div>
        <div class="gridpack-item">
            packed item
        </div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="packery.js"></script>
<script>
docReady(function(){
    $('.gridpack-area').addClass('gridpack-active').packery({
        itemSelector: '.gridpack-item'
        ,gutter: 20
        ,columnWidth: 300
    });
});
</script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>