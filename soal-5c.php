<?php
$buah = array(
    array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);
$harga10000kebawah = array_filter($buah, function ($item){
return $item['HARGA'] < 10000;
});
print_r($harga10000kebawah);
?>