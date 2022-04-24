<?php
    $data = [
        [
            'no' => 1, 'nama' => 'Ridho', 'mk' => [
                ['nama_mk' => 'Pemrograman I', 'sks' => 2],
                ['nama_mk' => 'Praktikum Pemrograman I', 'sks' => 1], 
                ['nama_mk' => 'Pengantar Lingkungan Lahan Basah', 'sks' => 2],
                ['nama_mk' => 'Arsitektur Komputer', 'sks' => 3]
            ]
        ],
        [
            'no' => 2, 'nama' => 'Ratna', 'mk' => [
                ['nama_mk' => 'Basis Data I', 'sks' => 2],
                ['nama_mk' => 'Praktikum Basis Data I', 'sks' => 1], 
                ['nama_mk' => 'Kalkulus', 'sks' => 3]
            ]
        ],
        [
            'no' => 3, 'nama' => 'Tono', 'mk' => [
                ['nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
                ['nama_mk' => 'Analisis dan Perancangan Sistem', 'sks' => 3], 
                ['nama_mk' => 'Komputasi Awan', 'sks' => 3],
                ['nama_mk' => 'Kecerdasan Bisnis', 'sks' => 3]
            ]
        ]
    ];

    for ($i=0; $i < count($data); $i++) {
        $jumlah_sks = 0;
        
        for ($j=0; $j < count($data[$i]['mk']); $j++) {
            $jumlah_sks += $data[$i]['mk'][$j]['sks'];
        }

        $data[$i]['jumlah_sks'] = $jumlah_sks;
        
        if ($data[$i]['jumlah_sks'] < 7) {
            $data[$i]['keterangan'] = "<div style='background : #ba131a;'>Revisi KRS</div>";
        }
        else{
            $data[$i]['keterangan'] = "<div style='background : #3ab54b;'>Tidak Revisi</div>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Soal 3</title>
        <style>
            table {
                border-collapse : collapse;
            }
            td {
                border : solid black 1px;
                padding-left : 10px;
                padding-right : 20px;
            }
            th {
                border : solid black 1px;
                background-color : #e0e0e0;
                text-align : center;
                padding-left : 10px;
                padding-right : 10px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
            <?php
                for ($i=0; $i < count($data); $i++) {
                    for ($j=0; $j < count($data[$i]['mk']); $j++) {
                    echo "<tr>";
                        if ($j == 0) {
                            echo "<td>".$data[$i]['no']."</td>";
                            echo "<td>".$data[$i]['nama']."</td>";
                            echo "<td>".$data[$i]['mk'][$j]['nama_mk']."</td>";
                            echo "<td>".$data[$i]['mk'][$j]['sks']."</td>";
                            echo "<td>".$data[$i]['jumlah_sks']."</td>";
							echo "<td>".$data[$i]['keterangan']."</td>";
                        } else {
							echo "<td></td>";
							echo "<td></td>";
							echo "<td>".$data[$i]['mk'][$j]['nama_mk']."</td>";
							echo "<td>".$data[$i]['mk'][$j]['sks']."</td>";
							echo "<td></td>";
							echo "<td></td>";
						}
						echo "</tr>";
                    }
                }
            ?>
        </table>
    </body>
</html>
