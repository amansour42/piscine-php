#!/usr/bin/php
<?php

function is_alpha($str)
{
	$str = strtoupper($str);
	while(empty($str) == False)
	{
		if (ord($str[0]) > 90 || ord($str[0]) < 65)
			return (0);
		$str= substr($str, 1);
	}
	return (1);
}

if ($argc > 1)
{	
	$tab_letter= array();
	$tab_num= array();
	$tab_other= array();
	array_shift($argv);
	foreach ($argv as $elem)
	{
		$tab = array_filter(explode(" ", $elem));
		foreach ($tab as $val) {
			$elem = $val;
			if (is_numeric($elem))
				array_push($tab_num, intval($elem));
			else if (is_alpha($elem))
				array_push($tab_letter, $elem);
			else
				array_push($tab_other, $elem);
		}
	}
	usort($tab_letter, "strcasecmp");
	arsort($tab_num);
	sort($tab_other);
	foreach ($tab_letter as $elem)
		echo $elem."\n";
	foreach ($tab_num as $elem)
		echo $elem."\n";
	foreach ($tab_other as $elem)
		echo $elem."\n";
}
?>