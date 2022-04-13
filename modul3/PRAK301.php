<!DOCTYPE html>
<html>
    <head>
        <title>Soal 1 - Alternating Color Odd/Even</title>
    </head>
    <style>
        p {
            font-weight:bold;
            font-size:25px;
        }
    </style>
    <body>
        <form method = "POST" >
            <div>
                <label>Jumlah Peserta : </label>
                <input type = "text" name = "peserta">
                
            </div>
            <div>
                <button type = "submit" name="cetak" value="cetak">Cetak</button>
            </div>
        </form>
        <?php
            $warnaGanjil = "#F70C15";
            $warnaGenap = "#078838";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['cetak'])) {
                    $peserta = $_POST['peserta'];
                    
                    $awal = 1;

                    while ($awal <= $peserta) {
                        if ($awal % 2 == 0) {
                            echo "<p style=color:$warnaGenap>Peserta ke-$awal</p>";
                        } else {
                            echo "<p style=color:$warnaGanjil>Peserta ke-$awal</p>";
                        }
                        $awal++;
                    }
                }
            }
        ?>
    </body>
</html>