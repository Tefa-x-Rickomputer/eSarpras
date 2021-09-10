<?php 
    $tempdata = [
        ["namabarang" => "Laptop", "kode" => "177013", "noreg" => "0001", "merk" => "asus", "jumlah" => "2"],
        ["namabarang" => "Handphone", "kode" => "228922", "noreg" => "0002", "merk" => "asus", "jumlah" => "4"],
        ["namabarang" => "Mouse", "kode" => "240604", "noreg" => "0003", "merk" => "asus", "jumlah" => "3"],
        ["namabarang" => "Keyboard", "kode" => "300604", "noreg" => "0004", "merk" => "asus", "jumlah" => "3"],
        ["namabarang" => "PC", "kode" => "150504", "noreg" => "0005", "merk" => "asus", "jumlah" => "3"],
        ["namabarang" => "Monitor", "kode" => "010104", "noreg" => "0006", "merk" => "asus", "jumlah" => "3"],
        ["namabarang" => "Kursi", "kode" => "060904", "noreg" => "0007", "merk" => "asus", "jumlah" => "15"],
        ["namabarang" => "Meja", "kode" => "251204", "noreg" => "0008", "merk" => "asus", "jumlah" => "15"],
        ["namabarang" => "Proyektor", "kode" => "290204", "noreg" => "0009", "merk" => "asus", "jumlah" => "2"],
        ["namabarang" => "Slide Proyektor", "kode" => "010104", "noreg" => "0010", "merk" => "asus", "jumlah" => "1"],
    ];
 ?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Daftar Barang</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Daftar Barang</li>
        </ol>
        
        <table class="table caption-top table-striped text-center">
            <caption>Daftar Barang</caption>
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Nomor Register</th>
                    <th>Merk</th>
                    <th>Jumlah</th>
                    <th>Opsi</th>
                </tr>
            </thead>

            <tbody class="">
                <?php $count = 1 ?>
                <?php foreach($tempdata as $data) : ?>
                    <tr>
                        <td> <?= $count; ?> </td>
                        <td> <?= $data['namabarang']; ?> </td>
                        <td> <?= $data['kode']; ?> </td>
                        <td> <?= $data['noreg']; ?> </td>
                        <td> <?= $data['merk']; ?> </td>
                        <td> <?= $data['jumlah']; ?> </td>
                        <td>
                            <div class="d-grid">
                                <a href="index.php?page=DetailBarang" class="btn btn-outline-success">Detail</a>
                            </div>
                        </td>
                    </tr>
                    <?php $count++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>