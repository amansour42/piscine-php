#!/usr/bin/php
<?php
date_default_timezone_set('Europe/paris');

$file = file_get_contents("/var/run/utmpx");
$user = get_current_user();
$e = array();
while ($file)
{
	$array = unpack('a256user/a4id/a32line/ipid/itype/Itime/a256host/i16pad', $file);
	if (strcmp(trim($array[user]), $user) == 0 && $array[type] == 7)
	{
		$date = date("M j H:i", $array["time"]);
		$line = trim($array[line]);
		$tab = array($user." ".$line."  ".$date);
		$e = array_merge($e, $tab);
	}
	$file = substr($file, 628);
}
echo implode($e,"\n")."\n";
?>