<?php
$jalan="Gubeng Kertajaya";
$norumah=29;
$blok="4c";
$jumlah=3;

echo "NAMA JALAN: $jalan <br>";
echo "NO RUMAH: $norumah <br>";
echo "BLOK: $blok <br>";
echo "JUMLAH PENGHUNI: $jumlah <br>";

$alamat=$jalan.$norumah;
$hasil=$norumah.$jumlah;
$aneh=$blok.$norumah;

echo "<hr>";

echo "NAMA JALAN + RUMAH: $alamat <br>";
echo "NO RUMAH + JUMLAH PENGHUNI: $hasil <br>";
echo "BLOK + NOMOR RUMAH: $aneh <br>";

?>