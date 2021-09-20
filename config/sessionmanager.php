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

// function eclGuest() {
//     global $userSession;
//     if ($userSession["role"]=="Guest") {
//         echo "d-none";
//     }
// }

// // function eclAdmin() {
// //     global $userSession;
// //     if 
// // }

// if ($userSession["role"] == "Guest") {
//     $eclAdminGuest = "d-none";
// } elseif($userSession["role"] == "Admin") {
//     $eclAdminGuest = "d-none";
// }

if ($userSession["role"] == "Guest") {
    define("eclGuest","d-none");
    define("eclAdminGuest","d-none");
} elseif($userSession["role"] == "Administrator") {
    define("eclAdminGuest","d-none");
} 
// elseif($userSession["role"] == "Superuser") {
// }