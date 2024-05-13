<?php
include "koneksi.php";

$kode = $_POST['kode'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$jenis = $_POST['jenis'];
$penerbit = $_POST['penerbit'];

// Periksa apakah ada input yang kosong
if(empty($kode) || empty($judul) || empty($pengarang) || empty($jenis) || empty($penerbit)) {
    echo "<script>alert('Semua kolom harus diisi'); document.location.href='input_buku.php'</script>";
    exit; // Berhenti eksekusi skrip jika ada input yang kosong
}

$query = mysqli_query($conn, 'INSERT INTO buku (kd_buku, judul_buku, pengarang, jenis_buku, penerbit) 
    VALUES ("'.$kode.'", "'.$judul.'", "'.$pengarang.'", "'.$jenis.'", "'.$penerbit.'")');
if ($query) {
    echo "<script>alert('Data berhasil disimpan'); document.location.href='buku.php'</script>";
} else {
    echo "<script>alert('Data gagal disimpan'); document.location.href='input_buku.php'</script>";
}
?>
