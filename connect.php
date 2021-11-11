<?php
$server = "localhost";
$username ="root";
$passw = "";
$db = "db_barang";

// membuat koneksi
$conn = mysqli_connect($server, $username, $passw, $db);

// mengecek koneksi
// if(!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error() );
// }

// echo "koneksi berhasil";
// mysqli_close($conn);


?>
