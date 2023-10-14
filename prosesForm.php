<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="display-5">Data Biodata Mahasiswa</h1>
        <?php
        $em = $_POST['email'];
        $nm = $_POST['name'];
        $jk = $_POST['jk'];
        $pr = $_POST['prodi'];

        echo "Email Mahasiswa = $em <br>";
        echo "Nama Lengkap = $nm <br>";
        echo "Jenis Kelamin = $jk <br>";
        echo "Program Studi = $pr <br>";
        ?>
    </div>
    <!-- script javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>