#!/usr/bin/php
<?php

$stdin = fopen('php://stdin', 'r');

while($stdin && feof($stdin) == False)
{
	echo "Entrez un nombre: ";
	$elem = fgets($stdin);
	if ($elem)
	{
		$elem = str_replace("\n", "", $elem);
		if (is_numeric($elem) == False)
			echo "'".$elem."' n'est pas un chiffre\n";
		else if($elem % 2 == 0)
			echo "Le chiffre ".$elem." est Pair\n";
		else
			echo "Le chiffre ".$elem." est Impair\n";
	}
}
fclose($stdin);
echo "\n";
?>