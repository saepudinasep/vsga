<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Output | Pemesanan Tiket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
  <div class="container mt-4">
    <div class="d-flex justify-content-center">
      <div class="row">
        <div class="col text-center">

          <?php
          $kodeTiket = $_POST['kodeTiket'];//variabel untuk menampung data kode tiket
          $waktu = $_POST['waktu'];//variabel untuk menampung data waktu
          $tanggal = $_POST['tanggal'];//variabel untuk menampung data tanggal
          $jumlahBeli = $_POST['jumlahBeli'];//variabel untuk menampung data jumlah beli

          // function untuk memunculkan nama film sesuai kode tiket
          function getNamaFilm($kodeTiket) {
            $namaFilm = '';
            switch ($kodeTiket) {
              case 'TRM':
                $namaFilm = 'Transformers The Last Knight';
                break;
              case 'MTD':
                $namaFilm = '47 Meters Down';
                break;
              case 'TMM':
                $namaFilm = 'The Mummy';
                break;
              case 'TWM':
                $namaFilm = 'Wonder Woman';
                break;
              default:
                $namaFilm = 'Film tidak valid';
            }
            return $namaFilm;
          }

          $namaFilm = getNamaFilm($kodeTiket);//mengambil nama film dari kode yang telah dikirim
          $hari = date('l', strtotime($tanggal));//mengambil hari dari tanggal yang di kirim dari form sebelumnya

          // kondisi if else untuk menentukan hari dalam bahasa indonesia dan harga per harinya
          if ($hari == "Monday") {
            $hariIndo = "Senin";
            $harga = 40000;
          }elseif ($hari == "Tuesday") {
            $hariIndo = "Selasa";
            $harga = 40000;
          }elseif ($hari == "Wednesday") {
            $hariIndo = "Rabu";
            $harga = 40000;
          }elseif ($hari == "Thursday") {
            $hariIndo = "Kamis";
            $harga = 40000;
          }elseif ($hari == "Friday") {
            $hariIndo = "Jum'at";
            $harga = 50000;
          }elseif ($hari == "Saturday") {
            $hariIndo = "Sabtu";
            $harga = 60000;
          }else {
            $hariIndo = "Minggu";
            $harga = 60000;
          }


          // function hitung total bayar
          function hitungTotalBayar($jumlahBeli, $hariIndo){
            if ($hariIndo === 'Senin' || $hariIndo === 'Selasa' || $hariIndo === 'Rabu' || $hariIndo === 'Kamis') {
              $harga = 40000;
            } elseif ($hariIndo === 'Jumat') {
              $harga = 50000;
            } else {
              $harga = 60000;
            }
            return $jumlahBeli * $harga;
          }

          // variabel untuk menghitung total
          $total = hitungTotalBayar($jumlahBeli, $hariIndo);

          ?>
          
          <h1>STRUK PEMBAYARAN <br> CINEMA DIGITALENT 21</h1>
          <p>==================================================</p>
          <div class="text-start">
            <?php
              echo "<p>Kode Film : $kodeTiket</p>
              <p>Nama Film : $namaFilm</p>
              <p>Tanggal : $tanggal</p>
              <p>Hari : $hariIndo</p>
              <p>Harga : $harga</p>
              <p>Waktu : $waktu</p>
              <p>Jumlah : $jumlahBeli</p>
              <p>Total : $total</p>";
            ?>
          </div>
          <p>==================================================</p>
          <p>Terima Kasih</p>
          <p>==================================================</p>
          <a href="form_pesan.php" class="btn btn-secondary mb-4">Input Lagie</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>