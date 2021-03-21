<?php

// Initialize Variables

$con = mysqli_connect('localhost', 'root', '', 'tesus');

if ($con->connect_error) {
    die("Connection Failure: " . $con->connect_error);
} else {
    $subscriber = $_POST['subscriber'];
    $sqlInsertToTable = "insert into subscribers(subscriber) values(?)";
    $stmt = $con->prepare($sqlInsertToTable);
    $stmt->bind_param("s", $subscriber);
    $stmt->execute();
    echo "Was Successfully Inserted...";
    $stmt->close();
}
    $con->close();
    header("Location: ../../index.php");
?>