<?php
$jml =$_REQUEST['jml'];
$kata =$_REQUEST['kata'];
$tampilan =$_REQUEST['tmpln'];

echo "<center><h2>PERULANGAN KATA</h2></center>";
$x=1;
if ($tampilan === "mendatar") {
    while ($x<=$jml){
        echo "<b>".$kata."&nbsp;</b>";
        $x=$x+1;
    }
} else {
    while ($x<=$jml){
     echo "<b>".$kata."&nbsp;</b><br>";
       $x=$x+1;
    }
}
    
echo "<hr>";
echo ("<a href='FormUlangDo.php'>[Kembali]</a>");
?>