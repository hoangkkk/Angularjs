<?php 
	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$data=json_decode(file_get_contents("php://input"));
	if($data->id){
		if($data->tenLoai){
			$db->updateData($data->id, $data->tenLoai,$data->AnHien);
		}else {
			$db->delete($data->id);
		}
		
	}else {
		$db->insertData($data->tenLoai,$data->AnHien);
	}
	
?>