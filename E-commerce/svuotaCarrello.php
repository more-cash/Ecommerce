<?php
include("ConnDB.php");
session_start();

$id;

//controllo se loggato
if (isset($_SESSION["ID"])) {
    $id = $_SESSION["ID"];
} 

if (isset($id)) {
//elimino tutte le righe nella tabella contains di quel cart
$sql = $conn->prepare("DELETE FROM carrello WHERE idUtente = ?");
$sql->bind_param('i', $id);
$sql->execute();
header("location:home2.php?msg=Clean successfully!&type=success");
} else
header("location:home2.php");