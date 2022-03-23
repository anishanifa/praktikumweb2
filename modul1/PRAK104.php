<?php
    $daftar = ["Daftar Smartphone Samsung", "Samsung Galaxy S22", 
    "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Soal 4 - Tabel Daftar I</title>
        <style>
        table, th, tr, td {
            text-align:left;
            border:1px solid black;
            border-spacing:2px;
            background-color:#FFFFFF;
        }
        table { 
            border-collapse:separate;
            font-family:"Times New Roman", Times, serif;
            font-size:16px;
            table-layout: auto;}
        table th {
            font-weight:bold;
            color:#000000;
            background-color:#FFFFFF;}   
        </style>
    </head>
    <body>
        <table>
        <?php
            echo "<th>".$daftar[0]."</th>";
            echo "<tr>";
            echo "<td>".$daftar[1]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$daftar[2]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$daftar[3]."</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$daftar[4]."</td>";
            echo "</tr>";
        ?>
        </table>
    </body>
</html>