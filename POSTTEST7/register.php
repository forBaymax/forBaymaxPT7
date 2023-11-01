<?php
require "koneksi.php";
$errorUsername = false;
if (isset($_POST["submit"])) {
    $username = htmlspecialchars(strtolower($_POST["username"]));
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if ($username === "admin") {
        echo "
        <script>
        alert('Dilarang Menggunakan username admin!');
        document.location.href='register.php';
        </script>";
    } else if ($password != $cpassword) {
        echo "
        <script>
        alert('Password dan konfirmasi password tidak sesuai!');
        document.location.href='register.php';
        </script>";
    } else if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM pengguna WHERE username = '$username'")) == 1) {
        echo "
        <script>
        alert('Username Sudah Ada !');
        document.location.href='register.php';
        </script>";
    } else {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = mysqli_query($con, "INSERT INTO pengguna VALUES (NULL, '$username', '$password', 'user')");
        if ($query) {
            echo "
            <script>
            alert('Berhasil register!');
            document.location.href='login.php';
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
    <section>
        <div class="container">
            <h2>Form Registrasi</h2>
            <form action="" method="post">
                <div class="row">
                    <input type="text" name="username" placeholder="Username" id="username" autofocus required>
                </div>
                <div class="row">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <div class="row">
                    <input type="password" name="cpassword" placeholder="Konfirmasi Password" id="cpassword" required>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Register</button>
                </div>
            </form>
            <a href="login.php">Kembali</a>
        </div>
    </section>
</body>

</html>