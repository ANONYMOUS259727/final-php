<?php
$myfile = fopen("test.txt", "w");
$txt = "Yo! its Vishal\n";
fwrite($myfile, $txt);
$txt = "i am fine\n";
fwrite($myfile,$txt);
fclose($myfile);

?>