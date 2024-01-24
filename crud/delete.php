<?php
include ('mysqlconn.php'); 
$id=$_GET['id']; 
$sql="DELETE FROM `dati_prova` WHERE id=$id "; 
    $result=mysqli_query($conn, $sql); 

    if($result){
        header('location:index.php?msg=userdeleted');
    }else {
        die("Connection failed: " . $conn->connect_error);
    }


