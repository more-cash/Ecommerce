<?php
include "ConnDB.php";
session_start();
   
    $sql= "SELECT * FROM login where Username='".$_POST['username']."' AND Password='".$_POST['password']."'";
    
    $result= $conn->query($sql);

    if($result->num_rows>0){
        $row=$result->fetch_assoc();
        $_SESSION["username"]=$_POST['username'];
        $_SESSION["ID"]=$row['ID'];
        $_SESSION["logged_in"] = true;

        header('location:home2.php?');
    }
    else{
        header('location:Login.php?err=Credenziali errate!&oldEmail='.$_POST['username']);
        $_SESSION["logged_in"] = false;
    }

    $conn->close();
?>