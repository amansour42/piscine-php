#!/usr/bin/php
<?php

array_shift($argv);
foreach($argv as $elem) {
    echo $elem."\n";
}
?>