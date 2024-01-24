<?php
include ('mysqlconn.php');


$id= $_GET['id'];
$sql="SELECT*FROM `dati_prova` WHERE id=$id";
$result=mysqli_query($conn, $sql); 
$row= mysqli_fetch_assoc($result); 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Prova</title>
  </head>
  <body>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
  <a href="index.php">

 
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backpack2-fill" viewBox="0 0 16 16">
  <path d="M5 13h6v-3h-1v.5a.5.5 0 0 1-1 0V10H5z"/>
  <path d="M6 2v.341C3.67 3.165 2 5.388 2 8v1.191l-1.17.585A1.5 1.5 0 0 0 0 11.118V13.5A1.5 1.5 0 0 0 1.5 15h1c.456.607 1.182 1 2 1h7c.818 0 1.544-.393 2-1h1a1.5 1.5 0 0 0 1.5-1.5v-2.382a1.5 1.5 0 0 0-.83-1.342L14 9.191V8a6.002 6.002 0 0 0-4-5.659V2a2 2 0 1 0-4 0m2-1a1 1 0 0 1 1 1v.083a6.04 6.04 0 0 0-2 0V2a1 1 0 0 1 1-1m0 3a4 4 0 0 1 3.96 3.43.5.5 0 1 1-.99.14 3 3 0 0 0-5.94 0 .5.5 0 1 1-.99-.14A4 4 0 0 1 8 4M4.5 9h7a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5"/>
</svg>
</a>  
  </div>
</nav>

  <h2 class="text-center text-danger opacity-100">Update your Details</h2>

  <div class="d-flex flex-column mb-3 justify-content-center align-items-center">  
  <form action="" method="post" >
  
<div class="d-flex flex-column mb-3">
      
       
        <label  for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" id="" value="<?php echo $row['nome']  ?> " />
</div>
<div class="d-flex flex-column mb-3">
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="" value="<?php echo $row['cognome']  ?> " />
</div>
<div class="d-flex flex-column mb-3">       
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="" value="<?php echo $row['telefono']  ?> " />
</div>    
<div class="d-flex flex-column mb-3">
       <label for="indirizzo">Indirizzo</label>
        <input type="text" name="indirizzo" id="" value="<?php echo $row['indirizzo']  ?> " />
</div>     
<div class="d-flex flex-column mb-3">
        <label for="eta">Età</label>
        <input type="text" name="eta" id="" value="<?php echo $row['eta']  ?> " />
</div>

<div class="d-flex flex-column mb-3">
        <label for="email">Email</label>
       
        <input type="text" name="email" id="" value="<?php echo $row['email']  ?> " />
 </div>
<div class="d-flex flex-column mb-3">
        <label for="web">Web</label>
        <input type="text" name="web" id="" value="<?php echo $row['web']  ?> " />
 </div>
<div class="d-flex flex-column mb-3"> 
        <input  class="btn btn-primary" type="submit" value="Update" name="updateButton"  />
</div>
<div class="d-flex flex-column mb-3">
        <button type="button" class="btn btn-primary "><a class="text-light" href="index.php">Back </a></button>
</div>      

 </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>


<?php


if(isset($_POST['updateButton'])){
    $nome= $_POST['nome']; 
    $cognome= $_POST ['cognome']; 
    $telefono= $_POST ['telefono']; 
    $indirizzo= $_POST ['indirizzo']; 
    $eta= $_POST ['eta']; 
    $email= $_POST ['email']; 
    $web= $_POST ['web']; 

$update = "UPDATE `dati_prova` SET `nome`='$nome',`cognome`='$cognome',`telefono`='$telefono',`indirizzo`='$indirizzo',`eta`='$eta',`email`='$email',`web`='$web'  WHERE id=$id";
$data=mysqli_query($conn, $update); 

if ($data) {
  header('location:index.php?user=updated'); // con questo lo mostra nella stessa pagina 
} else {
  echo "Error: " . $update . "<br>" . $conn->error;
}

$conn->close();
}





?>  


