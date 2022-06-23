<?php
echo "Vishal<br>";
$file=fopen("test.txt","r+");
echo fwrite($file, "Yo! its me Vishal");
?>