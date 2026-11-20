<?php

declare(strict_types=1);

namespace Latihan;

class Produk
{
    public function __construct(public string $nama, private int $harga) {}
    public function subtotal(int $jumlah): int
    {
        if ($jumlah < 1) throw new \InvalidArgumentException('Jumlah minimal 1');
        return $this->harga * $jumlah;
    }
}
$p = new Produk('Kopi Flores', 15000);
echo $p->subtotal(2) . PHP_EOL; // 30000

//  Objek Roti (Sesuai tugas: harga 8000, 3 unit)
$roti = new Produk('Roti', 8000);
echo $roti->nama . " x 3 = " . $roti->subtotal(3) . PHP_EOL; // 24000

// Menangani jumlah 0 menggunakan try/catch
try {
    echo $roti->nama . " x 0 = " . $roti->subtotal(0) . PHP_EOL;
} catch (\InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
?>