<!doctype html>
<html>
<head>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link rel="stylesheet" href="color-accordion-nav.css" />
    <style>
        .color-accordion-nav {
            font-family:"Roboto",sans-serif;
            font-weight:600;
            text-align:center;
        }
        .color-accordion-nav a.blog {
            background-color:#00aeef!important;
            border-right-color:#00aeef!important;
        }
        .color-accordion-nav a.art {
            background-color:#ffc60b!important;
            border-right-color:#ffc60b!important;
        }
        .color-accordion-nav a.design {
            background-color:#f15a22!important;
            border-right-color:#f15a22!important;
        }
        .color-accordion-nav a.development {
            background-color:#25b34b!important;
            border-right-color:#25b34b!important;
        }
        .color-accordion-nav > ul a {
            line-height:40px;
            padding:10px;
        }
    </style>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div id="experimental-page">
        <h1>Modern Menu</h1>
        <div class="modern-menu">
            <ul>
                <li><a href="#" class="home">Home</a></li>
                <li class="current"><a href="#" class="blog current">Blog</a></li>
                <li><a href="#" class="art">Art</a></li>
                <li><a href="#" class="design">Design</a></li>
                <li><a href="#" class="development">Development</a></li>
            </ul>
        </div>
    </div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>