<!DOCTYPE html>
<html>
    <head>
        <title>Soal 1 - Mengurutkan dengan Metode Kondisional</title>
    </head>
    <body>
        <form method = "POST" >
            <div>
                <label>Nama 1 : </label>
                <input type = "text" name = "nama1">
            </div>
            <div>
                <label>Nama 2 : </label>
                <input type = "text" name = "nama2">
            </div>
            <div>
                <label>Nama 3 : </label>
                <input type = "text" name = "nama3">
            </div>
            <button type = "submit" name="urut" value="urut">Urutkan</button>
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['urut'])) {
                    $nama1 = $_POST['nama1'];
                    $nama2 = $_POST['nama2'];
                    $nama3 = $_POST['nama3'];

                    if ($nama1 < $nama2 && $nama1 < $nama3) {
                        if ($nama2 < $nama3) {
                            echo $nama1;
                            echo "<br>";
                            echo $nama2;
                            echo "<br>";
                            echo $nama3;
                            echo "<br>";
                        } elseif ($nama3 < $nama2) {
                            echo $nama1;
                            echo "<br>";
                            echo $nama3;
                            echo "<br>";
                            echo $nama2;
                            echo "<br>";
                        }
                    }
                    if ($nama2 < $nama1 && $nama2 < $nama3) {
                        if ($nama1 < $nama3) {
                            echo $nama2;
                            echo "<br>";
                            echo $nama1;
                            echo "<br>";
                            echo $nama3;
                            echo "<br>";
                        } elseif ($nama3 < $nama1) {
                            echo $nama2;
                            echo "<br>";
                            echo $nama3;
                            echo "<br>";
                            echo $nama1;
                            echo "<br>";
                        }
                    }
                    if ($nama3 < $nama1 && $nama3 < $nama2) {
                        if ($nama1 < $nama2) {
                            echo $nama3;
                            echo "<br>";
                            echo $nama1;
                            echo "<br>";
                            echo $nama2;
                            echo "<br>";
                        } elseif ($nama2 < $nama1) {
                            echo $nama3;
                            echo "<br>";
                            echo $nama2;
                            echo "<br>";
                            echo $nama1;
                            echo "<br>";
                        }
                    }
                }
            }
        ?>
    </body>
</html>

