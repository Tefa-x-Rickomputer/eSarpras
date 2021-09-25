<?php 
    require 'config/connect.php';
    $barang = querySql("SELECT * FROM tbarang WHERE isDeleted=0");
    ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Aset</h1>
         <div style="margin-bottom: 10px">
        <a href="config/pdfBarang.php" class="btn btn-danger">PDF</a>
    </div>
          <div class="mb-2">
<table id="example" class="table caption-top table-striped" class="display nowrap table-striped table-bordered table" style="width:100%">
        
        
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Aset</th>
                    <th>Merk Aset</th>
                    <th>Jenis Aset</th>
                    <th>Nomor Register</th>
                    <th>Kondisi</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $i = 1;?>
                <?php foreach($barang as $item) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $item["namaBarang"]; ?></td>
                        <td><?= $item["merkBarang"]; ?></td>
                        <td><?= $item["tipeBarang"]; ?></td>
                        <td><?= $item["nomorRegister"]; ?></td>
                        <td><?= $item["kondisiBarang"]; ?></td>

                        <td>
                                <a href="index.php?page=DetailBarang&id=<?= $item ['idAset']; ?>"class="btn btn-success" ><i class='bi bi-three-dots'></i></a>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>