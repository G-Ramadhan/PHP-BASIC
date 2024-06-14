<?php
//ambil variabel dari form
$first_name = $_POST['namadepan'];
$last_name = $_POST['namabelakang'];
$tlp = $_POST['tlp'];
$email_address = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$retypepassword = $_POST['repassword'];

//Siapkan pola string yang akan dicocokkan
$polaemail = "/^.+@.+\..+$/";
$pola_tlp = "/^[0-9]+$/";
$polapassword = "/^.{5,}$/";
if (
    (!$first_name) || (!$last_name) || (!preg_match($pola_tlp, $tlp)) ||
    (!preg_match($polaemail, $email_address)) || (!$username) ||
    (!preg_match($polapassword, $password)) || (!$retypepassword) ||
    ($password != $retypepassword)
) {
    echo "<center>";
    echo "<b>Tolong Isi Formulir Ini Dengan Benar! </b><br />";
    echo "</center>";
    if (!$first_name) {
        echo "<center>";
        echo "nama depan harus di isi<br/>";
        echo "</center>";
    }
    if (!$last_name) {
        echo "<center>";
        echo "nama belakang harus di isi <br/>";
        echo "</center>";
    }
    //Jika pengisian telpon tidak sesuai
    if (!preg_match($pola_tlp, $tlp)) {
        echo "<center>";
        echo "Input telpon, harus angka Ex. 085648173225<br/>";
        echo "</center>";
    }
    //Jika pengisian email tidak sesuai
    if (!preg_match($polaemail, $email_address)) {
        echo "<center>";
        echo "Input email salah, Ex. user@domain.com<br />";
        echo "</center>";
    }
    if (!$username) {
        echo "<center>";
        echo "Tolong isi username<br/>";
        echo "</center>";
    }
    //Jika pengisian password dan retype password sesuai
    if (!preg_match($polapassword, $password)) {
        echo "<center>";
        echo "Tolong isi Password, Harus Lebih dari 5 Karakter<br />";
        echo "</center>";
    }
    if (!$retypepassword) {
        echo "<center>";
        echo "Tolong isi retype password<br/>";
        echo "</center>";
    }
    if ("$password" != "$retypepassword") {
        echo "<center>";
        echo "Passwordnya tidak sama, ulangi lagi ya !<br/>";
        echo "</center>";
    }
    include "Validok1.html";
    exit();
} else {
    echo "<center>";
    echo "<h2>WELCOME!</h2>";
    echo "<i>Anda Berhasil Mengisi dengan VALID</i>";
    echo "</center>";
}
echo "<hr>";
echo ("<a href='ValidOk1.html'>[Kembali]</a>");
?>
