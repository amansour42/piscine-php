#!/usr/bin/php
<?php
if ($argc == 4)
{
	$argv[2] = trim($argv[2], " \t");
	$val1 = trim($argv[1], " \t");
	$val2 = trim($argv[3], " \t");
	switch ($argv[2])
	{
		case ("*"):
			echo $val1 * $val2;
			break;
		case ("+"):
			echo $val1 + $val2;
			break;
		case ("-"):
			echo $val1 - $val2;
			break;
		case ("/"):
			echo $val1 / $val2;
			break;
		case ("%"):
			echo $val1 % $val2;
			break;
	}
	echo "\n";
}
else
	echo "Incorrect Parameters\n";
?>