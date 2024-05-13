<?php
include "koneksi.php";

$nama	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$ttl	= $_POST['ttl'];
$status	= $_POST['status'];

$query = mysqli_query($conn,"UPDATE anggota SET nama		='$nama',
										alamat			='$alamat',
										ttl		='$ttl',
										status	='$status' 
										where id_anggota		='$_GET[id]'");
if ($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='anggota.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='anggota.php'</script>\n";
}
?>