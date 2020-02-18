<?php

	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$tblTable = "truyen";
	$data = $db->getAllData($tblTable);
	$data= json_encode($data);
	echo $data;
?>