<!DOCTYPE html>
<html>
    <head>
        <title>Soal 1</title>
        <style>
            table, tr, td {
                border-collapse : collapse;
                border : solid black 1px;
                width : 200px; 
                height : 50px;
                text-align : center;
            }
        </style>
    </head>
    <body>
        <form method = "POST">
            <div>
                <label>Panjang : </label>
                <input type = "text" name = "panjang">
            </div>
            <div>
                <label>Lebar : </label>
                <input type = "text" name = "lebar">
            </div>
            <div>
                <label>Nilai : </label>
                <input type = "text" name = "nilai">
            </div>
            <div>
                <button type = "submit" name="cetak" value="cetak">Cetak</button>
            </div>
            <br>
        </form>
        
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['cetak'])) {

                    $panjang = $_POST['panjang'];
                    $lebar = $_POST['lebar'];
                    $nilai = $_POST['nilai'];
                    $arraySTR = explode (" ", $nilai);
                    $arrayNL = count ($arraySTR);
                    
                    if ($panjang * $lebar == $arrayNL) {
                        $loop=0;
                        for ($i=0; $i < $panjang; $i++) { 
                            for ($j=0; $j < $lebar; $j++) { 
                                $show[$i][$j]=$arraySTR[$loop];
                                $loop++;
                            }
                        }
                        echo "<table>";
                        for ($i=0; $i < $panjang; $i++) { 
                            echo "<tr>";
                                for ($j=0; $j < $lebar; $j++) { 
                                    echo "<td>".$show[$i][$j]."</td>";
                                }
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else if ($panjang * $lebar < $arrayNL) {
                        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                    }
                    else {
                        error_reporting(0);
                        $loop=0;
                        for ($i=0; $i < $panjang; $i++) { 
                            for ($j=0; $j < $lebar; $j++) { 
                                $show[$i][$j]=$arraySTR[$loop];
                                $loop++;
                            }
                        }
                        echo "<table>";
                        for ($i=0; $i < $panjang ; $i++) { 
                            echo "<tr>";
                                for ($j=0; $j < $lebar; $j++) { 
                                    echo "<td>".$show[$i][$j]."</td>";
                                }
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                }    
            }
        ?>
    </body>
</html>