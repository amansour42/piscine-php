#!/usr/bin/php
<?php

	$string = file_get_contents($argv[1]);
	$string = preg_replace_callback("/title=(.)*<\/a>/", function ($m) {
			$tab = explode("title=", $m[0]);
			$tab = explode(">", $tab[1]);
			$tab[0] = strtoupper($tab[0]);
			$tab_1 = explode("<", $tab[1]);
			$tab_1[0] = strtoupper($tab_1[0]);
			return "title=".$tab[0].">".$tab_1[0]."<\/a>";}, $string);
	echo $string;
?>