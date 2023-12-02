<?php

function validateSignup($postData) {
    $errors = [];

    if (empty($postData["name"])) {
        $errors["name"] = "Name is required";
    } else {
        $name = $postData["name"];
        if (!isAllLetters($name)) {
            $errors["name"] = "Name must consist of letters only";
        }
    }



    if (empty($postData["username"])) {
        $errors["username"] = "Username is required";
    } else {
        $userName = $postData["username"];
        if (!isAlphanumeric($userName)) {
            $errors["username"] = "Username can only contain letters and numbers";
        }
    }

    if (empty($postData["password"])) {
        $errors["password"] = "Password is required";
    } else {
        $password = $postData["password"];
        if (!isValidPassword($password)) {
            $errors["password"] = "Password must be 8 characters long and contain at least 1 uppercase letter";
        }
    }


    if (empty($postData["phone"])) {
        $errors["phone"] = "Phone is required";
    } else {
        $phone = $postData["phone"];
        if (!startsWith01($phone)) {
            $errors["phone"] = "Phone number should start with 01";
        }
    }

    return $errors;
}

function isAllLetters($str) {
    $str = str_replace(' ', '', $str);
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!($char >= 'A' && $char <= 'Z') && !($char >= 'a' && $char <= 'z')) {
            return false;
        }
    }
    return true;
}


function isAlphanumeric($str) {
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!($char >= 'A' && $char <= 'Z') && !($char >= 'a' && $char <= 'z') && !($char >= '0' && $char <= '9')) {
            return false;
        }
    }
    return true;
}

function isValidPassword($password) {
    $uppercaseFound = false;
    for ($i = 0; $i < strlen($password); $i++) {
        $char = $password[$i];
        if ($char >= 'A' && $char <= 'Z') {
            $uppercaseFound = true;
            break;
        }
    }
    return strlen($password) >= 8 && $uppercaseFound;
}

function startsWith01($phone) {
    return substr($phone, 0, 2) === "01";
}

?>