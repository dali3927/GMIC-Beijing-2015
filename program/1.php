<?php
include('parser.php');
$html = file_get_html('http://gmic2011.gwc.net/cn/speakers');

$retArray = $html->find('.views-row');

$ret = $retArray[3];

	$str = $ret->find('.field-content', 1)->plaintext;
	echo $str;
	echo "\n";

	$element = $ret->find('img', 0);
	$src = $element->src;
	echo $src;
	echo "\n";

	$position = strrpos($src, '.', 0);
	$suffix = substr($src, $position);
	echo $suffix;
	echo "\n";

	// $data = file_get_contents($src);
	// $fp = fopen('2010/'.$str.'.gif', "w");
	// fwrite($fp,$data);
	// fclose($fp);
?>