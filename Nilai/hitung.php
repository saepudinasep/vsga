<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="container">
        <h2 class="display-2">Nilai Peserta Pelatihan - Hasil</h2>
        <?php
        $np = $_POST['np'];
        $npg = $_POST['npg'];
        $ns = $_POST['ns'];
        $nk = $_POST['nk'];

        $totalNilai = $np + $npg + $ns + $nk;
        $rataRata = $totalNilai / 4;

        echo 'Total Nilai: ' . $totalNilai . '<br>';
        echo 'Rata-rata Nilai: ' . number_format($rataRata, 2);
        ?>
    </div>
</body>
</html>