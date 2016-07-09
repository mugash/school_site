<?php
require '../models/model.php';
$_SERVER["REQUEST_METHOD"]=="POST";
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$adress=$_POST['address'];
	$city=$_POST['city'];
	$message=$_POST['comment'];
	add_contact($first_name,$last_name,$email,$phone,$adress,$city,$message,$b);
 	header("Location:../index.php");

?>
