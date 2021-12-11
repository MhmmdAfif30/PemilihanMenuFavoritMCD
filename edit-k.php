<?php
	include('configdb.php');
	$kriteria = $_POST['kriteria']; 
	$kepentingan = $_POST['kepentingan'];
	$cost_benefit = $_POST['cost_benefit'];
	
	$result = $koneksi->query("UPDATE kriteria SET `kriteria` = '".$kriteria."', `kepentingan` = '".$kepentingan."', `cost_benefit` = '".$cost_benefit."' WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $koneksi->connect_errno." - ".$koneksi->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>