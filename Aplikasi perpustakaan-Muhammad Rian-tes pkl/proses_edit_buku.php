<?php
include "koneksi.php";

$kode		= $_POST['kode'];
$judul		= $_POST['judul'];
$pengarang	= $_POST['pengarang'];
$jenis		= $_POST['jenis'];
$penerbit	= $_POST['penerbit'];

$query = mysqli_query($conn, "UPDATE buku SET 	kd_buku		= '$kode',
												judul_buku	= '$judul',
												pengarang	= '$pengarang',
												jenis_buku	= '$jenis',
												penerbit	= '$penerbit' 
										WHERE kd_buku	= '$_GET[id]'");
if ($query) {
	echo "<script>alert('Data berhasil disimpan'); document.location.href='buku.php'</script>";
} else {
	echo "<script>alert('Data gagal disimpan'); document.location.href='buku.php'</script>";
}
?>
