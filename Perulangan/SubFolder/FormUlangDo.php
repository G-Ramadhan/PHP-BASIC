<html>
    <head>
        <title>Perulangan Do While</title>
    </head>

    <body style="background:beige;">
        <style>
            /* Style for the table */
            table {
                width: 30%;
                border: 1px solid black;
                background-color: aquamarine;
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
        <form name="frmUlang" method="post" action="ProsesUlangDo.php">
            <center><h2>PERULANGAN KATA</h2></center>
            <center>
                <table>
                    <tr>
                        <td>Masukkan Kata</td>
                        <td>:</td>
                        <td><input type="text" name="kata"></td>
                    </tr>

                    <tr>
                        <td>Ulang Sebanyak</td>
                        <td>:</td>
                        <td><input type="text" name="jml"></td>
                    </tr>
                    <tr>
                        <td>Tampilan</td>
                        <td>:</td>
                        <td><select name="tmpln" id="tmplnid">
                        <option value="mendatar">Mendatar</option>
                        <option value="tegak">Tegak</option>
                        </select></td>
                        <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>  
                    </tr>
                </table>
            </center>
        </frame>
        </form>
    </body>

</html>