<?php
date_default_timezone_set('Asia/Jakarta');
$bulan = [
    "December" => "Desember",
];
echo date('d-m-Y');//today
echo "<br>";
$tanggal = "21-12-2008";
echo date('Y-m-d', strtotime($tanggal));//tanggal tertentu
echo "<br>";
echo date('Y-m-d', strtotime("+6 days", strtotime($tanggal)));//6 hari kedepan
echo "<br>";
$tgl = date('d-F-Y', strtotime($tanggal));
$arr_tgl = explode("-", $tgl);
echo $arr_tgl[0]." ".$bulan[$arr_tgl[1]]." ".$arr_tgl[2];