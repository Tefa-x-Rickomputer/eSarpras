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

function getout() {
    global $userSession;
    global $kick;
    if ($userSession["role"] == "Guest") {

    } elseif($userSession["role"] == "Administrator") {
                                $page = $_GET['page'];
                        switch ($page) {
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
                        }
    } elseif($userSession["role"] == "Superuser") {
                        $page = $_GET['page'];
                        switch ($page) {
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
                        }
    } else {
        header("Location:Authentication/logout.php");
    }
}