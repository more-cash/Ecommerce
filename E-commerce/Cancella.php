<?php
include "ConnDB.php";
session_start();

$utente = $_GET["profile"];
$sql = "DELETE FROM carrello WHERE idCarrello = '$utente'";
$result = $conn->query($sql);

if ($result) {
    header('location:Cart.php');
} else {
    header('location:Cart.php?err=Errore di sistema!');
}

$conn->close();
?>