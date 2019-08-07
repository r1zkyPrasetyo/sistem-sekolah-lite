<?php  
// include file semua tampilan disimpan di folder pages

$page = isset($_GET['page']) ? $_GET['page'] : '';

$notifikasi = "file tidak ditemukan atau tidak tersedia !";

// menentukan laman yang dipilih akan muncul
switch($page){

	case 'siswa':
	if(!file_exists("pages/siswa/siswa.php"))die($notifikasi);
	include("pages/siswa/siswa.php");
	break;

	case 'sekolah':
	if(!file_exists("pages/sekolah/sekolah.php"))die($notifikasi);
	include("pages/sekolah/sekolah.php");
	break;

	case 'edit_sekolah':
	if(!file_exists("pages/sekolah/edit_sekolah.php"))die($notifikasi);
	include("pages/sekolah/edit_sekolah.php");
	break;

	case 'guru':
	if(!file_exists("pages/guru/guru.php"))Die($notifikasi);
	include("pages/guru/guru.php");
	break;
	
	case 'pegawai':
	if(!file_exists("pages/pegawai/pegawai.php"))die($notifikasi);
	include("pages/pegawai/pegawai.php");
	break;
	

	// jika tidak ada yang dipilih 
	// aka ninclude template dashboard
	default:
	if(!file_exists("pages/dashboard.php"))die("file tidak ditemukan Shay!");
	include("pages/dashboard.php");
	break;

}


?>