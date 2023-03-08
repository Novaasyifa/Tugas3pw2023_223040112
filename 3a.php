<?php 
$r = 10;
$phi = 3.14;

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungluaslingkaran($r, $phi) {
    $luasLingkaran = $phi*$r*$r;
    return $luasLingkaran;
}

echo "jari-jari =".$r."cm.<br>";
echo "Luas lingkaran =".$luas= hitungLuasLingkaran($r, $phi)."cm<sup>2</sup> <br><hr>";

echo "<h4>Menghitung keliling lingkaran</h4>";
function hitungKelilinglingkaran($phi, $r) {
    $kelilingLingkaran = $phi*$r*$r;
    return $kelilingLingkaran;
}

echo "jari-jari =".$r."cm.<br>";
echo "Keliling Lingkaran =".$keliling= hitungKelilinglingkaran($phi, $r*2)."cm<sup>2</sup> <br><hr>";




?>