<?php
    include 'Koneksi.php';
    session_start();

    if (isset($_SESSION['nomor_member']))
    {
        header('Location: Login.php');
    }
    if (isset($_POST['login']))
    {
        $nomor_member = $_POST['nomor_member'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM users WHERE nomor_member = '$nomor_member' AND password = '$password'";
        $result = mysqli_query($pdo_conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['nomor_member'] = $row['nomor_member'];
            header("Location: Login.php");
        } else {
            echo "<script>alert ('Nomor Member atau Password yang Anda masukkan salah. Silahkan coba lagi!')</script>";
        }

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
            <form method= "POST" class='login_member'>
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