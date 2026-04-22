<?php
class Produk {
    public static $jumlahProduk = 0;
    public $nama;
    public $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
        self::$jumlahProduk++;
    }

    public function tampilProduk() {
        echo "Produk: $this->nama | Harga: Rp $this->harga <br>";
    }
}

class Transaksi {
    final public function prosesTransaksi($produkList) {
        $total = 0;

        echo "<h3>Daftar Produk:</h3>";
        foreach ($produkList as $p) {
            $p->tampilProduk();
            $total += $p->harga;
        }

        echo "<br>Total Bayar: Rp $total";
        echo "<br>Transaksi berhasil diproses";
    }
}

// buat produk
$p1 = new Produk("Sabun", 5000);
$p2 = new Produk("Shampoo", 10000);
$p3 = new Produk("Pasta Gigi", 8000);

// tampilkan total produk
echo "Total Produk: " . Produk::$jumlahProduk . "<br>";

// proses transaksi
$transaksi = new Transaksi();
$transaksi->prosesTransaksi([$p1, $p2, $p3]);