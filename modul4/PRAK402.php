<?php
    $data = [
        [
            'Nama' => 'Andi',
            'NIM' => '2101001',
            'Nilai UTS' => 87,
            'Nilai UAS' => 65
        ],
        [
            'Nama' => 'Budi',
            'NIM' => '2101002',
            'Nilai UTS' => 76,
            'Nilai UAS' => 79
        ],
        [
            'Nama' => 'Tono',
            'NIM' => '2101003',
            'Nilai UTS' => 50,
            'Nilai UAS' => 41
        ],
        [
            'Nama' => 'Jessica', 
            'NIM' => '2101004',
            'Nilai UTS' => 60,
            'Nilai UAS' => 75
        ]
    ];

    for ($i = 0; $i < count($data); $i++) {
        $nilaiAkhir = (40/100 * $data[$i]['Nilai UTS']) + (60/100 * $data[$i]['Nilai UAS']);
        $data[$i]['Nilai Akhir'] = $nilaiAkhir;
        if ($nilaiAkhir >= 80) {
            $data[$i]['Huruf'] = 'A';
        } else if ($nilaiAkhir >= 70) {
            $data[$i]['Huruf'] = 'B';
        } else if ($nilaiAkhir >= 60) {
            $data[$i]['Huruf'] = 'C';
        } else if ($nilaiAkhir >= 50) {
            $data[$i]['Huruf'] = 'D';
        } else {
            $data[$i]['Huruf'] = 'E';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Soal 2</title>
        <style>
        table{
            border-collapse : collapse;
        }
        td{
            border : solid black 1px;
            width: 20px;
            padding-left: 10px;
        }
        th{
            border : solid black 1px;
            background-color : #e0e0e0;
            width: 100px;
            text-align : center;
        }
    </style>
    </head>
    <body>
        <table>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
            <?php for($i=0; $i < count($data); $i++) {
                echo "<tr>";
                echo "<td>".$data[$i]['Nama']."</td>";
                echo "<td>".$data[$i]['NIM']."</td>";
                echo "<td>".$data[$i]['Nilai UTS']."</td>";
                echo "<td>".$data[$i]['Nilai UAS']."</td>";
                echo "<td>".$data[$i]['Nilai Akhir']."</td>";
                echo "<td>".$data[$i]['Huruf']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>