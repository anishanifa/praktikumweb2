<!DOCTYPE html>
<html>
    <head>
        <title>Soal 2 - Menerima Input</title>
    </head>
    <style>
        .error {color : #FF0000;}
    </style>
    <body>
        <?php
            $namaError = $nimError = $jkError = "";
            $nama = $nim = $jk = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["nama"])) {
                    $namaError = "nama tidak boleh kosong";
                } else {
                    $nama = test_input($_POST["nama"]);
                }
                
                if (empty($_POST["nim"])) {
                    $nimError = "nim tidak boleh kosong";
                } else {
                    $nim = test_input($_POST["nim"]);
                }
            
                if (empty($_POST["jk"])) {
                    $jkError = "jenis kelamin tidak boleh kosong";
                } else {
                    $jk = test_input($_POST["jk"]);
                }
            }
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
        <form method = "POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div>
                <label>Nama : </label>
                <input type = "text" name = "nama">
                <span class="error">* <?php echo $namaError;?></span>
            </div>
            <div>
                <label>NIM : </label>
                <input type = "text" name = "nim">
                <span class="error">* <?php echo $nimError;?></span>   
            </div>
            <div>
                <label>Jenis Kelamin : </label>
                <span class="error">* <?php echo $jkError;?></span><br/>
                <input type = "radio" name = "jk" value = "Laki-laki">Laki-Laki<br/>
                <input type = "radio" name = "jk" value = "Perempuan">Perempuan<br/>

            </div>
            <button type = "submit" name="submit" value="submit">Submit</button>
        </form>
        <?php
            echo "<h2>Output :</h2>";  
            echo $nama;   
            echo "<br>";   
            echo $nim;   
            echo "<br>";   
            echo $jk;   
        ?>
    </body>
</html>