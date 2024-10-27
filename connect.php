<?php 

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];
$Email     = $_POST['Email'];
$password  = $_POST['password'];


//database connection

$con = new mysqli('localhost'.'root','','test');
if($con->connect_error){
    die('connection faield : '.$conn->connect_error);
}else{
    $smt =conn->prepare("inser into ragistration(firstname, lastname, email, password,)
    values(?, ?, ?, ?,)")
    $stmt->bind_param("ssssi" ,$firstname, $lastname, $Email, $password);
    $stmt->execute();
    echo "Registration Successful...";
    $stmt->close();
    $conn->close();
    
}



?>