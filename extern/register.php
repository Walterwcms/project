<?php

$servername = "salt.db.elephantsql.com";
$username = "bimxhbpm";
$password = "XmrTlAKoGxrJQoAmlI_kTl_TrvT9kbvd";
$dbname = "bimxhbpm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Get the form data
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];

// Insert the user data into the database
$sql = "INSERT INTO users (firstName, lastName, email, password)
VALUES ('$firstName', '$lastName', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
