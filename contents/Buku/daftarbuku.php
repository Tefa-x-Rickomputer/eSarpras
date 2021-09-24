<?php 
    require 'config/fpdf.php';
    require 'config/bukufunctions.php';
    $buku = querySql ("SELECT * FROM tbuku WHERE isDeleted=0");

 ?>

<main>
    <div class="container-fluid px-4">
          <div style="margin-bottom: 10px">
        <a href="pdf.php" class="btn btn-danger">PDF</a>
    </div>
          <div style="margin-bottom: 20px">
<table id="example" class="table caption-top table-striped" class="display nowrap table-striped table-bordered table" style="width:100%">

    

            <thead class="table-dark">
                <tr>
                    <th class="text-md-center align-middle">No</th>
                    <th class="text-md-center align-middle">Judul Buku</th>
                    <th class="text-md-center align-middle">Nomor Buku</th>
                    <th class="text-md-center align-middle">Pengarang</th>
                    <th class="text-md-center align-middle">Penerbit</th>
                    <th class="text-md-center align-middle">Tahun Terbit</th>
                    <th class="text-md-center align-middle">Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($buku as $item) : ?>
                    <tr>
                    <td class="text-md-center"><?= $i; ?></td>
                    <td class="text-md-center"><?= $item["judulBuku"]; ?></td>
                    <td class="text-md-center"><?= $item["nomorBuku"]; ?></td>
                    <td class="text-md-center"><?= $item["pengarang"]; ?></td>
                    <td class="text-md-center"><?= $item["penerbit"]; ?></td>
                    <td class="text-md-center"><?= $item["tahunTerbit"]; ?></td>
                    
                        <td>
                                <a href="index.php?page=DetailBuku&id=<?php echo $item['idBuku']; ?>"class="btn btn-success"><i class="bi bi-three-dots"></i></a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</main>