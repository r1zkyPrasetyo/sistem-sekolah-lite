<?php  

// start session
session_start();

// set timezone
date_default_timezone_set('Asia/Jakarta');

// error report
ini_set('display_errors', 1);
error_reporting('E_ALL');

// koneksi
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'sistem-sekolah-lite';

$conn = mysqli_connect($host, $user, $pass, $db);

// cek
if(!$conn){
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

// just checking it proper
// echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
// echo "<br>";
// echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$query_sekolah = "SELECT * FROM sekolah WHERE id_sekolah = 1";
$sql_sekolah = mysqli_query($conn, $query_sekolah)or die(mysqli_error($conn));
$data = mysqli_fetch_assoc($sql_sekolah);

$nama_sekolah = $data['nama_sekolah'];
$alamat_sekolah = $data['alamat'];
$telp_sekolah = $data['telp'];
$email_sekolah = $data['email'];
$web_sekolah = $data['web'];
$url_sekolah = $data['url'];
$logo_sekolah = $data['logo'];
$akreditasi_Sekolah = $data['akreditasi'];
?>