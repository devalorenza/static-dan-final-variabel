<?php
class User {
    final public function login() {
        echo "Login berhasil";
    }
}

class Admin extends User {
    // tidak bisa override login()
}

$a = new Admin();
$a->login();