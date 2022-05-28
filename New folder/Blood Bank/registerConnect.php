<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "mohon";
$password = "dragon007";
$dbname = "pure_blood";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

 if ($conn == true) {
  echo "conection sucsess";
 }


$fn = $_REQUEST["fname"];
$ln = $_REQUEST["lname"];
$uname = $_REQUEST["username"];
$em = $_REQUEST["email"];
$gen = $_REQUEST["gender"];
$phone = $_REQUEST["telephone"];
$prevdon = $_REQUEST["previous-donation"];
$ar = $_REQUEST["area"];
$pass = $_REQUEST["Password"];
$conpass = $_REQUEST["confirmpass"];


$sql = "INSERT INTO `registration` (`first_name`, `last_name`, `gender`, `email`, `phone`, `donation_date`, `area`, `username`, `pass`, `confirm_pass`) 
VALUES ('$fn', '$ln', '$gen', '$em',  '$phone', '$prevdon', '$ar', '$uname', '$pass', '$conpass')";

if($conn->query($sql)){
  echo "successfully inserted";
}

$conn->close();


?> 
</body>
</html>