<?php
$servername = "localhost";
$name = "root";
$password = "";
$dbname = "dbchallenge";

$username = $_POST['username'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];

// Create connection
$conn = new mysqli($servername, $name, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$wachtwoord')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();
?>