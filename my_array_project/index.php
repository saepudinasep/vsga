<?php
// Fungsi untuk membaca data dari file JSON
function readJsonFile($file)
{
    if (file_exists($file)) {
        $data = file_get_contents($file);
        return json_decode($data, true);
    }
    return array();
}

// Fungsi untuk menulis data ke dalam file JSON
function writeJsonFile($file, $data)
{
    $jsonData = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $jsonData);
}

// Mengecek apakah ada data yang dikirimkan dari form
if (isset($_POST['submit'])) {
    $newData = $_POST['data'];
    $existingData = readJsonFile('data.json');

    // Menambahkan data baru ke array yang sudah ada
    if (!empty($newData)) {
        $existingData[] = $newData;
        writeJsonFile('data.json', $existingData);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contoh Project PHP dan JSON</title>
</head>

<body>
    <h1>Contoh Project PHP dan JSON</h1>

    <!-- Form untuk menambahkan data -->
    <form method="post">
        <label for="data">Masukkan Data Baru:</label>
        <input type="text" name="data" id="data">
        <input type="submit" name="submit" value="Tambahkan">
    </form>

    <?php
    // Membaca data dari file JSON dan menampilkannya
    $data = readJsonFile('data.json');
    if (!empty($data)) {
        echo "<h2>Data yang telah disimpan:</h2>";
        echo "<ul>";
        foreach ($data as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tidak ada data yang tersimpan.</p>";
    }
    ?>

</body>

</html>