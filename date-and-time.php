<?php

echo"Date Functions";
date_default_timezone_set("Asia/Kolkata");
$date1= date("Y-M-d : h-i-s-ms");
echo "<br>";
echo $date1;

echo "<br>";

$date_1 = new DateTime('2006-03-27');
$date_2 = new DateTime('2026-07-07');

$finaldate = date_diff($date_1,$date_2);
echo "<br>";
echo $finaldate->format('%a days');

?>