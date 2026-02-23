<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$koneksi = mysqli_connect("localhost", "root", "", "eperpus_diva");
// Check connection
if (mysqli_connect_errno()) {
    echo "failed to connect to MySQL: " . mysqli_connect_error();
}
?>