<?php
$buah = array(
    array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);

$filterhuruf = array_filter($buah, function ($var){
return (strpos($var['NAMA'], 'K'));
});
print_r($filterhuruf);

?>