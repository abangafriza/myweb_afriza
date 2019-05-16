<!DOCTYPE html>
<html>
<head>
	<title>TCC P5 CRUD PHP - 165610029</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="judul">
	<h2>CRUD Data Mahasiswa</h2></div>
	<div class="table-content-tambah">
	<h3>EDIT DATA MAHASISWA</h3>
	<a href="index.php">KEMBALI</a>
	
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td></br>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</div>
</body>
</html>