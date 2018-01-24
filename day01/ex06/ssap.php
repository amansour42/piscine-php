#!/usr/bin/php
<?php

if ($argc > 1)
{
	$tab = array();
	array_shift($argv);
	foreach ($argv as $elem)
	{
		$tab = array_merge($tab, array_filter(explode(" ", $elem)));
	}
	sort($tab);
	foreach ($tab as $elem)
		echo $elem."\n";
}
?>