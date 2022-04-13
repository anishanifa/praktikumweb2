<!DOCTYPE html>
<html>
    <head>

        <title>Soal 3</title>
    </head>
    <body>
        <form method = "POST" >
            <div>
                <label>Batas Bawah : </label>
                <input type = "text" name = "bawah">
            </div>
            <div>
                <label>Batas Atas : </label>
                <input type = "text" name = "atas">
            </div>
            <div>
                <button type = "submit" name="cetak" value="cetak">Cetak</button>
            </div>
        </form>

        <?php
        echo "<br>";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['cetak'])) {
                $atas = $_POST['atas'];
                $bawah = $_POST['bawah'];
                
                do {
                    if (($bawah + 7) % 5 == 0) {
                        echo "<img src=\"star-images-9441.png\" height=\"20px\" width=\"20px\">";
                    } else {
                        echo " $bawah ";
                    }
                    $bawah++;
                }
                while ($bawah <= $atas);
            }
        }
        ?>
    </body>
</html>