<?php

include ('mysqlconn.php'); 

function display_data(){
    global $conn; 
$query= "select * from dati_prova ";
$result= mysqli_query($conn, $query); 
return $result; 
}

?>