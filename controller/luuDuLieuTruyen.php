<?php 
	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$data=json_decode(file_get_contents("php://input"));
	if($data->idTruyen){
		if($data->TenTruyen){
			$db->updateDataTruyen($data->idTruyen, $data->TenTruyen, $data->NoiDung, $data->AnHien, $data->tenTacGia);
		}else {
			$db->deleteTruyen($data->idTruyen);
		}
		
	}else {
		$db->insertDataTruyen($data->TenTruyen, $data->NoiDung, $data->AnHien, $data->tenTacGia);
	}
	
	
?>	