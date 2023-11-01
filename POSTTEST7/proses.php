<?php 
if(isset($_POST['input'])){
	$nama = $_POST['nama'];
	$jenis_Kelamin =$_POST["jenis_kelamin"];
	$Tempat = $_POST["Tempat"];
	$email =$_POST["email"];
	$date =$_POST["date"];
	$nomor =$_POST["nomor"];

	echo"Data Registrasi<br>";
	echo "Nama					: $nama</br>";
	echo "Jenis Kelamin 			: $jenis_Kelamin<br>";
	echo "Tempat dan tanggal lahir 	: $Tempat, .$date<br>";
	echo "Email 					: $email</br>";
	echo "Nomor Telepon  			:$nomor</br>";
}
?>