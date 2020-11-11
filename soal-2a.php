<?php
$datetime = "2020-05-01";
$year = substr($datetime, 0, 2);
$month = substr($datetime, 5, 2);
$day = substr($datetime, 8, 2);
echo $month."-".$year."-".$day;

?>