// $fullName = $_POST['fullName'];
// $mobileNumber = $_POST['mobileNumber'];
// $emailAddress = $_POST['emailAddress'];
// $emailSubject = $_POST['emailSubject'];
// $yourMessage = $_POST['yourMessage'];


// //DataBase connection
// $conn = new mysqli('localhost', 'root', '', 'portfolio');

// if ($conn->connect_error) {
// die('Connection Failed : ' . $conn->connect_error);
// } else {
// $stmt = $conn->prepare("insert into
registration(fullName,mobileNumber,emailAddress,emailSubject,yourMessage)value(?,?,?,?,?)");
// $stmt->bind_param("sisss",$fullName,$mobileNumber,$emailAddress,$emailSubject,$yourMessage);
// $stmt->execute();
// echo "registration successfully...";
// $stmt->close();
// $stmt->close()
// }







<?php

$fullName = $_POST['fullName'];
$mobileNumber = $_POST['mobileNumber'];
$emailAddress = $_POST['emailAddress'];
$emailSubject = $_POST['emailSubject'];
$yourMessage = $_POST['yourMessage'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'portfolio');

if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO registration (fullName, mobileNumber, emailAddress, emailSubject, yourMessage) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sisss", $fullName, $mobileNumber, $emailAddress, $emailSubject, $yourMessage);
    $stmt->execute();
    echo "Registration successful.";
    $stmt->close();
    $conn->close();
}
?>