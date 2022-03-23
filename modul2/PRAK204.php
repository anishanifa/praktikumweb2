<!DOCTYPE html>
<html>
    <head>
        <title>Soal 4 - Membaca Ejaan Cacah</title>
    </head>
    <body>
        <form method = "POST" >
            <div>
                <label>Nilai : </label>
                <input type = "text" name = "nilai">
                
            </div>
            <div>
                <button type = "submit" name="konversi" value="konversi">Konversi</button>
            </div>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['konversi'])) {
                    $nilai = $_POST['nilai'];

                    if ($nilai == '0') {
                        echo "<h2>Hasil : Nol</h2>";
                    } else if ($nilai <= '9') {
                        echo "<h2>Hasil : Satuan</h2>";
                    } else if ($nilai == '10') {
                        echo "<h2>Hasil : Puluhan</h2>";
                    } else if ($nilai <= '19') {
                        echo "<h2>Hasil : Belasan</h2>";
                    } else if ($nilai <= '99') {
                        echo "<h2>Hasil : Puluhan</h2>";
                    } else if ($nilai <= '999') {
                        echo "<h2>Hasil : Ratusan</h2>";
                    } else if ($nilai >= '1000') {
                        echo "<h2>Anda menginput Melebihi Limit Bilangan</h2>";
                    }
                }
            } 
        ?>
    </body>
</html>