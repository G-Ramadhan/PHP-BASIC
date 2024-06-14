<?php
//ambil isi form dan simpan ke variabel
$operand1=$_REQUEST['operand1'];
$operand2=$_REQUEST['operand2'];
$operator=$_REQUEST['operator'];

//rumus perhitungan
$perhitungan= $operand1.$operator.$operand2;
eval("\$hasil=$perhitungan;");

echo "<center><h2><B>hasil perhitungan : $hasil </B></h2></center><br>";
echo "<center><i>Rincian:</i></center>";

echo "<center>Nilai Operand1 = <B>$operand1 </B><br></center>";
echo "<center>Nilai Operand2 = <B>$operand2 </B><br></center>";
echo "<center>Menggunakan Operator : <B>$operator</B><br></center>";
echo "<br>";
echo "<center><i>menampilkan hasil perhitungan</i> <B>$operand1 $operator $operand2 = $hasil</B><br></center>";
echo "<hr>";
echo ("<a href='opAritmatik.html'>[Kembali]</a>");
?>