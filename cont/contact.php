<?php


require "../models/models.php";

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if (empty($_POST['firstname'])){
        echo "Name is required";
        header("../views/contact.php");
    }else{
        $firstname=$_POST['firstname'];
    }

    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $address=$_POST['address'];
    $message=$_POST['comment'];


    if(add_contacts($firstname,$last_name,$email,$phone,$address,$city,$message)==True){
        header("Location:../index.php");
        echo "Redirect is not working";
    }else{
        echo "Error";
    }
}
?>
