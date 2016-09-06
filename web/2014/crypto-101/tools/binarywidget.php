<!doctype html>
<html>
<head>
    <title>Experimental Projects by Joby</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <link rel="stylesheet" href="/2014/crypto-101/ex.css" />
    <link rel="stylesheet" href="/2014/crypto-101/tools/binarywidget.css" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
</head>
<body>

<h1>Binary widget</h1>
<p>A tool for playing with binary numbers in a GUI.</p>

<input type="binary-widget" value="random" id="a" />
<input type="binary-widget" value="random" id="b" />
<input type="binary-widget" data-operation="a^b" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/2014/crypto-101/tools/binarywidget.js"></script>
<script src="/2014/crypto-101/ex.js"></script>
</body>
</html>