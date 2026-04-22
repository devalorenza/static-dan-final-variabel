<?php
class Produk {
    public static $jumlah = 0;

    public function __construct() {
        self::$jumlah++;
    }
}

new Produk();
new Produk();

echo "Jumlah produk: " . Produk::$jumlah;