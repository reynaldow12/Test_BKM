<?php
$buah = array(
    array("NAMA" => "JERUK", "HARGA" => 5000, "RASA" => "ASAM"),
    array("NAMA" => "MANGGA", "HARGA" => 20000, "RASA" => "MANIS"),
    array("NAMA" => "APEL", "HARGA" => 5000, "RASA" => "MANIS"),
    array("NAMA" => "DURIAN", "HARGA" => 50000, "RASA" => "MANIS"),
    array("NAMA" => "DUKU", "HARGA" => 10000, "RASA" => "ASAM"),
    array("NAMA" => "NANAS", "HARGA" => 5000, "RASA" => "ASAM")
);
$buah[] = ["NAMA"=>"PISANG", "HARGA"=>"5000", "RASA"=>"MANIS"];
rsort($buah);
for($i=0;$i<count($buah);$i++)
{
    foreach($buah[$i] as $key=>$value)
    {
        echo $key." = ".$value." ";
    }
    echo "<br><br>";
}
?>