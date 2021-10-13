<?php 

ob_start();
session_start();

// var_dump($_SESSION["role"]);
// var_dump($_SESSION["nama"]);
// var_dump($_SESSION["email"]);
// var_dump($_SESSION["telpon"]);
// var_dump($_SESSION["status"]);
// var_dump($_SESSION["login"]);
// var_dump($_SESSION["fotoProfil"]);

// require "config/connect.php";
require 'config/connect.php';
require "config/sessionmanager.php";
// include "config/loginlog.php";

if (!isset($_SESSION["login"])) 
{
    header("Location: Authentication/logout.php");
}

if (isset($_SESSION["login"])) {
    $agenUser = $_SERVER['HTTP_USER_AGENT'];
    $ipUser = $_SERVER['REMOTE_ADDR'];
    $idUser = $userSession['idUser'];

    // var_dump($idUser);

    $query = "INSERT INTO `tloginlog` (`idLoginLog`, `linkUser`, `ipUser`, `agenUser`, `waktuLogin`) 
    VALUES (NULL, '$idUser', '$ipUser', '$agenUser', now())";

    mysqli_query($db, $query);

    $errorcheck = mysqli_affected_rows($db);
    var_dump($errorcheck);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Icon Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>e-Sarpras</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Assets/css/indexstyles.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Assets/css/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Data Table -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.2/r-2.2.9/datatables.min.css"/>
        <!-- Custom CSS -->
        <link rel="stylesheet" href="Assets/css/dashboard.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="shortcut icon" href="Assets/img/logosmkn2.png" type="image/png">
        <style>
            body {
                background-color: rgb(237, 240, 243);
                font-family: 'Lato', sans-serif;
            }
        </style>
</head>

<body class="sb-nav-fixed">
    
    <?php include 'Assets/templates/navbar.php' ?>

        <div id="layoutSidenav_content">
            <?php 
                if( isset($_GET['page']) ) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'Dashboard':
                            include 'contents/dashboard.php';
                            break;
                        
                        // Barang swithc
                        case 'DaftarBarang':
                            include 'contents/Barang/daftarbarang.php';
                            break;

                        case 'DetailBarang':
                            include 'contents/Barang/detailbarang.php';
                            break;
                        // Barang switch end

                        // Buku switch 
                        case 'DaftarBuku':
                            include 'contents/Buku/daftarbuku.php';
                            break;

                        case 'DetailBuku':
                            include 'contents/Buku/detailbuku.php';
                            break;
                        // Buku switch end

                        // User switch
                        case 'Profile':
                            include 'contents/User/profile.php';
                            break;

                        case 'Profileedit':
                            include 'contents/User/profileedit.php';
                            break;
                        // User switch
                        
                                                case 'TambahBarang':
                            include 'contents/Barang/tambahbarang.php';
                            break;

                        case 'EditBarang':
                            include 'contents/Barang/editbarang.php';
                            break;

                        case 'Hapus':
                            include 'contents/Barang/hapus.php';
                            break;
                        
                        case 'EditBuku':
                            include 'contents/Buku/editbuku.php';
                            break;

                        case 'TambahBuku':
                            include 'contents/Buku/tambahbuku.php';
                            break;

                        case 'HapusBuku':
                            include 'contents/Buku/hapusbuku.php';
                            break;
                            
                        case 'Userlist':
                            include 'contents/User/tableuser.php';
                            break;

                        case 'UserDetail':
                            include 'contents/User/detailuser.php';
                            break;

                        case 'Useredit':
                            include 'contents/User/edituser.php';
                            break;

                        case 'Userdelete':
                            include 'contents/User/Userdelete.php';
                            break;

                        case 'adduser':
                            include 'contents/User/adduser.php';
                            break;           

                        // Ruang Switch
                        case 'addroom':
                            include 'contents/Ruang/ManajemenRuang.php';
                            break;
                        case 'edit':
                                include 'config/edit.php';
                                break;

                        // Notice switch
                        case 'DaftarPemberitahuan':
                            include 'contents/Pemberitahuan/daftarpemberitahuan.php';
                            break;

                        case 'HapusPemberitahuan':
                            include 'contents/Pemberitahuan/hapuspemberitahuan.php';
                            break;
                        // Notice switch end
                            
                        default:
                            echo "<center>Page not found";
                            break;
                    }
                }else {
                    include 'contents/dashboard.php';
                }
             ?>

        </div>
    </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Assets/js/indexscripts.js"></script>
        <!-- Data Table -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.2/r-2.2.9/datatables.min.js"></script>
      <!-- pdf -->
      <script src ="https://unpkg.com/jspdf@latest/dist/jspdf.umd.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
              var table = $('#example').DataTable( {
            responsive: true
            } );
    });
    </script>
    <!-- format titik otomatis -->
    <script type="text/javascript" src="Assets/js/my.js"></script>
    </body>
</html>

