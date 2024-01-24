<?php
// in questa pagina metti connessione tra database e form 

include ('mysqlconn.php'); 

$id=$_POST ['id']; 
$nome= $_POST['nome']; 
$cognome= $_POST ['cognome']; 
$telefono= $_POST ['telefono']; 
$indirizzo= $_POST ['indirizzo']; 
$eta= $_POST ['eta']; 
$email= $_POST ['email']; 
$web= $_POST ['web']; 

$sql = "INSERT INTO dati_prova (nome, cognome, telefono, indirizzo, eta, email,web)
VALUES ('$nome', '$cognome', '$telefono', '$indirizzo', '$eta', '$email', '$web')";

// con questo va in un altra pagina 

/* if ($conn->query($sql) === TRUE) {
  echo "New user added". "<br>";  // con questo va in un altra pagina 
  
  echo "<a href='index.php' >Back</a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 */

// con questo lo mostra nella stessa pagina 

if ($conn->query($sql) === TRUE) {
  header('location:index.php?user=add'); // con questo lo mostra nella stessa pagina 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 


