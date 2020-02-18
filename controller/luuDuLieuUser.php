<?php 
	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$data=json_decode(file_get_contents("php://input"));
	if($data->idUser){
		if($data->name){
			$db->updateDataUser($data->idUser, $data->name, $data->pass, $data->email);
		}else {
			$db->deleteUser($data->idUser);
		}
		
	}else {
		$db->insertDataUser($data->name, $data->pass, $data->email);
	}
	
?>