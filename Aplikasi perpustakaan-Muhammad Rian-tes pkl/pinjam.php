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
<a href="pinjam_buku.php">Pinjam buku</a>
<p>buku yang sedang dipinjam</p>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Pinjam Buku</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Nama Peminjam</th>
            <th>Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        include "koneksi.php";
        $query = "SELECT * FROM meminjam, buku, anggota
            WHERE meminjam.id_anggota = anggota.id_anggota
            AND meminjam.kd_buku = buku.kd_buku
            AND meminjam.kembali = 1
            ORDER BY id_pinjam";
        $sql = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($sql)) {
        ?>			
            <tr class="odd gradeX">
                <td><?php echo $no?></td>
                <td><?php echo $data['tgl_pinjam'];?></td>
                <td><?php echo $data['jumlah_pinjam'];?></td>
                <td><?php echo $data['tgl_kembali'];?></td>
                <td><?php echo $data['nm_anggota'];?></td>
                <td class="center"><?php echo $data['judul_buku'];?></td>
                <td class="center">
                    <a href="edit_pinjam.php?id=<?php echo $data['id_pinjam']; ?>">Edit</a> | 
                    <a href="kembali_buku.php?id=<?php echo $data['id_pinjam']; ?>" onClick="return confirm('Apakah Anda ingin mengembalikan <?php echo $data['judul_buku']; ?>?')">Kembalikan</a>
                </td>
            </tr>
            <?php $no++; }?>
    </tbody>
</table>
<br>
<p>Buku yang sudah dikembalikan</p>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Pinjam Buku</th>
            <th>Jumlah Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Nama Peminjam</th>
            <th>Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM meminjam, buku, anggota
            WHERE meminjam.id_anggota = anggota.id_anggota
            AND meminjam.kd_buku = buku.kd_buku
            AND meminjam.kembali = 2
            ORDER BY id_pinjam";
        $sql = mysqli_query($conn, $query);
        $no = 1;
        while ($data = mysqli_fetch_array($sql)) {
        ?>			
            <tr class="odd gradeX">
                <td><?php echo $no?></td>
                <td><?php echo $data['tgl_pinjam'];?></td>
                <td><?php echo $data['jumlah_pinjam'];?></td>
                <td><?php echo $data['tgl_kembali'];?></td>
                <td><?php echo $data['nama'];?></td>
                <td class="center"><?php echo $data['judul_buku'];?></td>
                <td class="center">
                    <a href="hapus_pinjam.php?id=<?php echo $data['id_pinjam']; ?>" onClick="return confirm('Apakah Anda ingin menghapus <?php echo $data['id_pinjam']; ?>?')">Hapus</a>
                </td>
            </tr>
            <?php $no++; }?>
    </tbody>
</table>
</td>
</tr>
<tr>
<td colspan="2" align="center">Muhammad Rian<br><script type='text/javascript' src='//eclkmpsa.com/adServe/banners?tid=94091_154020_0&tagid=2'></script><br><script type='text/javascript' src='//eclkmpbn.com/adServe/banners?tid=94091_154020_2'></script></td>
</tr>
</table>
</body>
</html>
