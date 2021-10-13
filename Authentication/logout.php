<?php

session_start();

require_once '../config/sessionmanager.php';

$agenUser = $_SERVER['HTTP_USER_AGENT'];
$ipUser = $_SERVER['REMOTE_ADDR'];
$idUser = $userSession['idUser'];

$query = "INSERT INTO `tlogoutlog` (`idLogoutLog`, `linkUser`, `ipUser`, `agenUser`, `waktuLogout`) 
VALUES (NULL, '$idUser', '$ipUser', '$agenUser', now())";
mysqli_query($db, $query);

$_SESSION = [];
session_unset();
session_destroy();

header("Location: login.php");
exit;