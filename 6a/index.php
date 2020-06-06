<?php
include 'show-data.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join 3</title>
</head>

<body>
    <table border="1">
        <tr>
            <td>cashier</td>
            <td>product</td>
            <td>category</td>
            <td>price</td>
        </tr>

        <?php
        foreach ($result as $product) {
            $cashier_name = $product['cashier_name'];
            $product_name = $product['product_name'];
            $category_name = $product['category_name'];
            $price = $product['price'];
        ?>
            <tr>
                <td><?= $cashier_name ?></td>
                <td><?= $product_name ?></td>
                <td><?= $category_name ?></td>
                <td><?= $price ?></td>
            </tr>
        <?php } ?>


    </table>
</body>

</html>