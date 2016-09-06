<?php
$PPC_Cool = ["#003e53","#006bb6","#3dadc1","#8bd470","#bce362","#eeffdc"];
$PPC_Warm = ["#d13100","#f14400","#ff6100","#ffba15","#ffdd6c","#ffffdf"];
$PPC_Grey = ["#111","#333","#555","#bbb","#ccc","#eee"];
$PPC_GreyCyan = ["#111","#444","#09c","#0bd","#ccc","#eee"];
$PPC_GreyCool = ["#333","#444","#3dadc1","#8bd470","#eee","#fafafa"];
$PPC = $PPC_GreyCyan;

//randomly generate values, or use seed
$SEEDREADABLE = preg_replace("/[^a-z0-9]/i", "_", $_GET['seed']);
if ($SEEDREADABLE == '') {
	$SEEDREADABLE = md5(rand());
}
$SEED = md5($SEEDREADABLE);
$values = array();
$i = 0;
for ($x = 0; $x < 4; $x++) {
	$values[$x] = array();
	for ($y = 0; $y < 4; $y++) {
		$value = hexdec(substr($SEED, $i*2, 2))%6;
		$values[$x][$y] = $value;
		$i++;
	}
}

//configure
$SIZE = $_GET['size']*1;
if ($SIZE > 1000) {
	$SIZE = 1000;
}
if ($SIZE < 16) {
	$SIZE = 16;
}
$SHADOWSIZE = ceil($SIZE/17.8);
$SHADOWDELTA = 0;//round($SIZE/128);
$SHADOWOPACITY = 80;
$STACKSCALE = 1.07;

$BOXSIZE = $SIZE/4/pow($STACKSCALE,5);

//die('temporarily stopped');
//set up headers
header ("Content-type: image/png");
header('Content-Disposition: inline; filename="pixelpile-'.$SEEDREADABLE.'-'.$SIZE.'.png"');

//set up imagick object
$im = new Imagick();
$im->newImage($SIZE,$SIZE,'none','png');

//drawing a shadowed box
function drawShadowedBox ($image,$boxColor,$shadowColor,$shadowSize,$shadowDelta,$boxSize,$xCenter,$yCenter) {
	//build shadow
	$shadow = new Imagick();
	$shadow->newImage($shadowSize+$boxSize*2,$shadowSize+$boxSize*2,'none');
	//$shadow->setBackgroundColor(new ImagickPixel($shadowColor));
	$draw = new ImagickDraw();
	$draw->setFillColor($shadowColor);
	$draw->rectangle($shadowSize,$shadowSize,$shadowSize+$boxSize,$shadowSize+$boxSize);
	$shadow->drawImage($draw);
	//blur shadow
	$shadow->blurImage($shadowSize,$shadowDelta);
	//draw rectangle
	$draw = new ImagickDraw();
	$draw->setFillColor($boxColor);
	$draw->rectangle($shadowSize,$shadowSize,$shadowSize+$boxSize,$shadowSize+$boxSize);
	$shadow->drawImage($draw);
	//composite and return
	$xLeft = $xCenter-$shadowSize-$boxSize/2;
	$yTop = $yCenter-$shadowSize-$boxSize/2;
	$image->compositeImage($shadow,Imagick::COMPOSITE_OVER,$xLeft,$yTop);
	return $image;
}

//$im = drawShadowedBox($im,'white','black',$SHADOWSIZE,$BOXSIZE,50,50);
//$im = drawShadowedBox($im,'red','blue',$SHADOWSIZE,$BOXSIZE,75,75);

$offset = $SHADOWSIZE+$BOXSIZE/2;
//$PPC = array_reverse($PPC);
for ($level = 1; $level <= 5; $level++) {
	for ($y = 0; $y < 4; $y++) {
		for ($x = 0; $x < 4; $x++) {
			if ($values[$x][$y] == $level) {
				$boxX = round($offset+$BOXSIZE*$x);
				$boxY = round($offset+$BOXSIZE*$y);
				$boxSize = floor($BOXSIZE*pow($STACKSCALE,$level-1));
				$boxColor = new iMagickPixel($PPC[$level]);
				$im = drawShadowedBox($im,$boxColor,'black',$SHADOWSIZE,$SHADOWDELTA,$boxSize,$boxX,$boxY);
			}
		}
	}
}

echo $im;