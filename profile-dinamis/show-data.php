<?php
include "koneksi.php";

$sql = "SELECT * FROM user";

$result = $koneksi->query($sql);

foreach ($result as $user) {
    $id = $user["id"];
    $nama = $user["nama"];
    $role = $user["role"];
    $available = $user["available"];
    $age = $user["age"];
    $location = $user["location"];
    $year = $user["year"];
    $email = $user["email"];
}
