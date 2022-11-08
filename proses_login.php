<?php
	session_start();
	require_once("koneksi.php");
	$username=$_POST['username'];
	$password=$_POST['password'];
	$cekuser= mysqli_query($koneksi,"SELECT * FROM siswa2 WHERE username ='$username'");
	$hasil= mysqli_fetch_assoc($cekuser);
	if(mysqli_num_rows($cekuser)==0) {
		echo "Username Belum Terdaftar! ";
	}  
	else
	{
		if ($password<>$hasil['password']) {
			echo "Password Salah! <a href='login.php'>Kembali</a>";
	}
	 else
	 {
			$_SESSION['username'] = $hasil['username'];
			$_SESSION['nama'] =$hasil['nama'];
			$_SESSION['nik'] =$hasil['nik'];
			header('location:homeuser.php');
		}
	}
?>