#!/usr/bin/php
<?php

function ft_split($str)
{
	$str_tab = array_filter(explode(" ", $str));
	sort($str_tab);
	return ($str_tab);
}
?>