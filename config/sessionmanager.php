<?php
$userSession = [
            "login" => $_SESSION["login"],
            "role" => $_SESSION["role"],
            "nama" => $_SESSION["nama"],
            "email" => $_SESSION["email"],
            "telpon" => $_SESSION["telpon"],
            "status" => $_SESSION["status"],
            "fotoProfil" =>  $_SESSION["fotoProfil"],
];

function eclGuest() {
    global $userSession;
    if ($userSession["role"]=="Guest") {
        echo "d-none";
    }
}

function eclAdmin() {

}