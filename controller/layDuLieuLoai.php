<?php

	include "../model/DBconfig.php";
	$db = new Database;
	$db->connect();
	$tblTable = "theloai";
	$data = $db->getAllData($tblTable);
	$data= json_encode($data);
	echo $data;
?>