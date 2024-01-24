<?php

/* include ('mysqlconn.php'); 
$query= "select * from dati_prova ";
$result= mysqli_query($conn, $query);  questo e un metodo per non creare una pagina aggiuntiva  */

include ('mysqlconn.php'); 
include ('showUser.php'); 
$result = display_data();  // from show user



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Prova</title>
  </head>
  <body>
    <h1>Prova inserimento dati</h1>
    <div>
      <form action="insertdata.php" method="post" class="form">
       
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="" />
        <label for="cognome">Cognome</label>
        <input type="text" name="cognome" id="" />
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" id="" />
        <label for="indirizzo">Indirizzo</label>
        <input type="text" name="indirizzo" id="" />
        <label for="eta">Età</label>
        <input type="text" name="eta" id="" />
        <label for="email">Email</label>
        <input type="text" name="email" id="" />
        <label for="web">Web</label>
        <input type="text" name="web" id="" />
        <input type="submit" value="submit" name="SubmitButton" />
      </form>
    </div>
    <div class="table">
      <table>
        <thead>
          <tr>
            
            <th>Nome</th>
            <th>Cognome</th>
            <th>Telefono</th>
            <th>Indirizzo</th>
            <th>Età</th>
            <th>Email</th>
            <th>Web</th>
            <th>Edit/Delete</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            while ($row= mysqli_fetch_assoc($result) )
            {
             ?>
            <!--  -->
             <td><?php echo $row['nome']  ?> </td>
             <td><?php echo $row['cognome']  ?> </td>
             <td><?php echo $row['telefono']  ?> </td>
             <td><?php echo $row['indirizzo']  ?> </td>
             <td><?php echo $row['eta']  ?> </td>
             <td><?php echo $row['email']  ?> </td>
             <td><?php echo $row['web']  ?> </td>
             <td> 
              <button><a href="update.php?id=<?php echo$row['Id']?>">Update</a></button> <!-- id non dovrebbe vedersi per questo lo metto qui -->
              <button><a href="delete.php?id=<?php echo$row['Id']?>">Delete</a></button>
             </td>
            </tr>
            </tbody>
             <?php
            }

            ?>
       
        
      </table>
    </div>
    <a href="../index.html">Back</a> <!-- manda indietro di due cartelle e collega all'index.html -->
  </body>
</html>
