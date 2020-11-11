<?php
$angka = array (20, 10, 100, 30, 15, 5);
sort($angka);
echo "ASC :  <br>";
for ($i=0;$i<=5;$i++)
{
    echo $angka[$i]. "<br>";
}

echo "<br>";
echo "DESC : <br>";
rsort($angka);
for ($j=0;$j<=5;$j++)
{
    echo $angka[$j]. "<br>";
}
?>