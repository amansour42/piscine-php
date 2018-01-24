#!/usr/bin/php
<?php

if($argc == 2)
{
	$tab = array_filter(explode(" ", $argv[1]));
	$str = "";
	foreach ($tab as $elem) {
		$str = $str.$elem." ";
	}
	echo trim($str)."\n";
}
?>