<?php
    require 'Model.php';
    if (isset($_GET['id_peminjaman'])) 
    {
        delete_peminjaman($_GET['id_peminjaman']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Peminjaman</title>
        <style>
            table,th,td {
                border-collapse: collapse; 
                border: solid black 1px; 
                padding: 10px; 
                background-color: white;
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
        <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
        <table>
            <tr>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
            <?php
            tampil_data("peminjaman")
            ?>
        </table>
    </body>
</html>