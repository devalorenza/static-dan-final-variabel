<?php
class Produk {
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }

    public static function resetJumlah() {
        self::$jumlah = 0;
    }
}

// buat 5 objek
new Produk();
new Produk();
new Produk();
new Produk();
new Produk();

// tampilkan sebelum reset
echo "Sebelum reset: " . Produk::$jumlah . "<br>";

// reset
Produk::resetJumlah();

// tampilkan setelah reset
echo "Sesudah reset: " . Produk::$jumlah;