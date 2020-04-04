<?php

// no.2 function validasi
function valudasi($username, $password)
{


    if (preg_match("/^[a-z]{5,7}", $username)) {
        return true;
    } else {
        return false;
    }

    if (preg_match("/^[a-zA-Z\@]", $password)) {
        return true;
    } else {
        return false;
    }
}
