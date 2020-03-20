<?php
    include "koneksi.php";

    $sql = "INSERT INTO user(
        id,
        nama,
        role,
        available,
        age,
        location,
        year,
        email
    )VALUE(
        '1',
        'Nopal',
        'Frondend Developer',
        'full time',
        '20',
        'Jakarta',
        '2',
        'nopal@gmail.com'
    )";

    if ($koneksi->query($sql)==TRUE) {
        echo "insert berhasil";
    }
