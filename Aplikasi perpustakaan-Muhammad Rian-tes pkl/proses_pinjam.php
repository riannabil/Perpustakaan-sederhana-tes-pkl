<?php
include "koneksi.php";

$anggota = $_POST['anggota'];
$buku = $_POST['buku'];
$tgl_kembali = date('Y-m-d'); // Menambahkan inisialisasi tanggal kembali

$query = mysqli_query($conn, 'INSERT INTO meminjam (tgl_pinjam, jumlah_pinjam, tgl_kembali, id_anggota, kd_buku, kembali) 
    VALUES ("' . date('Y-m-d') . '", 1, "' . $tgl_kembali . '", "' . $anggota . '", "' . $buku . '", 0)'); // Mengubah nilai kembali menjadi 0
if ($query) {
    echo "<script>alert('Data berhasil disimpan'); document.location.href='pinjam.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan'); document.location.href='pinjam.php'</script>";
}
?>
