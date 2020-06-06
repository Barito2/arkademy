<?php

include "koneksi.php";
$sql = "CREATE DATABASE aaa";

if ($koneksi->query($sql) == TRUE) {
    echo "Database berhasil dibuat";
}
