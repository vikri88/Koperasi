<?php
	$id = $_GET['id'];
	if ($id == TRUE) {
		session_start();
		$_SESSION['edit'] = $id;
		header('location: ../index.php?id='.$id);	
	}
 ?>