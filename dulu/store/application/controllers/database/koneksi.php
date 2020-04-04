<?php
$host = "localhost";
$username = 'root';
$paswword = "";
$db = "belajar_profile";

$koneksi = new mysqli($host, $username, $paswword, $db);

if ($koneksi->connect_error) {
    die("koneksi gagal");
}
