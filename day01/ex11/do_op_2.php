#!/usr/bin/php
<?php

function ft_extract($str, $op)
{
	$tab = array_filter(explode($op, $str));
	$tab[0] = trim($tab[0]);
	$tab[1] = trim($tab[1]);
	if (is_numeric($tab[0]) && is_numeric($tab[1]))
			return ($tab);
	echo "Syntax Error\n";
	exit (-1);
}

if ($argc == 2)
{
	if (stristr($argv[1], '*'))
	{
		$tab = ft_extract($argv[1], "*");
		echo $tab[0] * $tab[1];
	}
	else if (stristr($argv[1], '+'))
	{
		$tab = ft_extract($argv[1], "+");
		echo $tab[0] + $tab[1];
	}
	else if (stristr($argv[1], '-'))
	{
		$tab = ft_extract($argv[1], "-");
		echo $tab[0] - $tab[1];
	}
	else if (stristr($argv[1], '/'))
	{
		$tab = ft_extract($argv[1], "/");
		echo $tab[0] / $tab[1];
	}
	else if (stristr($argv[1], '%'))
	{
		$tab = ft_extract($argv[1], "%");
		echo $tab[0] % $tab[1];
	}
	else
		echo "Syntax Error";
	echo "\n";
	
}
else
	echo "Incorrect Parameters\n";
?>