<?php
session_start();
if (isset($_SESSION["login"])) {
	header("Location:login.php");
	exit;
}

if ($_SESSION["type"] != "admin") {
	header("Location:index.php");
	exit;
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
	<title>Tambah Brand</title>
</head>

<body>
	<div class="kontak">
		<h3>Tambah Brand</h3>
		<div class="border"></div>

		<form action="store.php" method="POST" name="input" enctype="multipart/form-data">
			<div>
				<input type="text" name="nama_barang" required placeholder="Nama Brand">

			</div>
			<div>
				<input type="text" name="jenis_barang" required placeholder="Jenis Brand (Ex. Parfume, Baju, Tas, Sepatu)">

			</div>
			<div>
				<input type="text" name="asal_barang" required placeholder="Asal Brand">

			</div>
			<div>
				<input type="text" name="tahun_barang" required placeholder="Tahun Release">

			</div>
			<div>
				<input type="text" name="harga_barang" required placeholder="Harga Barang">

			</div>
			<div>
				<input type="file" name="gambar" required>
			</div>

			<input type="submit" name="input" value="Send">
			<input type="reset" name="Reset">
		</form>
	</div>
</body>

</html>