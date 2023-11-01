<?php
require 'koneksi.php';
session_start();
if (isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}

if ($_SESSION["type"] != "admin") {
	header("Location:index.php");
	exit;
}

$id_barang = $_GET['id_barang'];

$result = mysqli_query($con, "SELECT * FROM barang WHERE id_barang = $id_barang");
if (!$result) {
	die("Error in SQL query: " . mysqli_error($con));
}

$brg = [];

while ($row = mysqli_fetch_assoc($result)) {
	$brg[] = $row;
}

$brg = $brg[0];


if (isset($_POST['update'])) {
	$id_barang = $_GET['id_barang'];
	$nama = $_POST['nama_barang'];
	$jenis = $_POST['jenis_barang'];
	$asalbrand = $_POST['asal_barang'];
	$tahun = $_POST['tahun_barang'];
	$harga = $_POST['harga_barang'];

	if ($_FILES["gambar"]["name"] != "") {
		$gambar = $_FILES["gambar"]["name"];
		$tmpName = $_FILES["gambar"]["tmp_name"];

		$ekstensigmbr = explode(".", $gambar);
		$ekstensigmbr = strtolower(end($ekstensigmbr));
		$nm_gambar = date('Y-m-d');
		$nm_gambar .= ".";
		$nm_gambar .= strtolower($nama) . "-file";
		$nm_gambar .= ".";
		$nm_gambar .= $ekstensigmbr;
		// menyimpan gambar yang diupload pada folder img/data/
		move_uploaded_file($tmpName, 'img/data/' . $nm_gambar);

		$update = "UPDATE barang SET nama_barang = '$nama', jenis_barang = '$jenis',asal_barang ='$asalbrand',tahun_barang = '$tahun',harga_barang = '$harga', gambar = '$nm_gambar' WHERE id_barang = $id_barang";
		$result = mysqli_query($con, $update);

		if ($result) {
			echo "
			<script>
				alert('Data Berhasil Di Update');
				document.location.href = 'indexAdmin.php';
			</script>";
			// header('location:test1.php?status= sukses');
		} else {
			echo "
			<script>
				alert('Data Tidak Berhasil Di Update');
				document.location.href = 'update.php';
			</script>";
			// header('location:ambil.php?status =sukses');

		}
	} else {
		$update = "UPDATE barang SET nama_barang = '$nama', jenis_barang = '$jenis',asal_barang ='$asalbrand',tahun_barang = '$tahun',harga_barang = '$harga' WHERE id_barang = $id_barang";
		$result = mysqli_query($con, $update);

		if ($result) {
			echo "
			<script>
				alert('Data Berhasil Di Update');
				document.location.href = 'indexAdmin.php';
			</script>";
			// header('location:test1.php?status= sukses');
		} else {
			echo "
			<script>
				alert('Data Tidak Berhasil Di Update');
				document.location.href = 'update.php';
			</script>";
			// header('location:ambil.php?status =sukses');
		}
	}
}
?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="stylecrud.css">
	<title>Ubah Brand</title>
</head>

<body>
	<div class="kontak">
		<h3>Ubah Brand</h3>
		<div class="border"></div>

		<form action="" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="id_barang" value="<?= $brg['id_barang']; ?>" autocomplete="off">
			<div>
				<input type="text" name="nama_barang" required value="<?= $brg['nama_barang']; ?>" placeholder="Nama Brand">

			</div>
			<div>
				<input type="text" name="jenis_barang" required value="<?= $brg['jenis_barang']; ?>" placeholder="Jenis Brand (Ex. Parfume, Baju, Tas, Sepatu)">

			</div>
			<div>
				<input type="text" name="asal_barang" required value="<?= $brg['asal_barang']; ?>" placeholder="Asal Brand">

			</div>
			<div>
				<input type="text" name="tahun_barang" required value="<?= $brg['tahun_barang']; ?>" placeholder="Tahun Release">

			</div>
			<div>
				<input type="text" name="harga_barang" required value="<?= $brg['harga_barang']; ?>" placeholder="Harga Barang">
			</div>
			<div>
				<input type="file" name="gambar" id="gambar">
			</div>

			<input type="submit" name="update">
			<input type="reset" name="Reset">
		</form>

	</div>
</body>

</html>