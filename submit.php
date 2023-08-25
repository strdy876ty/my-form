<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$phone = $_POST["phone"];
$father_name = $_POST["father_name"];
$mother_name = $_POST["mother_name"];
$id = $_POST["id"];

// Insert data into database
$sql = "INSERT INTO users (name, email, password, phone, father_name, mother_name, id) 
        VALUES ('$name', '$email', '$password', '$phone', '$father_name', '$mother_name', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close(); // Make sure this closing brace matches the opening brace of the 'if' statement


