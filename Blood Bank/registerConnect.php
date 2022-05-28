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

//  if ($conn == true) {
//   echo "conection sucsess";
//  }


$fn = $_POST["fname"];
$ln = $_POST["lname"];
$gen = $_POST["gender"];
$em = $_POST["email"];
$phone = $_POST["telephone"];
$prevdon = $_POST["previous-donation"];
$ar = $_POST["area"];
$bg = $_POST["bloodGroup"];


$sql = "INSERT INTO `registration` (`first_name`, `last_name`, `gender`, `email`, `phone`, `donation_date`, `area`, `blood_group`) 
VALUES ('$fn', '$ln', '$gen', '$em', '$phone', '$prevdon', '$ar', '$bg')";

if($conn->query($sql)){
  echo "You have successfully become a donar";
}

$conn->close();


?> 
</body>
</html>