<?php
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'arkademy_test';

$koneksi = new mysqli($host, $username, $password, $db);

if ($koneksi->connect_error) {
    echo 'koneksi gagal';
}
