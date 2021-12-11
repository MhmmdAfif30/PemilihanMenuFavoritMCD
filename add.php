<?php
	include('configdb.php');
	$alternatif = $_POST['alternatif'];
	$k1 = $_POST['k1'];
	$k2 = $_POST['k2'];
	$k3 = $_POST['k3'];
	$k4 = $_POST['k4'];
	$id_alt = rand(1, 1000000) ;
	$result = $koneksi->query("INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `k1`, `k2`, `k3`, `k4`)
								VALUES ($id_alt, '".$alternatif."', '".$k1."', '".$k2."', '".$k3."', '".$k4."');");
	if(!$result){
		// echo "Gagal";
		echo $koneksi->connect_errno." - ".$koneksi->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>
