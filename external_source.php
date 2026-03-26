<?php
/* This  code is for reading data from the external source where i can read data
using fie Handling*/
$file = fopen("test.txt", "w");

fwrite($file, "Learning PHP File Handling");

fclose($file);

$file = fopen("test.txt", "r");

echo fread($file, filesize("test.txt"));

fclose($file);

?>