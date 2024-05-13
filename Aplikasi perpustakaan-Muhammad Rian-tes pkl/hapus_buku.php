<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM buku WHERE kd_buku='$id'");
if ($query) {
    echo "<script>alert('Data berhasil dihapus'); document.location.href='buku.php'</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); document.location.href='buku.php'</script>";
}
?>
