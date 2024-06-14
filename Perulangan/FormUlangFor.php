<html>

    <head>
        <title>Contoh Perulangan</title>
    </head>

    <Body style="background:aqua;">

    <style>
            /* Style for the table */
            table {
                width: 30%;
                border: 1px solid black;
                background-color: beige;
            }
        
            /* Center align the table cells */
            td {
                text-align: center;
            }
        
            /* Style for the submit button */
            input[type="submit"] {
                background-color: #0074D9;
                color: white;
                border: none;
                padding: 5px 10px;
                cursor: pointer;
            }
        
            /* Optional: Add more styles as needed */
        </style>
         <tr>
                    <td><a href='http://localhost/PHP-DASAR/Welcome/Welcome.html'>|Welcome |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/FormLogin/login.html'> Form Login |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/FormLogin-FormSelf/formSelf.php'> Form Login Self |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/Kalkulator-OprAritmatik/opAritmatik.html'> Kalkulator |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/Perulangan/FormUlangFor.php'> Perulangan For |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/Perulangan/SubFolder/FormUlangDo.php'> Perulangan Do |</a></td>
                    <td><a href='http://localhost/PHP-DASAR/String%20Handling/ValidOk1.html'> String Handling|</a></td>
                </tr>
        <form name="form1" method="post" action="ProsesUlangFor.php">
            <center><h2>INPUT DATA DIRI</h2></center>
            <center>
                <table>
                    <tr>
                        <td> 
                            Tanggal Lahir :
                                <select name="fmtgl">
                                    <?php
                                        for ($tgl = 1; $tgl < 31; $tgl++)
                                        echo "<option value=$tgl>$tgl</option>";
                                    ?>
                                </select>
                            /
                            <select name="fmbulan">
                            <option value=1>Januari</option>
                            <option value=2>Februari</option>
                            <option value=3>Maret</option>
                            <option value=4>April</option>
                            <option value=5>Mei</option>
                            <option value=6>Juni</option>
                            <option value=7>Juli</option>
                            <option value=8>Agustus</option>
                            <option value=9>September</option>
                            <option value=10>Oktober</option>
                            <option value=11>Nopember</option>
                            <option value=12>Desember</option>
                            </select>
                            /
                            <select name="fmtahun">
                                <?php
                                    $thn_skr = date('Y');
                                    for ($tahun = $thn_skr; $tahun >= 1950; $tahun--)
                                    echo "<option value=$tahun>$tahun </option>";
                                ?>
                            </select>
                            <input type="submit" name="Submit" value="Kirim">
                        </td>
                    </tr>
                </table>
            </center>
        </form>
    </Body>
</html>