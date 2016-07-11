<?php
require '../models/model.php';
$_SERVER["REQUEST_METHOD"]=="POST";
	$name_from_user=$_POST['username'];
	$adm_from_user=$_POST['password'];
	$r=validate_student($name_from_user,$adm_from_user,$b);
	if ($r) {
		header('Location:../index.php');
	}else{
		header('Location:../views/login.php');
	}
?>