<?php
function readJsonFile($file)
{
    if (file_exists($file)) {
        $data = file_get_contents($file);
        return json_decode($data, true);
    }
}

function writeJsonFile($file, $data)
{
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $jsonData);
}

function getGrade($nilai)
{
    if ($nilai >= 91 && $nilai <= 100) {
        return 'A';
    } elseif ($nilai >= 81 && $nilai <= 90) {
        return 'B';
    } elseif ($nilai >= 71 && $nilai <= 80) {
        return 'C';
    } elseif ($nilai >= 61 && $nilai <= 70) {
        return 'D';
    } else {
        return 'E';
    }
}

function getStatus($nilai)
{
    if ($nilai >= 71 && $nilai <= 100) {
        return 'Lulus';
    } else {
        return 'Tidak Lulus';
    }
}

if (isset($_POST['submit'])) {
    $newData = array(
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tempat_lahir' => $_POST['tempat_lahir'],
        'tanggal_lahir' => $_POST['tanggal_lahir'],
        'agama' => $_POST['agama'],
        'alamat' => $_POST['alamat'],
        'no_telepon' => $_POST['no_telepon'],
        'email' => $_POST['email'],
        'jurusan' => $_POST['jurusan'],
        'mata_kuliah' => $_POST['mata_kuliah'],
        'nilai' => $_POST['nilai']
    );

    $nilai = (int) $_POST['nilai'];
    $newData['grade'] = getGrade($nilai);
    $newData['status'] = getStatus($nilai);

    $existingData = readJsonFile('data/data_mahasiswa.json');

    if (!empty($newData)) {
        $existingData[] = $newData;
        writeJsonFile('data/data_mahasiswa.json', $existingData);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Form Mahasiswa</h1>
            </div>
        </div>

        <form method="post">
            <div class="row">
                <!-- <div class="col-6"> -->
                <div class="mb-3 col-6">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukkan NIM">
                </div>
                <div class="mb-3 col-6">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                </div>
                <div class="mb-3 col-6">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-select" name="jenis_kelamin">
                        <option selected>-- Pilih --</option>
                        <option value="Laki - Laki">Laki - Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                </div>
                <div class="mb-3 col-6">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir">
                </div>
                <div class="mb-3 col-6">
                    <label for="agama" class="form-label">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" placeholder="Masukkan Agama">
                </div>
                <!-- </div> -->



                <!-- <div class="col-6"> -->
                <div class="mb-3 col-6">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                </div>
                <div class="mb-3 col-6">
                    <label for="no_telepon" class="form-label">No Telepon</label>
                    <input type="number" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan No Telepon">
                </div>
                <div class="mb-3 col-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                </div>
                <div class="mb-3 col-6">
                    <label for="jurusan">Jurusan</label>
                    <select class="form-select" name="jurusan">
                        <option selected>-- Pilih --</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Ssistem Informasi">Sistem Informasi</option>
                        <option value="Manajemen Informatika">Manajemen Informatika</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                    <select class="form-select" name="mata_kuliah">
                        <option selected>-- Pilih --</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="Data Mining">Data Mining</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input type="number" class="form-control" id="nilai" name="nilai" placeholder="Masukkan Nilai">
                </div>
                <!-- </div> -->
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>


    <div class="container">
        <!-- <div class="col-12"> -->
        <h1 class="text-center">Daftar Mahasiswa</h1>
        <!-- </div> -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">NH</th>
                    <th scope="col">Ket</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $data = readJsonFile('data/data_mahasiswa.json');
                if (!empty($data)) {
                    $index = 1;
                    foreach ($data as $item) {
                        echo "<tr>";
                        echo "<td>" . $index . "</td>";
                        echo "<td>" . $item['nim'] . "</td>";
                        echo "<td>" . $item['nama'] . "</td>";
                        echo "<td>" . $item['jenis_kelamin'] . "</td>";
                        echo "<td>" . $item['jurusan'] . "</td>";
                        echo "<td>" . $item['mata_kuliah'] . "</td>";
                        echo "<td>" . $item['nilai'] . "</td>";
                        echo "<td>" . $item['grade'] . "</td>";
                        echo "<td>" . $item['status'] . "</td>";
                        echo "</tr>";
                        $index++;
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="8" class="text-center">Tidak ada data yang tersimpan.</td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>






    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->
</body>

</html>