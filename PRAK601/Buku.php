<?php
    session_start();
    if (!isset($_SESSION['nomor_member']))
    {
        header ("Location: ErrorPage.php");
    }
    require 'Model.php';
    if (isset($_GET['id_buku'])) 
    {
        delete_buku($_GET['id_buku']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Buku</title>
        <style>
            table,th,td {
                border-collapse: collapse; 
                border: solid black 1px; 
                padding: 10px; 
                background-color: #FFFFFF;
            }
            table {
                width: 100%;
            }
            th {
                background-color: #C5B8D3;
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
        <a href="FormBuku.php"><button>Tambah Data</button></a>
        <table>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>E/H</th>
            </tr>
            <?php
                tampil_data("buku")
            ?>
        </table>
    </body>
</html>