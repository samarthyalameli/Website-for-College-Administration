<?php

session_start();

require 'test4.php';


if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT * FROM studentdetails WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$resul = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( !empty($resul)){
		$user = $resul;
        
	}

}


?>