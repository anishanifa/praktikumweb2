<!DOCTYPE html>
<html>
    <head>
        <title>Soal 2</title>
    </head>
    <style>
        .image {
            height: 25px;
            width: 25px;
        }
    </style>
    <body>
        <form method = "POST" >
            <div>
                <label>Tinggi : </label>
                <input type = "text" name = "tinggi">
            </div>
            <div>
                <label>Alamat Gambar : </label>
                <input type = "text" name = "url">
            </div>
            <div>
                <button type = "submit" name="cetak" value="cetak">Cetak</button>
            </div>
        </form>
        <?php
            echo "<br>";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['cetak'])) {
                    $tinggi = $_POST['tinggi'];
                    $url = $_POST['url'];
                    
                    $x = 1;

                    while ($x <= $tinggi) {
                        $y = 1;
                        while ($y < $x) {
                            echo "&ensp;"."&ensp;"."&ensp;";
                            $y++;
                        }
                        $z = $tinggi;
                        while ($z >= $x) {
                            echo "<img src='$url' class='image'>";
                            $z--;
                        }
                        echo "<br>";
                        $x++;
                    }
                }
            }
        ?>
    </body>
</html>