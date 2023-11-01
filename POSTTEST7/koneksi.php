<?php

$server = "localhost";
$user = "root";
$password = "";
$name = "praktikum";

$con = mysqli_connect($server, $user, $password, $name);

if (!$con) {    
    die("Gagal konek ke database : ". mysqli_connect_error());
}


?>