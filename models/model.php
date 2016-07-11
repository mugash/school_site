<?php
function connect(){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Theschool";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	return $conn;	
}
function validate_student($name_from_user,$adm_from_user,$a){
	$sql="SELECT * FROM Student WHERE AdmNumber=$adm_from_user";
	$result=$a->query($sql);
	$row = $result->fetch_assoc();
	if($row["Name"]==$name_from_user){
		return true;
	}
	else{
		return false;
	}
}
function get_all_news($a){
	$sql="SELECT * FROM News";
	$result=$a->query($sql);
	$row=$result->fetch_assoc();
	if(!$result){
		echo "No news to display!";
	}
	return $row;
}
function get_events($a){
	$sql="SELECT * FROM Events";
	$result=$a->query($sql);
	$row=$result->fetch_assoc();
	if(!$result){
		echo "error connecting to events!";
	}
	return $row;
}
function get_staff($a){
	$sql="SELECT * FROM staff";
	$result=$a->query($sql);
	$row=$result->fetch_assoc();
	if(!$result){
		echo "error accsessing staff!";
	}
	return $row;
}
function add_contact($firsname,$lastname,$email,$phone,$address,$city,$message,$a){
	$sql="insert into contacts(first_name,last_name,email,phone,adress,town,message) values('$firsname','$lastname','$email','$phone','$address','$city','$message')";
	$result=$a->query($sql);
}
 $b=connect();
// validate_student("joshua",4195,$b);
// $c=get_all_news($b);
// $d=get_events($b);
// $e=get_staff($b);
// echo $d['Decription']."<br/>";
// echo $c['Data']."<br/>";
// echo $e['Name'].$e['Job'].$e['Profile']."<br/>";
?>
