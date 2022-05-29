<?php 
    session_start();
    if (!isset($_SESSION['nomor_member']))
    {
        header ("Location: ErrorPage.php");
    }
    require 'Model.php';
    if (isset($_GET['id_buku']))
    {
        edit_buku();
    }
    if (isset($_POST['submit']))
    {
        add_buku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    if (isset($_POST['update']))
    {
        update_buku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Buku</title>
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
    </head>
    <body>
        <form method = "POST">
            <table>
                <tr>
                    <td>Judul Buku</td>
                    <td>
                        <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ? "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Nama Penulis</td>
                    <td>
                        <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ? "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td>
                        <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ? "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Tahun Terbit</td>
                    <td>
                        <input type="text" name="tahun_terbit" <?php echo (isset($_GET['id_buku'])) ? "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                            if (isset($_GET['id_buku'])) {
                                echo "<button type='submit' name='update'>Update</button>";
                            } else {
                                echo "<button type='submit' name='submit'>Tambah</button>";
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>