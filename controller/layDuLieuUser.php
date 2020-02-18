<?php

	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$tblTable = "user";
	$data = $db->getAllData($tblTable);
	$data= json_encode($data);
	echo $data;
?>