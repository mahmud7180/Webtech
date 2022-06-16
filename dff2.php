<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mahmud\n";
fwrite($myfile, $txt);
$txt = "Hasan\n";
fwrite($myfile, $txt);
fclose($myfile);
?>