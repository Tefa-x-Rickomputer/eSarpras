<?php
    require 'config/barangfunctions.php';
    $barang = querySql("SELECT * FROM tbarang");
    ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Aset</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Aset</li>
        </ol>
        
<table id="example" class="table caption-top table-striped text-center" class="display nowrap table-striped table-bordered table" style="width:100%">
 <caption>Daftar Aset</caption>
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Aset</th>
                    <th>Merk Aset</th>
                    <th>Jenis Aset</th>
                    <th>NomorRegister</th>
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
                            <div class="d-grid">
                                <a href="index.php?page=DetailBarang&id=<?= $item ['idAset']; ?>"class="btn btn-outline-success">Detail</a>
                            </div>
                        </td>
                    </tr>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>