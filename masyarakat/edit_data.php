<?php
include '../config/koneksi.php';
session_start();


if (isset($_POST['hapus_pengaduan'])) {
	$id_pengaduan = $_POST['id_pengaduan'];
	$query = mysqli_query($koneksi, "SELECT * FROM tb_pengaduan ");
	$data = mysqli_fetch_array($query);
	if (is_file('../dist/img/'.$data['foto'])) {
		unlink('../dist/img/'.$data['foto']);
		mysqli_query($koneksi, "DELETE FROM tb_pengaduan WHERE id_Pengaduan='$id_pengaduan'");
		header('location:index.php');
	}
}
 ?>