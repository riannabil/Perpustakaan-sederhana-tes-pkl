<!-- <?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $ttl = $_POST['ttl'];
    $status = $_POST['status'];

    // Periksa apakah ada input yang kosong
    if (empty($nama) || empty($alamat) || empty($ttl) || empty($status)) {
        echo "<script>alert('Semua kolom harus diisi'); document.location.href='input_anggota.php'</script>";
        exit; // Berhenti eksekusi skrip jika ada input yang kosong
    }

    // Lakukan operasi penyimpanan data ke dalam database
    $query = mysqli_query($conn, 'INSERT INTO anggota (nama, alamat, ttl, status) 
        VALUES ("'.$nama.'", "'.$alamat.'", "'.$ttl.'", "'.$status.'")');
    if ($query) {
        echo "<script>alert('Data berhasil disimpan'); document.location.href='anggota.php'</script>";
    } else {
        echo "<script>alert('Data gagal disimpan'); document.location.href='input_anggota.php'</script>";
    }
}
?> -->


<html>
<head>
</head>
<body>
<table width="1000" border="1">
<tr>
<td colspan="2" align="center"><h1>Sistem Informasi Perpustakaan</h1></td>
</tr>
<tr>
<td width="200">
<ul>
<li><a href="anggota.php">Anggota</a></li>
<li><a href="buku.php">Buku</a></li>
<li><a href="pinjam.php">Pinjam</a></li>
</ul>
</td>
<td width="500">
<a href="input_anggota.php">Input anggota</a>
 <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>id_anggota</th>
			<th>nama anggota</th>
			<th>alamat</th>
			<th>TTl</th>
			<th>Status</th>
			<th>Aksi</th>
        </tr>
    </thead>
    <tbody>
		<?php 
        include "koneksi.php";
        $query = mysqli_query($conn, "SELECT * FROM anggota ORDER BY id_anggota DESC");
        $no = 1;
        while ($data = mysqli_fetch_array($query)) {
        ?>			
            <tr class="odd gradeX">
                <td><?php echo $no ?></td>
                <td><?php echo $data['id_anggota']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['ttl']; ?></td>
                <td class="center"><?php echo $data['status']; ?></td>
                <td class="center"><a href="edit_anggota.php?id=<?php echo $data['id_anggota']; ?>">Edit</a> | <a href="hapus_anggota.php?id=<?php echo $data['id_anggota']; ?>" 
                    onClick="return confirm('Apakah Anda ingin menghapus <?php echo $data['nama']; ?>?')">hapus</a></td>
            </tr>
            <?php $no++; }?>
    </tbody>
</table>
</td>
</tr>
<tr>
<td colspan="2" align="center">Muhammad Rian<br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script> <br> <script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
</table>
</body>
</html>
