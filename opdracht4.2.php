<?php
$servername = "localhost";
$name = "root";
$password = "root";
$dbname = "sys";

$id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$wachtwoord = $_POST['wachtwoord'];


$conn = new mysqli($servername, $name, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET email='$email', username='$username', password='$wachtwoord' WHERE user_id='$id'";
if(mysqli_query($conn, $sql)){
    echo "Records were updated successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);}

$conn->close();
