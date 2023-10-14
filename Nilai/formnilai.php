<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
</head>
<body>
    <?php include "header.php" ?>
    <div class="container">
        <h2 class="display-2">Nilai Peserta Pelatihan</h2>
        <form action="hitung.php" method="post">
            <div class="mb-3">
                <label for="nilai praktek">Nilai Praktek</label>
                <input type="number" class="form-control" id="nilai" name="np" min="0" max="100" required placeholder="Masukkan Nilai Praktek">
            </div>
            <div class="mb-3">
                <label for="nilai pilihan ganda">Nilai Pilihan Ganda</label>
                <input type="number" class="form-control" id="nilai" name="npg" min="0" max="100" required placeholder="Masukkan Nilai Pilihan Ganda">
            </div>
            <div class="mb-3">
                <label for="nilai sikap">Nilai Sikap</label>
                <input type="number" class="form-control" id="nilai" name="ns" min="0" max="100" required placeholder="Masukkan Nilai Sikap">
            </div>
            <div class="mb-3">
                <label for="nilai kehadiran">Nilai Kehadiran</label>
                <input type="number" class="form-control" id="nilai" name="nk" min="0" max="100" required placeholder="Masukkan Nilai Kehadiran">
            </div>
            
            <button class="btn btn-primary" type="submit">Hitung</button>
            <button class="btn btn-secondary" type="reset">Batal</button>
        </form>
    </div>
</body>
</html>