#!/usr/bin/php
<?php

date_default_timezone_set('Europe/paris');
function test_day($str)
{
	$nb = preg_match("/^([Ll]undi|[Mm]ardi|[Mm]ercrdi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche)$/", $str);
	return ($nb);
}

function test_day_nbr($str)
{
	$nb = preg_match("/^[0-9]{1,2}$/", $str);
	return ($nb);
}

function test_month($str)
{
	if ($str == "janvier" || $str == "Janvier")
		return(1);
	else if ($str == "fevrier" || $str == "Fevrier")
		return (2);
	if ($str== "Mars" || $str == "mars")
		return(3);
	else if ($str == "Avril" || $str == "avril")
		return (4);
	if ($str == "Mai" || $str == "mai")
		return(5);
	else if ($str == "Juin" || $str == "juin")
		return (6);
	if ($str == "juillet" || $str == "Juillet")
		return(7);
	else if ($str == "Aout" || $str == "aout")
		return (8);
	if ($str == "septembre" || $str == "Septembre")
		return(9);
	else if ($str == "octobre" || $str == "Octobre")
		return (10);
	if ($str == "Novembre" || $str == "novembre")
		return(11);
	else if ($str == "Decembre" || $str == "decembre")
		return (12);
	return (0);
}

function test_year($str)
{
	$nb = preg_match("/^[0-9]{4}$/", $str);
	return ($nb);
}

function test_time($str)
{
	$nb = preg_match("/^[0-9]{2}$/", $str);
	return ($nb);
}

if ($argc >= 2)
{
	$big_tab = explode(" ", $argv[1]);
	if (count($big_tab) != 5)
	{	
		echo "Wrong Format\n";
		exit();
	}
	$lit_tab = explode(":", $big_tab[4]);
	if (!test_day($big_tab[0]) || !test_day_nbr($big_tab[1]) || !($mois = test_month($big_tab[2])) || !test_year($big_tab[3]) || !test_time($lit_tab[0]) || !test_time($lit_tab[1]) || !test_time($lit_tab[2]))
	{
		echo "Wrong Format\n";
		exit();
	}
	echo mktime($lit_tab[0], $lit_tab[1], $lit_tab[2], $mois, $big_tab[1], $big_tab[3], 1)."\n";
}
?>