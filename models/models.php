<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TheSchool";

// Create connection
 $conn = new mysqli('localhost', 'root', '', 'TheSchool');
    // Check connection
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 // return $conn;


function getstudentby($name,$conn){
    $sql = "SELECT * from Student ";
    $result = $conn->query($sql);
    if ($result->num_rows >0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["ID"];
        }
} else {
    echo "0 results";
}
}



function login_Student($name,$adnum){
    global $conn;
    $sql="SELECT * from Student where Name='".$name."' and AdNum='".$adnum."'";
    $result= $conn->query($sql);
    if(!$result){
        echo "No Data";
    }
    if($result-> num_rows >0){
        $row=$result->fetch_all(MYSQLI_ASSOC);
            echo "Welcome ".$row['Name'];
    }
}



function get_news(){
    global $conn;
    $sql="SELECT  * from  News";
    $result=$conn->query($sql);
    if(!$result){
        return "Data Table news";
    }
    if($result-> num_rows > 0){
    $row=$result->fetch_all(MYSQLI_ASSOC);
     return $row;  
    }else{
        echo "0 news result";
    }
}


function get_events(){
    global $conn;
    $sql="SELECT * from Events";
    $result=$conn->query($sql);
    if(!$result){
        return "No Table";
    }
    if($result->num_rows>0){
        $row=$result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }else{
        echo "0 new result";
    }

}

function get_staff(){
    global $conn;
    $sql="SELECT * from Staff";
    $result=$conn->query($sql);
    if(!$result){
        return "No table";
    }
    if($result->num_rows>0){
        $row=$result->fetch_all(MYSQLI_ASSOC);
        return $row;
    }else{
        echo "0 no data";
    }
}


function add_contacts($firstname,$lastname,$email,$phone,$address,$city,$message){
    $sql="insert into Contacts(Firstname,Lastname,Email,Phone,Addr,Town,Message) values('$firstname','$lastname','$email','$phone','$address','$city','$message') ";
        global $conn;
    if($conn->query($sql)==True){
        return True;
    }else{
        echo "Error:".$sql."<br>".$conn->error;
        return False;
    }
}
?>


