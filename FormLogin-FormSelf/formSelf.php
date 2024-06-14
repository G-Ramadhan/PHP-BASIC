<html>

<head>
    <title>Using Forms</title>
</head>

<body style="background:Beige;">
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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <center>
            <h2>FORM LOGIN</h2>
        </center>
        <center>
            <h4><i>(mengirimkan data pada form yang sama)</i></h4>
        </center>
        <center><table>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><input name="username" type="text" id="username"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input name="password" type="password" id="password"></td>
                <td><input name="send" type="submit" id="send" value="Send!">
        </table></center>
    </form>
</body>

</html>

<?php
if (isset($_REQUEST['send'])) {
    echo "<br>";
    echo "<center><i>Menampilkan username dengan POST : </i><b>" . $_POST['username'] . "</b><br></center>";
    echo "<center><i>Menampilkan username dengan REQUEST : </i><b>" . $_REQUEST['username'] . "</b><br></center>";

    $password = $_POST['password'];
    echo "<center><i>Password =</i><b> $password</b></center>";
    echo "<hr>";
    echo ("<a href='formSelf.php'>[Kembali]</a>");
}


?>