<?php 

require 'dokter.php';

$daftar = query("SELECT * FROM pendaftaran");

if(isset($_POST["cari"])){
	$daftar = cari($_POST["keyword"]);
}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body style="text-align: center;">
 <h1>Database Siswa Perpustakaan !!</h1>

<form>
	<input type="text" name="keyword"><br>
	<button type="submit" name="cari">Cari!</button>
</form>


<a href="home.php">Tambah Data !</a>
<br><br>

<table border="1" cellspacing="0" cellpadding="10" align="center">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Telepon</th>
		<th>Dokter</th>
	<th>Aksi</th>
		
	</tr>
<?php $i=1; ?>
<?php foreach ($daftar as $row) : ?>

<tr>
	<td><?php echo $i; ?></td>
	<td><?= $row["nama"]; ?></td>
	<td><?= $row["email"]; ?></td>
	<td><?= $row["telepon"]; ?></td>
	<td><?= $row["dktr"]; ?></td>
	<td>
		<a href="ubah.php?id=<?= $row["id"]; ?>">ubah </a> |
		<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?')">hapus</a>
</td>
	
</tr>


<?php $i++; ?>
<?php endforeach; ?>



</table>

 </body>
 </html>