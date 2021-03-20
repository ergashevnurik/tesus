<?php 

// Initialize the variables for inserting to the DataBase
$firstName = $_POST['firstName'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Initialize the database url, username, password
$serverNameLocalhost = "localhost";
$username = "root";
$password = "";
$dbName = "contact-request";

$conn = new mysqli($serverNameLocalhost, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection Failure: " . $conn->connect_error);
} else {
    // $sqlCreateTable = "CREATE DATABASE contactRequest"; // Create Table SQL 
    // if ($conn->query($sqlCreateTable) === TRUE) {
    //     echo "DATABASE with name contactRequest";
    // } else {
    //     echo "Error: " . $conn->error;
    // }

    $sqlInsertToTable = "insert into contactRequest(firstName, phone, email) values(?, ?, ?)"; // Insert into Database the Users Requests
    $stmt = $conn->prepare($sqlInsertToTable);
    $stmt->bind_param("sss", $firstName, $phone, $email);
    $stmt->execute();
    echo "Was Successfully Inserted...";
    $stmt->close();
}

$conn->close();

?>