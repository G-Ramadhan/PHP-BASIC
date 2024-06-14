<?php
echo"<center>";
echo"<h2>OUTPUT DATA DIRI</h2>";
echo "<i>Nama User: </i><b>". $_POST['nama']."</b>";
echo "<br>";

echo "<i>Alamt: </i><b>". $_REQUEST['alamat']."</b>";
echo "<br>";

echo "<i>E-mail: </i><b>". $_REQUEST['email']."</b>";
echo "<br>";

$tahun=$_REQUEST['ThnLhr'];
$umur=date('Y')-$tahun;
echo "<i>Umur: </i><b>".$umur."</b>";
echo "<br>";

$acu=$_REQUEST['TgiBdn'];
$perhitungan= $acu.'-'.'110';
eval("\$hasil=$perhitungan;");
echo "<i>Berat Badan Ideal: </i><b>".$hasil."</b>";
echo"</center>";
echo "<hr>";
echo ("<a href='Welcome.html'>[Kembali]</a>");
?>