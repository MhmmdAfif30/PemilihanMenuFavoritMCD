<?php
	include('configdb.php');
	
	$result = $koneksi->query("delete from alternatif where id_alternatif = ".$_GET['id'].";");
	if(!$result){
		echo $koneksi->connect_errno." - ".$koneksi->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>