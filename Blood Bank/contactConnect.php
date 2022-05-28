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


$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn == true) {
  echo "conection sucsess";
 }


$nm = $_REQUEST["names"];
$em = $_REQUEST["emails"];
$mes = $_REQUEST["messages"];

$sql = "INSERT INTO `contactus` (`name`, `email`, `message`) 
 VALUES ('$nm', '$em', '$mes')";

if($conn->query($sql)){
  echo "Contact success!";
}
$conn->close();



?>
</body>
</html>

