<?php
    session_start();
    if (!isset($_SESSION['nomor_member']))
    {
        header ("Location: ErrorPage.php");
    }
    require 'Model.php';
    if (isset($_GET['id_member'])) 
    {
        delete_member($_GET['id_member']);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Data Member</title>
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
        <a href="FormMember.php"><button>Tambah Data</button></a>
        <table>
            <tr>
                <th>Nama Member</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Pendaftaran</th>
                <th>Tanggal Pembayaran Terakhir</th>
                <th>E/H</th>
            </tr>
            <?php
                tampil_data("member")
            ?>
        </table>
    </body>
</html>