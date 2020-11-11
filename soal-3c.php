<?php
$angka = array (20, 10, 100, 30, 15, 5);
sort($angka);
print_r($angka);
echo "<br>";
unset($angka[4]);
print_r($angka);
?>