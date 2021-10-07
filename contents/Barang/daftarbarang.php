<?php 
    require 'config/connect.php';
    $barang = querySql("SELECT * FROM tbarang WHERE isDeleted=0");
    ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Sarpras</h1>
    <div class="row mb-4">
        <div class="col-md">
            <form method="post" action="config/export.php">
                <a href="config/barangpdf/pdf.php" class="btn btn-danger bi bi-file-earmark-pdf"> PDF</a>
                <!-- <a href="config/export.php"class="btn btn-success bi bi-file-earmark-excel">EXCEL</a> -->
                <button type="submit" name="export" class="btn btn-success bi bi-file-earmark-excel"> Excel</button>
            </form>
        </div>
    </div>
          <div class="mb-2">
<table id="example" class="table caption-top table-striped" class="display nowrap table-striped table-bordered table" style="width:100%">
        
        
            <thead class="table-dark">
                <tr>
                    <th class="text-md-center align-middle">No</th>
                    <th class=" align-middle">Nama Sarpras</th>
                    <th class=" align-middle">Merk Sarpras</th>
                    <th class=" align-middle">Jenis Sarpras</th>
                    <th class=" align-middle">Nomor Register</th>
                    <th class=" align-middle">Kondisi</th>
                    <th class="text-md-center align-middle">Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($barang as $item) : ?>
                    <tr>
                        <td class="text-md-center"><?= $i ?></td>
                        <td class=""><?= $item["namaBarang"]; ?></td>
                        <td class=""><?= $item["merkBarang"]; ?></td>
                        <td class=""><?= $item["tipeBarang"]; ?></td>
                        <td class=""><?= $item["nomorRegister"]; ?></td>
                        <td class=""><?= $item["kondisiBarang"]; ?></td>

                        <td>
                                <a href="index.php?page=DetailBarang&id=<?= $item ['idAset']; ?>"class="btn btn-success" ><i class='bi bi-eye'></i>Detail</a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>