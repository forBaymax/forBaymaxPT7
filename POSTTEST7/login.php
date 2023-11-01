<?php
session_start();
require "koneksi.php";

if (isset($_POST["submit"])) {
    $username = htmlspecialchars(strtolower($_POST["username"]));
    $password = $_POST["password"];

    $query = mysqli_query($con, "SELECT * FROM pengguna WHERE `username` = '$username'");
    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        if ($row["username"] == "admin") {
            if (password_verify($password, $row["password"])) {
                $nama = strtoupper($row["username"]);
                $_SESSION["login"] = true;
                $_SESSION["type"] = "admin";
                echo "
                <script>
                alert('Hai, Selamat Datang $nama !');
                document.location.href='index.php';
                </script>";
            } else {
                echo "
                <script>
                alert('Password Anda Salah!');
                document.location.href='login.php';
                </script>";
            }
        } else {
            if (password_verify($password, $row["password"])) {
                $nama = strtoupper($row["username"]);
                $_SESSION["login"] = true;
                $_SESSION["type"] = "user";
                echo "
                <script>
                alert('Hai, Selamat Datang $nama !');
                document.location.href='index.php';
                </script>";
            } else {
                echo "
                <script>
                alert('Password Anda Salah!');
                document.location.href='login.php';
                </script>";
            }
        }
    } else {
        echo "
        <script>
        alert('Username Anda Salah!');
        document.location.href='login.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body>
    <section>
        <div class="container">
            <h2>Form Login</h2>
            <form action="" method="post">
                <div class="row">
                    <input type="text" name="username" placeholder="Username" id="username" autofocus required>
                </div>
                <div class="row">
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
            <a href="register.php">Tidak Punya Akun?</a>
        </div>
    </section>
</body>

</html>