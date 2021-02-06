<?php

$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "department_db";

//Database Connection

$conn = mysqli_connect($server_name, $username, $password, $database_name);

//Now check the connection

if(!$conn){
    die("Connection Failed:" . mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql_query = "INSERT INTO feedbacks
    (id, fldName, fldEmail, fldPhone, fldMessage) 
    VALUES 
    ('0', '$name', '$email', '$phone', '$message')"; 


    if(mysqli_query($conn, $sql_query)){

        echo"New Details Entry inserted successfully !";

    }else{
        
        echo"Error: ".$sql. "" . mysqli_error($conn);

    }
    mysqli_close($conn);
}
?>