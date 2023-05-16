<?php
// Codice PHP per elaborare la richiesta
$inputIndex = $_GET['parametro1'];
$newQuantity = $_GET['quntita'];

// Eseguire l'aggiornamento nel database
$sql = "UPDATE carrello SET Quantita = Quantita - $newQuantity WHERE id = $inputIndex";

if ($conn->query($sql) === TRUE) {
    $response = "Quantità aggiornata nel database con successo.";
} else {
    $response = "Errore durante l'aggiornamento della quantità nel database: " . $conn->error;
}
echo $response;
$conn->close();
?>






