<?php

    // function perkalian
    function perkalian ($bilSatu, $bilDua)
    {
        $hasil = $bilSatu * $bilDua;
        echo "Hasil Perkalian $bilSatu dikali $bilDua = $hasil <br>";
    }

    // function pembagian
    function pembagian ($bilSatu, $bilDua)
    {
        $hasil = $bilSatu / $bilDua;
        echo "Hasil pembagian $bilSatu dibagi $bilDua = $hasil <br>";
    }

    // function penjumlahan
    function penjumlahan ($bilSatu, $bilDua)
    {
        $hasil = $bilSatu + $bilDua;
        echo "Hasil Penjumlahan $bilSatu ditambah $bilDua = $hasil <br>";
    }

    // function pengurangan
    function pengurangan ($bilSatu, $bilDua)
    {
        $hasil = $bilSatu - $bilDua;
        echo "Hasil Pengurangan $bilSatu dikurangi $bilDua = $hasil <br>";
    }

    perkalian (5, 5);
    pembagian (5, 5);
    penjumlahan (5, 5);
    pengurangan (5, 5);


?>