#!/usr/bin/php
<?php

if ($argc >= 3)
{
	$val = $argv[1];
	unset($argv[0], $argv[1]);
	foreach ($argv as $elem)
	{
		$tab = explode(":", $elem);
		if ($val === $tab[0])
			$str = $tab[1];
	}
	if ($str)
		echo $str."\n";
}
?>