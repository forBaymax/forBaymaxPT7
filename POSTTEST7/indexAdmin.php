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
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $select_sql = "SELECT * FROM barang WHERE `nama_barang` LIKE '%$cari%'"; //untuk cari

} else {
    $select_sql = "SELECT * FROM barang";
}

if (isset($_GET['sorting'])) {
    $sort = $_GET['sorting'];
    if ($sort == 'asc') {
        $select_sql = "SELECT * FROM barang ORDER BY `nama_barang` ASC";
    } else {
        $select_sql = "SELECT * FROM barang ORDER BY `nama_barang` DESC";
    }
}



$result = mysqli_query($con, $select_sql);

if (!$result) {
    echo mysqli_error($con);
}

$barang = [];

while ($row = mysqli_fetch_assoc($result)) {
    $barang[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="stylecrud.css">
    <title>HOME</title>
</head>

<body>
    <nav>
        <h2>Brand Luxury</h2>
    </nav>
    <section class="content">
        <h1 class="title">Data Brand</h1>
        <div class="menu">
            <div>
                <a href="tambah.php"><button class="tambah"> +Tambah Brand</button></a>
                <form action="" method="GET" name="input">
                    <input type="text" id="Cari" name="cari">
                    <input type="Submit" id="cari" value="Cari">
                </form>
            </div>

            <div class="sortclas">
                <p>Sorting By:<br></p>
                <a href="?sorting=asc"><button class="sort">A->Z</button></a>
                <a href="?sorting=dsc"><button class="sort">Z->A</button></a>
            </div>

        </div>

        <table>
            <tr>
                <th>NO</th>
                <th>NAMA BARANG</th>
                <th>JENIS BARANG</th>
                <th>ASAL BARANG</th>
                <th>TAHUN RILIS</th>
                <th>HARGA</th>
                <th>GAMBAR</th>
                <th>AKSI</th>
            </tr>

            <?php $i = 1;
            foreach ($barang as $brg) : ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $brg['nama_barang']; ?></td>
                    <td><?php echo $brg['jenis_barang']; ?></td>
                    <td><?php echo $brg['asal_barang']; ?></td>
                    <td><?php echo $brg['tahun_barang']; ?></td>
                    <td><?php echo $brg['harga_barang']; ?></td>
                    <td><img width="200px" src="img/data/<?php echo $brg['gambar']; ?>" alt=""></td>
                    <td><a href="update.php?id_barang=<?= $brg['id_barang']; ?>"><button class="update"><i class="fas fa-pen"></i></button></a>
                        <a href="delete.php?id_barang=<?= $brg['id_barang']; ?>"><button class="delete"><i class="fas fa-trash"></i></button></a>
                    </td>
                </tr>
            <?php $i++;
            endforeach; ?>
        </table>
    </section>
</body>

</html>