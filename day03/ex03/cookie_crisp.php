<?php

switch  ($_GET["action"]) 
{
case ("set"):
		setcookie($_GET["name"], $_GET["value"], time() + (7 * 24 * 60 * 60));
    break;
  case ("get"):
		if (isset($_COOKIE[$_GET['name']]))
			echo $_COOKIE[$_GET['name']]."\n";
		break;
  case ("del"):
    if (isset($_GET['name']))
		  setcookie($_GET['name'],  NULL, -1);
    break;
}
?>
