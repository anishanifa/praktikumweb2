<!DOCTYPE html>
<html>
    <head>
        <title>Soal 5</title>
    </head>
    <body>
    <form method = "POST" >
            <div>
                <input type = "text" name = "teks">
                <button type = "submit" name="submit" value="submit">submit</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                $teks = $_POST['teks'];
                $array = str_split($teks);
                $banyak = count($array);

                echo "<h3>Input :</h3>";
                echo "$teks<br>";
                echo "<h3>Output :</h3>";

                foreach ($array as $key => $value) {
                    for ($x = 0; $x < $banyak; $x++) {
                        if ($x == 0) {
                            echo strtoupper($value);
                        } else {
                            echo strtolower($value);
                        }
                    }
                }
            }
        }
        ?>
    </body>
</html>
