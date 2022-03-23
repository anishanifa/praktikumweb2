<!DOCTYPE html>
<html>
    <head>
        <title>Soal 2 - Volume Bangun Ruang Tabung</title>
    </head>
    <body>
        <?php
        static $jari = 4.2;
        static $tinggi = 5.4;
        static $phi = 3.14;

        $volume = $phi * ($jari * $jari) * $tinggi;
        printf ("%.3f m3", $volume);
        ?>
    </body>
</html>