<!doctype html>
<html>
<head>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
	<title>Canvas Fingerprinting Demo</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>

	<div id="experimental-page">
		<h1>Canvas Fingerprinting Demo</h1>
		<div id="canvas-fingerprint-results">
			<p>
				Your fingerprint, based on the image below, is: 
				<span id="canvas-fingerprint-text"></span>
			</p>
			<div id="canvas-fingerprint-visible"></div>
		</div>
		<script src="sha.js"></script>
		<script src="canvasFP.js"></script>
	</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>