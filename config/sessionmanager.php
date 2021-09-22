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
} 