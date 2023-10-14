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
        <form action="prosesForm.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="jk" name="jk">Jenis Kelamin</label>
                <input type="radio" name="jk" value="Pria">Pria
                <input type="radio" name="jk" value="Wanita">Wanita
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Program Studi</label>
                <select class="form-select" aria-label="Default select example" name="prodi">
                    <option value="Manajemen Informatika">Managemen Informatika</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <input type="reset" class="btn btn-secondary" value="Batal">
        </form>
    </div>
    <!-- script javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>