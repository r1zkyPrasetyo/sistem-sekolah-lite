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
?>