<?php  
function base_url($url = null){
	$base_url = "http://localhost/sistem-sekolah-lite";

	if ($url != null){
		return $base_url . "/" . $url;
	}
	else{
		return $base_url;
	}
}

?>