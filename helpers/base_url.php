<?php  
function base_url($url = null){
	
	// diambil dari config.php
	global $url_sekolah;

	// $base_url = "http://localhost/sistem-sekolah-lite";
	$base_url = $url_sekolah;

	if ($url != null){
		return $base_url . "/" . $url;
	}
	else{
		return $base_url;
	}
}

?>