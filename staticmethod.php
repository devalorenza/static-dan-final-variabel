<?php
class Hitung {
    public static function tambah($a, $b) {
        return $a + $b;
    }

    public static function kurang($a, $b) {
        return $a - $b;
    }

    public static function luasPersegi($s) {
        return $s * $s;
    }
}

// ambil input
$a = $_POST['a'] ?? 0;
$b = $_POST['b'] ?? 0;
$s = $_POST['s'] ?? 0;
?>

<form method="POST">
    Angka A: <input type="number" name="a"><br>
    Angka B: <input type="number" name="b"><br>
    Sisi Persegi: <input type="number" name="s"><br>
    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<br>Hasil Tambah: " . Hitung::tambah($a, $b);
    echo "<br>Hasil Kurang: " . Hitung::kurang($a, $b);
    echo "<br>Luas Persegi: " . Hitung::luasPersegi($s);
}
?>