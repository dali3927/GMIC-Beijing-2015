<?php
include('parser.php');
$html = file_get_html('http://www.gwc.net/GMIC2010/GMIC_Guests.html');

$retArray = $html->find('.s_pic_b');

foreach ($retArray as $ret) {
	$str = $ret->find('.s_pic_txt a', 0);
	$position = strpos($str, '<br/>');
	$str = substr($str, 0, $position);
	$position = strpos($str, '>');
	$str = substr($str, $position + 1);
	echo $str;
	echo "\n";

	$element = $ret->find('img', 0);
	$src = 'http://www.gwc.net/GMIC2010/' . $element->src;
	echo $src;
	echo "\n";

	$data = file_get_contents($src);
	$fp = fopen('2010/'.$str.'.gif', "w");
	fwrite($fp,$data);
	fclose($fp);
}
?>
