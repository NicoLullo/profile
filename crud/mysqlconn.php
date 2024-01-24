
<?php
//connessione 
$hostname= "localhost";
$user= "root"; 
$password= "root"; 
$dbname="appuno"; 


// Create connection
$conn = new mysqli($hostname, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




?>

