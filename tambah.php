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
	<h3>TAMBAH DATA MAHASISWA</h3>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
	</div>
</div>
</body>
</html>