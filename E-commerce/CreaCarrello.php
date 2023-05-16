<?php

session_start(); // inizia la sessione

// connessione al database
include("ConnDB.php");

// inserisce i dati del carrello nella tabella
if(isset($_SESSION['carrello'])) {
  foreach($_SESSION['carrello'] as $prodotto) {
    $id_prodotto = $prodotto['id'];
    $quantita = $prodotto['quantita'];
    $sql = "INSERT INTO carrello (id_prodotto, quantita) VALUES ('$id_prodotto', '$quantita')";

    if ($conn->query($sql) === FALSE) {
      echo "Errore nell'inserimento dei dati: " . $conn->error;
    }
  }
}
header("Carrello.php");
// chiude la connessione al database
$conn->close();

?>