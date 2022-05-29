<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <style>
            body {
                background-color: #59936C;
            }
        </style>
    <body>
    <?php
        include 'Koneksi.php';
        session_start();
        $nomor_member = $_POST['nomor_member'];
        $password = $_POST['password'];

        $sql = koneksi() -> prepare("SELECT * FROM member WHERE nomor_member = :nomor_member");
        $sql -> bindParam('nomor_member', $nomor_member, PDO::PARAM_STR);
        $sql -> execute();
        $output = $sql -> fetch();
        if ($output) {
            if ($password == $output["password"]) 
            {
                $_SESSION["nomor_member"] = $output['nomor_member'];
                header("Location: Indeks.php");
            } else {
            echo "</br>Nomor member atau Password yang anda masukkan salah";
            echo "</br>Silahkan <a href='FormLogin.php'>login</a> kembali";
            }
        }
    ?>
    </body>
</html>
