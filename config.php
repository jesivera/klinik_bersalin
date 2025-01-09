<?php
$databaseHost = 'localhost';
$databaseName = 'klinik_bersalin';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
