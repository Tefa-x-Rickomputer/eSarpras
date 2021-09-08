<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Icon Bootstrap CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <title>Inventory Barang</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Assets/css/indexstyles.css" rel="stylesheet" />
        <link rel="stylesheet" href="Assets/css/index.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        <!-- Navbar and sidebar Section -->
        <?php include 'Assets/templates/navbar.php' ?>
        <!-- Navbar and sidebar End -->


        <!-- Page content-->
        <div class="container-fluid">
            <!-- Main Content Section -->
            <?php 
                if( isset($_GET['page']) ) {
                    $page = $_GET['page'];

                    switch ($page) {
                        case 'Dashboard':
                            include 'contents/dashboard.php';
                            break;
                        
                        case 'Daftar Barang':
                            include 'contents/daftarbarang.php';
                            break;

                        case 'Tambah Barang':
                            include 'contents/tambahbarang.php';
                            break;

                        case 'Detail Barang':
                            include 'contents/detailbarang.php';
                            break;

                        default:
                            echo "<center>Page not found";
                            break;
                    }
                }else {
                    include 'contents/dashboard.php';
                }
             ?>
             <!-- Main Content End -->

                     


        <!-- 3 div ini sambungan dari navbar, bukan div kosong -->
                </div>
            </div>
        </div>
        <!-- End Website -->












        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Assets/js/indexscripts.js"></script>
    </body>
</html>
