<?php

$ny=fopen("ddf.txt","r") or die("could not open file!");
fread($ny,filesize("ddf.txt"));
fclose($ny);
?>