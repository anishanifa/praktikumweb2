<?php
    include 'Koneksi.php';
    
    session_start();
    if (isset($_SESSION['nomor_member'])) 
    {
        header("Location: Indeks.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <style>
            table {
                padding: 10px;
            }
            button {
                align: right;
                background-color: #ABDD9E;
                font-style: bold;
            }
            body {
                background-color: #59936C;
            }
        </style>
    <body>
        <table>
            <form action="Login.php" method= "POST">
                <tr>
                    <td>Nomor Member</td>
                    <td><input type="text" name="nomor_member" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="login">Login</button></td>
                </tr>
            </form>
        </table>
    </body>
</html>