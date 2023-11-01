<?php
date_default_timezone_set("Asia/Makassar");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Brand</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleform.css">
</head>

<body>
    <header class="dark">
        <div class="container">
            <div class="navbar">
                <img src="img/logo.jpg" class="logo">
                <nav>
                    <h2 style="text-align: center;">Luxury Brand</h2>
                    <ul>
                        <li><a href="" onclick="alert('Belum bisa di akses')">Home</a></li>
                        <li><a href="">About Me</a></li>
                        <li><a href="" onclick="alert('Belum bisa di akses')">Kontak</a></li>
                        <?php if (isset($_SESSION["login"]) != true) { ?>
                            <li><a href="login.php">Login</a></li>
                        <?php } else { ?>
                            <li><a href="logout.php">Logout</a></li>
                        <?php }  ?>
                        <li class="nav-item"><button class="dark-mode-button">Switch Mode</button></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col">
            <h1>Wellcome</h1>
            <p>Selamat datang di Web Luxury Brand. Disini tersedia beberapa koleksi <br>barang-barang Luxury.</p>
            <button type="button" onclick="alert ('Tombol ini juga belum bisa di akses')">Explore</button>
        </div>
        <div class="col">
            <div class="card" style="background-image: url(lvlgo.jpg);">
                <h3>Louis Vuitton</h3>
            </div>
            <div class="card" style="background-image: url(diorlogo.jpeg);">
                <h3 style="color: white;">Dior</h3>
            </div>
            <div class="card" style="background-image: url(guccilogo.jpeg);">
                <h3>GUCCI</h3>
            </div>
            <div class="card" style="background-image: url(hermeslogo.jpeg);">
                <h3>Hermes</h3>
            </div>
            <div class="card" style="background-image: url(pateklogo.jpg);">
                <h3>Patek Philippe</h3>
            </div>
        </div>
    </div>

    <div class="img2">
        <img style="width: 500px;" src="img/lvbag.jpg" alt="barang lv">
        <img style="width: 405px;" src="img/https://image.femaledaily.com/dyn/640/images/prod-pics/69a66a23bc0950d723eb054462e00f00.jpg" alt="Dior Parfume">
        <img style="width: 500px;" src="img/guccishoe.jpg" alt="Gucci Shoe">
        <img style="width: 500px;" src="img/hermebelt.jpeg" alt="Herme Belt">
        <img style="width: 500px;" src="img/patekwatch.jpg" alt="Patek Watch">
    </div>

    <div class="container2">
        <div class="biodata">
            <h2 style="color: white;">About Me</h2>
            <p>Nama : Steven Geraldo Sengiang</p>
            <p>NIM : 2209106134</p>
            <p>Kelas : Informatika C22</p>
            <p>Email : oursoul01@gmail.com</p>
            <a href="https://instagram.com/stevengeraldo_?igshid=OGQ5ZDc2ODk2ZA==" onclick="alert('Ini akan membuka profil Instagram saya. Apakah berkenan melanjutkan?')">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"><a href=""></a>
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
            </a>
        </div>
    </div>
    <div class="kontak">
        <h3>Contact Us</h3>
        <div class="border"></div>

        <form action="proses.php" method="POST" name="input">
            <div>
                <input type="text" name="nama" required="" placeholder="Nama">
            </div>
            <strong style="color: #F2CD5C">Jenis Kelamin<br></strong>

            <div class="Jenis">
                <div>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki">
                    <label for="Laki-Laki">Laki-Laki</label>
                </div>

                <div>
                    <input type="radio" name="jenis_kelamin" value="Perempuan">
                    <label for="Perempuan">Perempuan</label>
                </div>
            </div>

            <div>
                <input type="email" name="email" required="" placeholder="Email">
            </div>

            <div>
                <input type="text" name="nomor" required="" placeholder="N  omor">
            </div>

            <input type="submit" name="input" value="Send">
            <input type="reset" name="Reset">
        </form>
    </div>

    <div class="popup" id="resultPopup">
        <h2>Hasil Inputan</h2>
        <div id="resultContent"></div>
        <button id="closePopup">Tutup</button>
    </div>
    <div>
        <?php if (isset($_SESSION["type"])) : ?>
            <?php if ($_SESSION["type"] == "admin") : ?>
                <a href="indexAdmin.php">
                    <button class="buttonadm">Tambah Brand Luxury</button>
                </a>
            <?php endif ?>
        <?php endif ?>
    </div>


    <footer>
        <p>Date : <?= date("l, d-m-Y e") ?></p>
        <p>&copy; Luxury Brand</p>
    </footer>
</body>
<script>
    // Fungsi untuk mengaktifkan Dark Mode
    function enableDarkMode() {
        document.body.classList.add('dark-mode');
    }

    // Fungsi untuk menonaktifkan Dark Mode
    function disableDarkMode() {
        document.body.classList.remove('dark-mode');
    }

    // Fungsi untuk mengubah mode saat tombol "Switch Mode" diklik
    function toggleDarkMode() {
        if (document.body.classList.contains('dark-mode')) {
            disableDarkMode();
        } else {
            enableDarkMode();
        }
    }

    // Tambahkan event listener untuk tombol "Switch Mode"
    const darkModeButton = document.querySelector('.dark-mode-button');
    darkModeButton.addEventListener('click', toggleDarkMode);
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form[name='input']");
        const resultPopup = document.getElementById("resultPopup");
        const resultContent = document.getElementById("resultContent");
        const closePopup = document.getElementById("closePopup");

        form.addEventListener("submit", function(e) {
            e.preventDefault(); // Mencegah pengiriman formulir
            const nama = this.querySelector("input[name='nama']").value;
            const jenisKelamin = this.querySelector("input[name='jenis_kelamin']:checked").value;
            const Tempat = this.querySelector("input[name='Tempat']").value;
            const email = this.querySelector("input[name='email']").value;
            const date = this.querySelector("input[name='date']").value;
            const nomor = this.querySelector("input[name='nomor']").value;

            // Menampilkan hasil inputan dalam popup
            resultContent.innerHTML = `
                Nama: ${nama}<br>
                Jenis Kelamin: ${jenisKelamin}<br>
                Tempat dan Tanggal Lahir: ${Tempat}, ${date}<br>
                Email: ${email}<br>
                Nomor Telepon: ${nomor}<br>
            `;

            resultPopup.style.display = "block";
        });

        closePopup.addEventListener("click", function() {
            resultPopup.style.display = "none";
        });
    });
</script>

</html>