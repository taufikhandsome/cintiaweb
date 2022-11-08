<?php
require_once("koneksi.php");
$nik =$_POST['nik'];
$nama =$_POST['nama'];
$username =$_POST['username'];
$password =$_POST['password'];
$cekuser =mysqli_query($koneksi, "SELECT * FROM siswa2 WHERE username ='$username'");
	if(!$username || !$password || !$nik || !$nama){
		echo "Lengkapi Datanya! <a href ='registrasi.php'>Kembali</a>";
	}
	else
	{
$simpan=mysqli_query($koneksi,"INSERT INTO siswa2 VALUES ('$nik','$nama','$username','$password')");
	if ($simpan){
		echo "Pendaftaran Sukses! Silahkan <a href ='login.php'>Login</a>";
	}
	else
	{
		echo "Pendaftaran Gagal!";
	header('location=registrasi.php');
	}
}
?>