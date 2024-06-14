<?php
$nama =$_REQUEST['nama'];
$sandi =$_REQUEST['sandi'];

if ($nama == "Gilang" && $sandi == "dino") {
    echo "<center><h2>HOME PAGE</h2><br><br>";
    echo "''Password Benar''</center><br><br>";
} else {
    echo "<center><h2>ACCESS DENIED</h2><br><br>";
    echo "''Password Salah''</center><br><br>";
}
echo"<center>Selamat Datang di PHP $nama!</center>";
echo "<hr>";
echo ("<a href='login.html'>[Kembali]</a>");

?>