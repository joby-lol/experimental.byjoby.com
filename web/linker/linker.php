<?php 
$found = false;
$fh = fopen('links.txt','r');
while (($line = fgets($fh)) !== false) {
	$line = split("\|",$line);
	if ($_GET['f'] == $line[0]) {
		$found = $line[1];
		break;
	}
}
fclose($fh);
if ($found) {
	header("Location: $found");
}else {
	header("HTTP/1.0 404 Not Found");
	header('Location: http://www.byjoby.com/error/404.php?q='.urlencode(trim(preg_replace("/[^a-z0-9]+/i"," ",$_GET['f']))));
}