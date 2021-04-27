<?php

if(isset($_POST['submit'])) ;
$firstname = $_POST['first'];
  "firstname: ". $firstname. "<br/>";
$lastname = $_POST['last'];
  "lastname: ". $lastname. "<br/>";
$email = $_POST['email'];
  "email: ". $email. "<br/>";
$password = $_POST['pw'];
  "password: ". $password. "<br/>";

echo "<h3>Welcome $firstname,</h3>
Registration Successful!";


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seyilab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO myguests (firstname, lastname, email, password)
VALUES ('$firstname','$lastname','$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo "Connected successfully";
?>