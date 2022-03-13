<!DOCTYPE html>
<html>
<head>
    <title>
        Nomor 3
    </title>
</head>
<body>

    <h1>Variable</h1>

    <?php
    $angka1=5;
    $angka2=8;
    $hasil1=$angka1+$angka2;
    $hasil2=$angka1-$angka2;
    $hasil3=$angka1*$angka2;
    
    echo "<h3>Penjumlahan</h3>";
    echo "Penjumlahan dari ".$angka1." + ". $angka2." adalah ". $hasil1."<br>";
    echo "<h3>Pengurangan</h3>";
    echo "Pengurangan dari " . $angka1 . " - " . $angka2 . " adalah " .$hasil2 . "<br>";
    echo "<h3>Perkalian</h3>";
    echo "Perkalian dari " . $angka1 . " x " . $angka2 . " adalah " . $hasil3 . "<br>";
    ?>

</body>

</html>