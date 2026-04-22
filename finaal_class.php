<?php
final class Database {
    public function koneksi() {
        echo "Terhubung ke database";
    }
}

$db = new Database();
$db->koneksi();