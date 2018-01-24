#!/usr/bin/php
<?php
if($argc > 1)
{
	$tab = array_filter(explode(" ", $argv[1]));
	$val = $tab[0];
	array_push($tab, $val);
	array_shift($tab);
	$str = "";
	foreach ($tab as $elem) {
		$str = $str.$elem." ";
	}
	echo trim($str)."\n";
}
?>