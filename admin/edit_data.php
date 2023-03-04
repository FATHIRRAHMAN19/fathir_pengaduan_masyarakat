<?php 

include '../config/koneksi.php';

if (isset($_POST['hapus_pengaduan'])) {
	$id_pengaduan= $_POST['id_pengaduan'];
	$query = mysqli_query($koneksi, "SELECT * FROM tb_pengaduan WHERE id_pengaduan='$id_pengaduan'");
	$data = mysqli_fetch_array($query);
	if (is_file("../dist/img/".$data['foto'])) {
		unlink("../dist/img/".$data['foto']);
		mysqli_query($koneksi, "DELETE FROM tb_pengaduan WHERE id_pengaduan='$id_pengaduan'");
		header('location:index.php');
	}
}


if (isset($_POST['hapus_tanggapan'])) {
	$id_tanggapan= $_POST['id_tanggapan'];
	$query = mysqli_query($koneksi, "DELETE FROM tb_tanggapan WHERE id_tanggapan='$id_tanggapan'");
	if ($query) {
		header('location:index.php?page=tanggapan');
	}
	
}


if (isset($_POST['hapus_petugas'])) {
	$id_petugas= $_POST['id_petugas'];
	$query = mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'");
	if ($query) {
		header('location:index.php?page=petugas');
	}
	
}


if (isset($_POST['hapus_masyarakat'])) {
	$nik= $_POST['nik'];
	$query = mysqli_query($koneksi, "DELETE FROM tb_masyarakat WHERE nik='$nik'");
	if ($query) {
		header('location:index.php?page=masyarakat');
	}
	
}
?>