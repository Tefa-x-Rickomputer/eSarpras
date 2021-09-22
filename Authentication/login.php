<?php 

session_start();
require "../config/connect.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $rltLogin = mysqli_query($db, "SELECT * FROM tuser WHERE username = '$username' AND isDeleted = 0");
    
    $userCheck = mysqli_num_rows($rltLogin);

    if ($userCheck === 1) {
        $row = mysqli_fetch_assoc($rltLogin);
        if (password_verify($password, $row["password"])) {
            $userSession = [
            "login" => $_SESSION["login"] = true,
            "idUser" => $_SESSION["idUser"] = $row["idUser"],
            "role" => $_SESSION["role"] = $row["role"]
            ];
        }
    } 
    $error = true;
}
if (isset($_SESSION["login"])) {
    header("location:../");
}
?>

<!doctype html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.1.1">
        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="../Assets/css/indexstyles.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../Assets/css/login.css" rel="stylesheet">
    </head>
    
    <body>
        <form class="form-signin" method="post" action="">
            <div class="text-center mb-4">
                <img class="mb-4" src="../Assets/img/logosmkn2.png" width="150">
                <h1 class="h3 mb-3 font-weight-normal">Inventory Management</h1>
                <p class="text-secondary">Silahkan masukan username dan password anda</p>
            </div>

            <div class="form-label-group">
                <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
                <label for="username" class="text-secondary shadow">Username</label>
            </div>

            <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password" class="text-secondary shadow">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block fs-6 shadow" type="submit" name="submit">Masuk</button>

            <?php if (isset($error)) : ?>
                <p class="text-danger fst-italic mt-4 text-center">username atau password yang anda masukkan salah</p>
            <?php endif; ?>

            <p class="mt-5 mb-3 text-muted text-center">SMK Negeri 2 Banjarmasin</p>
        </form>
    </body>
</html>
