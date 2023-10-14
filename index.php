<!DOCTYPE html>
<html>

<head>
    <title>Contoh Proyek PHP: Menampung dan Menampilkan Array</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <!-- Formulir untuk menginputkan data mahasiswa -->
    <form method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>
        <br>
        <label>NIM:</label>
        <input type="text" name="nim" required>
        <br>
        <label>Jurusan:</label>
        <input type="text" name="jurusan" required>
        <br>
        <input type="submit" name="submit" value="Tambah Data">
    </form>

    <br>

    <!-- Daftar data mahasiswa yang telah ditambahkan -->
    <h2>Data Mahasiswa Saat Ini:</h2>
    <ul>
        <?php
        // Data mahasiswa dalam bentuk array
        $mahasiswa = array(
            array('nama' => 'John Doe', 'nim' => '12345', 'jurusan' => 'Informatika'),
            array('nama' => 'Jane Smith', 'nim' => '67890', 'jurusan' => 'Sistem Informasi'),
            array('nama' => 'Michael Johnson', 'nim' => '45678', 'jurusan' => 'Teknik Komputer')
        );

        // Cek apakah ada data yang dikirimkan dari formulir
        if (isset($_POST['submit'])) {
            // Ambil data dari input teks
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jurusan = $_POST['jurusan'];

            // Tambahkan data baru ke dalam array
            $mahasiswa[] = array('nama' => $nama, 'nim' => $nim, 'jurusan' => $jurusan);
        }

        // Menampilkan data mahasiswa dalam daftar
        foreach ($mahasiswa as $mhs) {
            echo '<li>Nama: ' . $mhs['nama'] . '</li>';
            echo '<li>NIM: ' . $mhs['nim'] . '</li>';
            echo '<li>Jurusan: ' . $mhs['jurusan'] . '</li>';
            echo '<br>';
        }
        ?>
    </ul>
</body>

</html>