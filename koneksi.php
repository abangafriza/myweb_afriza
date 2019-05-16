<?php 
$koneksi = mysqli_connect("localhost","root","","akademik");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
/*
$koneksi = mysqli_connect("db4free.net","afriza","12345678","afrizadb");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
*/
?>