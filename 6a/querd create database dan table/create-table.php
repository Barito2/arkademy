<?php
include "koneksi.php";
$sql = "CREATE TABLE category(id_category int PRIMARY KEY, nama varchar(255))";

if ($koneksi->query($sql) == TRUE) {
    echo "table category berhasil";
} else {
    echo "eror";
}
