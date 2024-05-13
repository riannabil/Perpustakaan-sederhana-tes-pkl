<?php
include "koneksi.php";

// Memeriksa apakah data ada sebelum digunakan
if(isset($_POST['nama'], $_POST['alamat'], $_POST['ttl'], $_POST['status'])) {
    // Mengambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $status = $_POST['status'];

    // Melakukan query untuk menyimpan data
    $query = mysqli_query($conn, 'INSERT INTO anggota(nama, alamat, ttl, status) VALUES ("'.$nama.'", "'.$alamat.'", "'.$ttl.'", "'.$status.'")');

    // Memeriksa apakah query berhasil
    if ($query) {
        echo "<script>alert('Data berhasil disimpan'); document.location.href='anggota.php'</script>";
    } else {
        echo "<script>alert('Data gagal disimpan'); document.location.href='input_anggota.php'</script>";
    }
} else {
    // Jika data tidak lengkap, kembalikan ke halaman input
    echo "<script>alert('Data tidak lengkap'); document.location.href='input_anggota.php'</script>";
}
?>
