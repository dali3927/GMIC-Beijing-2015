<?php
include('parser.php');

$html = file_get_html('http://gmic2011.gwc.net/cn/speakers');

$retArray = $html->find('.views-row');

foreach ($retArray as $ret) {
	$name = $ret->find('.field-content', 1)->plaintext;
	echo $name;
	echo "\n";

	$img = $ret->find('img', 0);
	$src = $img->src;
	echo $src;
	echo "\n";

	$position = strrpos($src, '.', 0);
	$suffix = substr($src, $position);
	echo $suffix;
	echo "\n\n";

	$data = file_get_contents($src);
	$fp = fopen('2011/' . $name . $suffix, 'w');
	fwrite($fp, $data);
	fclose($fp);
}
?>
