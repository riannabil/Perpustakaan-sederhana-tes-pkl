<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "DELETE FROM meminjam WHERE id_pinjam='$id'");
if ($query) {
    echo "<script>alert('Data berhasil dihapus'); document.location.href='pinjam.php'</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); document.location.href='pinjam.php'</script>";
}
?>
