<?php
session_start();

$fdate = !empty($_SESSION['ddline']);
$date = strtotime('Now');
$hours = floor(floor(($fdate - $date) / (60 * 60)) % 24);
$minutes = floor(floor(($fdate - $date) / 60) % 60);
$seconds = floor(($fdate - $date) % 60);

if ($date < $fdate) 
{ $salet = true;} else { $salet = false;}

?>
