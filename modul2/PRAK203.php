<?php
//Celcius
    function dari_C_ke_C($nilai)
    {
        $celcius=$nilai;
        return $celcius;
    }
    function dari_C_ke_F($nilai)
    {
        $fahrenheit=(9/5*$nilai)+32;
        return $fahrenheit;
    }
    function dari_C_ke_R($nilai)
    {
        $reamur=4/5*$nilai;
        return $reamur;
    }
    function dari_C_ke_K($nilai)
    {
        $kelvin=(5/5*$nilai)+273.15;
        return $kelvin;
    }
//Fahrenheit
    function dari_F_ke_C($nilai)
    {
        $celcius=5/9*($nilai-32);
        return $celcius;
    }
    function dari_F_ke_F($nilai)
    {
        $fahrenheit=$nilai;
        return $fahrenheit;
    }
    function dari_F_ke_R($nilai)
    {
        $reamur=4/9*($nilai-32);
        return $reamur;
    }
    function dari_F_ke_K($nilai)
    {
        $kelvin=5/9*($nilai+459.67);
        return $kelvin;
    }
//Reamur
    function dari_R_ke_C($nilai)
    {
        $celcius=5/4*$nilai;
        return $celcius;
    }
    function dari_R_ke_F($nilai)
    {
        $fahrenheit=(9/4*$nilai)+32;
        return $fahrenheit;
    }
    function dari_R_ke_R($nilai)
    {
        $reamur=$nilai;
        return $reamur;
    }
    function dari_R_ke_K($nilai)
    {
        $kelvin=(5/4*$nilai)+273.15;
        return $kelvin;
    }
//Kelvin
    function dari_K_ke_C($nilai)
    {
        $celcius=5/5*($nilai-273.15);
        return $celcius;
    }
    function dari_K_ke_F($nilai)
    {
        $fahrenheit=(9/5*$nilai)-459.67;
        return $fahrenheit;
    }
    function dari_K_ke_R($nilai)
    {
        $reamur=4/5*($nilai-273.15);
        return $reamur;
    }
    function dari_K_ke_K($nilai)
    {
        $kelvin=$nilai;
        return $kelvin;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Soal 3 - Konversi Suhu C/F/R/K</title>
    </head>
    <body>
        
        <form action = "" method = "POST" >
            <div>
                <label>Nilai : </label>
                <input type = "text" name = "nilai">
            </div>
            <div>
                <label>Dari : </label><br/>
                <input type = "radio" name = "suhu1" value = "celcius">Celcius<br/>
                <input type = "radio" name = "suhu1" value = "fahrenheit">Fahrenheit<br/>
                <input type = "radio" name = "suhu1" value = "reamur">Reamur<br/>
                <input type = "radio" name = "suhu1" value = "kelvin">Kelvin<br/>
                
            </div>
            <div>
                <label>Ke : </label><br/>
                <input type = "radio" name = "suhu2" value = "celcius">Celcius<br/>
                <input type = "radio" name = "suhu2" value = "fahrenheit">Fahrenheit<br/>
                <input type = "radio" name = "suhu2" value = "reamur">Reamur<br/>
                <input type = "radio" name = "suhu2" value = "kelvin">Kelvin<br/>            
            </div>
            <div>
                <button type = "submit" name="konversi" value="konversi">Konversi</button>
            </div>
            <div>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        if (isset($_POST['konversi'])) {
                            $suhu1=$_POST['suhu1'];
                            $suhu2=$_POST['suhu2'];
                            $nilai=$_POST['nilai'];

                            //Celcius
                            if ($suhu1=='celcius') {
                                if ($suhu2=='celcius') 
                                {
                                    $celcius=dari_C_ke_C($nilai);
                                    echo "<h2>Hasil Konversi : $celcius °C</h2>";
                                }  elseif ($suhu2=='fahrenheit') 
                                {
                                    $fahrenheit=dari_C_ke_F($nilai);
                                    echo "<h2>Hasil Konversi : $fahrenheit °F</h2>";
                                }  elseif ($suhu2=='reamur') 
                                {
                                    $reamur=dari_C_ke_R($nilai);
                                    echo "<h2>Hasil Konversi : $reamur °R</h2>";
                                }  elseif ($suhu2=='kelvin') 
                                {
                                    $kelvin=dari_C_ke_K($nilai);
                                    echo "<h2>Hasil Konversi $kelvin °K</h2>";
                                }  
                            }
                            //Fahrenheit
                            if ($suhu1=='fahrenheit') {
                                if ($suhu2=='celcius') 
                                {
                                    $celsius=dari_F_ke_C($nilai);
                                    echo "<h2>Hasil Konversi : $celsius °C</h2>";
                                }  elseif ($suhu2=='fahrenheit') 
                                {
                                    $fahrenheit=dari_F_ke_F($nilai);
                                    echo "<h2>Hasil Konversi : $fahrenheit °F</h2>";
                                }  elseif ($suhu2=='reamur') 
                                {
                                    $reamur=dari_F_ke_R($nilai);
                                    echo "<h2>Hasil Konversi : $reamur °R</h2>";
                                }  elseif ($suhu2=='kelvin') 
                                {
                                    $kelvin=dari_F_ke_K($nilai);
                                    echo "<h2>Hasil Konversi $kelvin °K</h2>";
                                }  
                            }
                            //Reamur
                            if ($suhu1=='reamur') {
                                if ($suhu2=='celcius') 
                                {
                                    $celsius=dari_R_ke_C($nilai);
                                    echo "<h2>Hasil Konversi : $celsius °C</h2>";
                                }  elseif ($suhu2=='fahrenheit') 
                                {
                                    $fahrenheit=dari_R_ke_F($nilai);
                                    echo "<h2>Hasil Konversi : $fahrenheit °F</h2>";
                                }  elseif ($suhu2=='reamur') 
                                {
                                    $reamur=dari_R_ke_R($nilai);
                                    echo "<h2>Hasil Konversi : $reamur °R</h2>";
                                }  elseif ($suhu2=='kelvin') 
                                {
                                    $kelvin=dari_R_ke_K($nilai);
                                    echo "<h2>Hasil Konversi $kelvin °K</h2>";
                                }  
                            }
                            //Kelvin
                            if ($suhu1=='kelvin') {
                                if ($suhu2=='celcius') 
                                {
                                    $celsius=dari_K_ke_C($nilai);
                                    echo "<h2>Hasil Konversi : $celsius °C</h2>";
                                }  elseif ($suhu2=='fahrenheit') 
                                {
                                    $fahrenheit=dari_K_ke_F($nilai);
                                    echo "<h2>Hasil Konversi : $fahrenheit °F</h2>";
                                }  elseif ($suhu2=='reamur') 
                                {
                                    $reamur=dari_K_ke_R($nilai);
                                    echo "<h2>Hasil Konversi : $reamur °R</h2>";
                                }  elseif ($suhu2=='kelvin') 
                                {
                                    $kelvin=dari_K_ke_K($nilai);
                                    echo "<h2>Hasil Konversi $kelvin °K</h2>";
                                }  
                            }
                        }
                    }
                ?>
            </div>
        </form>
    </body>
</html>