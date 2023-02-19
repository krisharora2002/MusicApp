<?php
// Connect to the database
$host = "localhost";
$username = "krisharora34@gmail.com";
$password = "Krisharora@2002";
$dbname = "leads";
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get form data and sanitize it
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$phone = mysqli_real_escape_string($conn, $_POST["phone"]);

// Insert data into the database
$sql = "INSERT INTO leads (name, email, phone) VALUES ('$name', '$email', '$phone')";
if (mysqli_query($conn, $sql)) {
  header("Location: Form.htm");
} else {
  echo "Error: "
