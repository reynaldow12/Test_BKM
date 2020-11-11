<?php
$tanggal = "2020-05-01";
$enam_bulan_ke_depan = date('Y-m-d', strtotime('+6 month', strtotime($tanggal)));
echo $enam_bulan_ke_depan;
?>