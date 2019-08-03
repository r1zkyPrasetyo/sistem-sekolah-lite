<?php  
// include file semua tampilan disimpan di folder pages

$page = isset($_GET['page']) ? $_GET['page'] : '';

// menentukan laman yang dipilih akan muncul
switch($page){

	case 'siswa':
	if(!file_exists("pages/siswa/siswa.php"))die("File tidak ditemukan");
	include("pages/siswa/siswa.php");
	break;

	
	

	// jika tidak ada yang dipilih 
	// aka ninclude template dashboard
	default:
	if(!file_exists("pages/dashboard.php"))die("file tidak ditemukan Shay!");
	include("pages/dashboard.php");
	break;

}


?>