<?php
    session_start();
    if (!isset($_SESSION['nomor_member']))
    {
        header ("Location: ErrorPage.php");
    }
    require 'Model.php';
    if (isset($_GET['id_peminjaman'])) 
    {
        edit_peminjaman();
    }
    if (isset($_POST['submit'])) {
        add_peminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        update_peminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Peminjaman</title>
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
                    <td>Tanggal Peminjaman</td>
                    <td>
                        <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ? "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required><br>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Pengembalian</td>
                    <td>
                        <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ? "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required><br>
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <?php
                        if (isset($_GET['id_peminjaman'])) {
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