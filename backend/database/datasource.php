<?php


$con = mysqli_connect('localhost', 'root', '', 'tesus');

if ($con->connect_error) {
    die("Connection Failure: " . $con->connect_error);
} else {

    $firstName = $_POST['firstName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sqlInsertToTable = "insert into contact_request(firstName, phone, email) values(?, ?, ?)";
    $stmt = $con->prepare($sqlInsertToTable);
    $stmt->bind_param("sss", $firstName, $phone, $email);
    $stmt->execute();
    echo "Was Successfully Inserted...";
    $stmt->close();
}
$con->close();
header("Location: ../../index.php");






/*// Initialize the variables for inserting to the DataBase
$firstName = $_POST['firstName'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Initialize the database url, username, password and database name
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
*/
?>