<?php

include "koneksi.php";
$sql = "CREATE DATABASE belajar_profile";

if ($koneksi->query($sql) == TRUE) {
    echo "Database berhasil dibuat";
}
