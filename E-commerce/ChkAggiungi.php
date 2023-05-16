<?php

session_start(); // inizia la sessione

// controlla se il carrello esiste già nella sessione, altrimenti lo crea
if(!isset($_SESSION['carrello'])) {
    $_SESSION['carrello'] = array();
}

// aggiunge l'articolo al carrello
$id_prodotto = $_SESSION["Cod"]; // ID dell'articolo selezionato
$quantita = 1; // quantità dell'articolo selezionato
$prodotto = array('id' => $id_prodotto, 'quantita' => $quantita); // crea un array con l'ID e la quantità dell'articolo
array_push($_SESSION['carrello'], $prodotto); // aggiunge l'array al carrello nella sessione

header("CreaCarrello.php");
?>