<?php
    session_start();
    if (!isset($_SESSION['nomor_member']))
    {
        header ("Location: ErrorPage.php");
    }
    require 'Model.php';
    if (isset($_GET['id_member']))
    {
        edit_member();
    }
    if (isset($_POST['submit'])) {
        $tgl_mendaftar = date_create($_POST['tgl_mendaftar']);
        $tgl_mendaftar = date_format($tgl_mendaftar, "Y-m-d H:i:s");
        print_r($_POST);
        add_member($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_mendaftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_mendaftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_mendaftar']));
        update_member($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_mendaftar, $_POST['tgl_terakhir_bayar']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Member</title>
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
                    <td>Nama Member</td>
                    <td>
                        <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ? "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Nomor Member</td>
                    <td>
                        <input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ? "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>
                        <textarea name="alamat" cols="30" rows="10" required> <?php echo (isset($_GET['id_member'])) ? $result[0]["alamat"]  : ""; ?> </textarea> <br>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Mendaftar</td>
                    <td>
                        <input type="datetime-local" name="tgl_mendaftar" <?php echo (isset($_GET['id_member'])) ? "value = " . date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?> required> <br>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Terakhir Bayar</td>
                    <td>
                        <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ? "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                            if (isset($_GET['id_member'])) {
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