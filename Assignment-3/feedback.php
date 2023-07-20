<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "soudb";


// Get form data

$Name = $_POST['Name'];
$Email = $_POST['Email']; 
$Mobileno = $_POST['Mobileno']; 
$Location = $_POST['Location']; 
$Our_car = $_POST['Our_car']; 
$Future = $_POST['Future']; 
$Comments = $_POST['Comments'];
$Rating = $_POST['Rating'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into the database
$sql = "INSERT INTO feedback (Name, Email, Mobileno,Location,Our_car,Future,Comments,Rating)
        VALUES ('$Name', '$Email', '$Mobileno', '$Location','$Our_car','$Future','$Comments','$Rating')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>