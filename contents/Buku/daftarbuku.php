<?php 
    require 'config/bukufunctions.php';
    $buku = querysql ("SELECT * FROM tbuku");

 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Buku</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Buku</li>
        </ol>
        
<table id="example" class="table caption-top table-striped text-center" class="display nowrap table-striped table-bordered table" style="width:100%">
 <caption>Daftar Buku</caption>
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Nomor Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($buku as $item) : ?>
                    <tr>
                    <td><?= $i; ?></td>
                    <td><?= $item["judulBuku"]; ?></td>
                    <td><?= $item["nomorBuku"]; ?></td>
                    <td><?= $item["pengarang"]; ?></td>
                    <td><?= $item["penerbit"]; ?></td>
                    <td><?= $item["tahunTerbit"]; ?></td>
                    
                        <td>
                            <div class="d-grid">
                                <a href="index.php?page=DetailBuku&id=<?php echo $item['idBuku']; ?>" class="btn btn-outline-success">Detail</a>
                            </div>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>