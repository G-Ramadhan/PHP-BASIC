<?php
$fmtgl=$_REQUEST['fmtgl'];
$fmbulan=$_REQUEST['fmbulan'];
$fmtahun=$_REQUEST['fmtahun'];

echo "<CENTER><h2>OUTPUT DATA</h2></CENTER>";
echo "<CENTER>Tanggal Lahir Anda <i><b>$fmtgl - $fmbulan - $fmtahun</b></i></CENTER><br>";
$umur=date('Y')-$fmtahun;
echo "<CENTER>Umur anda sekarang adalah <b>$umur</b> tahun</CENTER>";
echo "<hr>";
echo ("<a href='FormUlangFor.php'>[Kembali]</a>");
?>