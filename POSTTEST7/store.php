<?php
require 'koneksi.php';
if (isset($_POST['input'])) {
	$nama = $_POST['nama_barang'];
	$jenis = $_POST['jenis_barang'];
	$asalbrand = $_POST['asal_barang'];
	$tahun = $_POST['tahun_barang'];
	$harga = $_POST['harga_barang'];
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

	$input = "INSERT INTO barang (id_barang,nama_barang,jenis_barang,asal_barang,tahun_barang,harga_barang,gambar) VALUES('','$nama','$jenis','$asalbrand','$tahun','$harga','$nm_gambar')";
	$result = mysqli_query($con, $input);

	if ($result) {
		echo "
			<script>
				alert('Data Berhasil Di Tambahkan');
				document.location.href = 'indexAdmin.php';
			</script>";
		// header('location:test1.php?status= sukses');
	} else {
		echo "
			<script>
				alert('Data Tidak Berhasil Di Tambahkan');
				document.location.href = 'create.php';
			</script>";
		// header('location:ambil.php?status =sukses');

	}
}
