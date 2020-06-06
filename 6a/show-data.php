<?php
include 'koneksi.php';

$query = "SELECT product.name AS product_name,price, category.name AS category_name, cashier.name AS cashier_name FROM product JOIN category ON product.id_category = category.id_category JOIN cashier ON product.id_cashier = cashier.id_cashier";

$result = $koneksi->query($query);
