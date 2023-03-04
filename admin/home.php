<?php 
include '../config/koneksi.php';
$masyarakat = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat");
$jml_masyarakat = mysqli_num_rows($masyarakat);

$petugas = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat");
$jml_petugas = mysqli_num_rows($masyarakat);

$pengaduan = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat");
$jml_pengaduan = mysqli_num_rows($masyarakat);

$tanggapan = mysqli_query($koneksi, "SELECT * FROM tb_masyarakat");
$jml_tanggapan = mysqli_num_rows($masyarakat);
 ?>


<div class="container">
	<h3 class="mt-3">Dashboard</h3>
	<div class="row mt-3">
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header">Masyarakat</div>
				<div class="card-body"><?php echo $jml_masyarakat; ?> Orang</div>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header">Pengaduan</div>
				<div class="card-body"><?php echo $jml_pengaduan; ?> Aduan</div>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header">Tanggapan</div>
				<div class="card-body"><?php echo $jml_tanggapan; ?> Tanggapan</div>
			</div>
		</div>
		<div class="col-md-3 mt-3">
			<div class="card">
				<div class="card-header">Petugas</div>
				<div class="card-body"><?php echo $jml_petugas; ?> Pengguna</div>
			</div>
		</div>

		
	</div>
</div>