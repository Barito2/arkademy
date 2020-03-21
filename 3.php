<?php
function triangle($angka)
{
    if ($angka < 0) {
        echo "Paramemeter harus angka dan positif!";
    } else {
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = $i; $j <= 5; $j++) {
                echo "#";
            }
            echo "<br>";
        }
    }
}
