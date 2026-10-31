<?php
$host = "dbsekolah.mysql.database.azure.com";
$user = "alifiamaretacahyani";
$pass = "MASUKKAN_PASSWORD_AZURE_MU"; 
$db   = "db_sekolah";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>