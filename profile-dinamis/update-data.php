<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $role = $_POST["role"];
    $availability = $_POST["availability"];
    $age = $_POST["age"];
    $location = $_POST["location"];
    $experience = $_POST["experience"];
    $email = $_POST["email"];

    $sql = "UPDATE user SET nama = '$name', role = '$role', available = '$availability', age = '$age', location = '$location', year = '$experience', email ='$email' WHERE id = '$id'";
    if ($koneksi->query($sql)) {
        echo "berhasil";
    } else {
        echo "gagal";
    }
}
