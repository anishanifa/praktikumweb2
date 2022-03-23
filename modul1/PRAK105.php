<?php
    $daftar = ["Judul" => "Daftar Smartphone Samsung", 
    "S22" => "Samsung Galaxy S22", "S22+" => "Samsung Galaxy S22+",
    "A03" =>  "Samsung Galaxy A03","XC5" =>  "Samsung Galaxy Xcover 5"];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Soal 5 - Tabel Daftar II</title>
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
            font-size:20px;
            font-weight:bold;
            padding-top:20px;
            padding-bottom:20px;
            color:#000000;
            background-color:#FF0000;}
        </style>
    </head>
    <body>
        <table>
        <?php
                echo "<th>".$daftar["Judul"]."</th>";
                echo "<tr>";
                echo "<td>".$daftar["S22"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$daftar["S22+"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$daftar["A03"]."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$daftar["XC5"]."</td>";
                echo "</tr>";
        ?>
        </table>
    </body>
</html>