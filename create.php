<?php
$file = fopen("new.txt", "w");
$txt = "RAJPUT'S\n";
fwrite($file, $txt);
$txt ="always on top\n";
fwrite($file, $txt);
fclose($file);
?>