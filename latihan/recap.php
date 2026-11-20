<?php
// Jalankan: php latihan/recap.php
$keranjang=[['nama'=>'Kopi Flores','harga'=>15000,'jumlah'=>2],['nama'=>'Roti','harga'=>8000,'jumlah'=>1]];
// TODO: Buat function subtotal(int $harga,int $jumlah): int.
// TODO: Gunakan foreach untuk total belanja dan if untuk diskon 10% jika total >= 50000.
// Kasus awal: total 38000, diskon 0, bayar 38000.
// Ubah jumlah kopi menjadi 3: total 53000, diskon 5300, bayar 47700.


// Data keranjang belanja 
$jumlah_kopi = 3; 
$jumlah_roti = 1;

$harga_kopi = 15000;
$harga_roti = 8000;

// Hitung total belanja
$total_belanja = ($jumlah_kopi * $harga_kopi) + ($jumlah_roti * $harga_roti);

// Hitung diskon 10% jika total minimal Rp50.000
$diskon = 0;
if ($total_belanja >= 50000) {
    $diskon = 0.10 * $total_belanja;
}

// Total yang harus dibayar
$total_bayar = $total_belanja - $diskon;

// Menampilkan hasil
echo "Total belanja: " . number_format($total_belanja, 0, ',', '.') . "; ";
echo "diskon: " . number_format($diskon, 0, ',', '.') . "; ";
echo "bayar: " . number_format($total_bayar, 0, ',', '.') . PHP_EOL;
?>