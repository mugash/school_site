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
        while($row=$result->fetch_assoc()){
            echo "Welcome ".$row['Name'];
        }
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
        while($row=$result->fetch_assoc()){
            return "Welcome".$row['Data'];
        }
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
        while($row=$result->fetch_assoc()){
            return $row["Name"];
        }
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
        while($row=$result->fetch_assoc()){
            return $row["Name"] .$row["Job"];
        }
    }else{
        echo "0 no data";
    }
}

getstudentby("Duncan",$conn);
login_Student("Duncan",123456789);
login_student("The",2345);
echo get_staff();
echo get_news();
//$conn->close();
?>


