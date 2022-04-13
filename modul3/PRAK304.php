<!DOCTYPE html>
    <head>
        <title>Soal 4</title>
        <style>
            .image {
                height: 50px;
                width: 50px;
            }
        </style>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nilai = (int)$_POST['nilai'];
            }
            if (isset($_POST['add'])) {
                $nilai += 1;
            }
            if (isset($_POST['minus'])) {
                $nilai -= 1;
            }
        ?>
        <?php
            if (empty($nilai)) :
        ?>
        <form method="POST">
            Jumlah bintang <input type="text" name="nilai">
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
            endif;
            if (!empty($nilai)) :
        ?>
            Jumlah bintang <?= $nilai; ?>
            <br>
        <?php
            for ($i = 0; $i < $nilai; $i++) {
                echo "<img src='star-images-9441.png' class='image'>";
            }
        ?>
        <form method="POST">
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
            <button type="submit" name="add" value="add">Tambah</button>
            <button type="submit" name="minus" value="minus">Kurang</button>
        </form>
        <?php 
            endif;
            ?>
    </body>
</html>