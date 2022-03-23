<!DOCTYPE html>
<html>
    <head>
        <title>Soal 3 - Konversi Suhu</title>
    </head>
    <body>
        <?php
            static $celcius = 37.841;

            $fahrenheit = (9 / 5) * $celcius + 32;
            $reamur = (4 / 5) * $celcius;
            $kelvin = $celcius + 273.15;

            printf ("Fahrenheit (F) = %.4f", $fahrenheit);
            echo "<br>";
            printf ("Reamur (R) = %.4f", $reamur);
            echo "<br>";
            printf ("Kelvin (K) = %.4f", $kelvin);
            echo "<br>";
        ?>
    </body>
</html>