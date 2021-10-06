<?php 
    require 'config/bukufunctions.php';
    $buku = querySql ("SELECT * FROM tbuku WHERE isDeleted=0");

 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Buku</h1> 
          <div style="margin-bottom: 10px">
        <a href="config/bukupdf/pdf.php" class="btn btn-danger bi bi-file-earmark-pdf"> PDF</a>
    </div>
          <div style="margin-bottom: 20px">
<table id="example" class="table caption-top table-striped" class="display nowrap table-striped table-bordered table" style="width:100%">

    

            <thead class="table-dark">
                <tr>
                    <th class="text-md-center align-middle">No</th>
                    <th class="align-middle">Judul Buku</th>
                    <th class="align-middle">Nomor ISBN/ISSN</th>
                    <th class="align-middle">Pengarang</th>
                    <th class="align-middle">Penerbit</th>
                    <th class="text-md-center align-middle">Tahun Terbit</th>
                    <th class="text-md-center align-middle">Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($buku as $item) : ?>
                    <tr>
                    <td class="text-md-center"><?= $i; ?></td>
                    <td class=""><?= $item["judulBuku"]; ?></td>
                    <td class=""><?= $item["nomorBuku"]; ?></td>
                    <td class=""><?= $item["pengarang"]; ?></td>
                    <td class=""><?= $item["penerbit"]; ?></td>
                    <td class="text-md-center"><?= $item["tahunTerbit"]; ?></td>
                    
                        <td>
                                <a href="index.php?page=DetailBuku&id=<?php echo $item['idBuku']; ?>"class="btn btn-success"><i class="bi bi-eye"></i> Detail</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
</main>