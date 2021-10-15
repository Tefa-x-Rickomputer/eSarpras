<main>
	<div class="container">
		<?php 
			require 'config/pdffunctions.php';
			$values = querySql("SELECT * FROM tpdf");
			$values1 = querySql("SELECT * FROM tpdf WHERE used = '1' ");
			$values2 = querySql("SELECT * FROM tpdf WHERE used = '2' ");

			if (isset($_POST['submit'])) {
				if ( addpeople($_POST) > 0 ) {
					echo "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'><i class='bi bi-check-circle'></i><span class='ms-3'>Data Berhasil ditambahkan!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>
						<script>
		                    setTimeout(function() {
		                            document.location.href = 'index.php?page=PengaturanPDF';
		                        }, 1500)
		                </script>";
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Data Gagal ditambahkan!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
				}
			}

			if (isset($_POST['update'])) {
				if ( updatepeople($_POST) > 0 ) {
					echo "<div class='alert alert-success alert-dismissible fade show mt-3' role='alert'><i class='bi bi-check-circle'></i><span class='ms-3'>Data Berhasil di update!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>
						<script>
		                    setTimeout(function() {
		                            document.location.href = 'index.php?page=PengaturanPDF';
		                        }, 1500)
		                </script>";
                    } else {
                        echo "<div class='alert alert-danger alert-dismissible fade show mt-3' role='alert'><i class='bi bi-exclamation-triangle'></i><span class='ms-3'>Data Gagal di update!</span><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
					}
				}

		 ?>
		 <form action="" method="post">
		 	<div class="row mt-3 mb-3">
		 		<h3>Tambah</h3>
		 		<div class="col-md-3">
		 			<input type="text" name="nama" class="form-control" placeholder="Nama" autocomplete="on">
		 		</div>
		 		<div class="col-md-3">
		 			<input type="number" name="nip" class="form-control" placeholder="NIP" autocomplete="on">
		 		</div>
		 		<div class="col-md-3">
		 			<select name="jabatan" class="form-select">
		 				<option value="Kepala Sekolah">Kepala Sekolah</option>
		 				<option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
		 				<option value="Guru">Guru</option>
		 			</select>
		 		</div>
		 	</div>
		 	<div class="row">
		 		<div class="col-md">
		 			<button type="submit" class="btn btn-sm btn-primary" name="submit">Submit</button>
		 		</div>
		 	</div>
		 </form>

		<form action="" method="post">
		<div class="row mt-5">
			<div class="col-md-6">
			<h3>Sedang di gunakan</h3>
			<?php if ($values1): ?>
				<label for="">Pertama</label>
				<?php foreach($values1 as $value) : ?>
					<input type="hidden" name="used1" value="<?= $value['used']; ?>">
					<input type="hidden" name="first" value="<?= $value['nama']; ?>">
					<input type="text" class="form-control shadow-sm mb-3" value="<?= $value['nama']; ?>" disabled>
					<input type="text" class="form-control shadow-sm mb-3" value="<?= $value['jabatan']; ?>" disabled>
				<?php endforeach; ?>
				<label for="">Kedua</label>
				<?php foreach($values2 as $value) : ?>
					<input type="hidden" name="used2" value="<?= $value['used']; ?>">
					<input type="hidden" name="second" value="<?= $value['nama']; ?>">
					<input type="text" class="form-control shadow-sm mb-3" value="<?= $value['nama']; ?>" disabled>
					<input type="text" class="form-control shadow-sm mb-3" value="<?= $value['jabatan']; ?>" disabled>
				<?php endforeach; ?>
			<?php else: ?>
				<p>Tidak ada data yang disimpan</p>
			<?php endif ?>
				
			</div>

			<div class="col-md-6">
				<h3>Update</h3>
				<label for="">Pertama</label>
				<select name="nama1" class="form-select shadow-sm mb-3">
					<?php foreach($values as $value) : ?>
						<option value="<?= $value['nama']; ?>"><?= $value['nama']; ?></option>
					<?php endforeach; ?>
				</select>

				<label for="">Kedua</label>
				<select name="nama2" class="form-select shadow-sm mb-3">
					<?php foreach($values as $value) : ?>
						<option value="<?= $value['nama']; ?>"><?= $value['nama']; ?></option>
					<?php endforeach; ?>
				</select>
				<button type="submit" name="update" class="btn btn-sm btn-primary">Update</button>
			</div>
		</div>
		</form>
	</div>
</main>