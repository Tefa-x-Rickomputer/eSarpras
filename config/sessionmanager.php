<?php
$userSession = [
            "idUser" => $_SESSION["idUser"],
            "role" => $_SESSION["role"]
];

if ($userSession["role"] == "Guest") {
    define("eclGuest","d-none");
    define("eclAdminGuest","d-none");
} elseif($userSession["role"] == "Administrator") {
    define("eclAdminGuest","d-none");
} elseif($userSession["role"] == "Superuser") {
    define("eclGuest","");
    define("eclAdminGuest","");
} else {
    header("Location:Authentication/logout.php");
}

function outAdminGuest() {
    global $userSession;
    if ($userSession["role"] == "Guest") {
        header("Location: index.php?page=Dashboard");
    } elseif($userSession["role"] == "Administrator") {
        header("Location: index.php?page=Dashboard");
    } elseif($userSession["role"] == "Superuser") {

    } else {
        header("Location: index.php?page=Dashboard");
    }
}

function outGuest() {
    global $userSession;
    if ($userSession["role"] == "Guest") {
        header("Location: index.php?page=Dashboard");
    } elseif($userSession["role"] == "Administrator") {
        
    } elseif($userSession["role"] == "Superuser") {

    } else {
        header("Location: Authentication/logout.php");
    }
}