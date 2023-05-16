<?php
$marca = $_POST['marca'];
$modello = $_POST['modello'];
$prezzo = $_POST['prezzo'];
$fotoCar = $_FILES['fotoCar'];
$quantita = $_POST['quantita'];
$codice = $_POST['codice'];
$locazione = $_POST['locazione'];
$condizione = $_POST['condizione'];
$nomeFoto = $fotoCar['name'];
// Connessione al database
include("ConnDB.php");

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Query per l'inserimento di un nuovo record nella tabella "profilo"
$sql = "INSERT INTO articoli (Marca, Modello, Prezzo, Quantita, Codice, Foto, Locazione, Condizione) VALUES ('$marca', '$modello', '$prezzo', '$quantita', '$codice', '$nomeFoto', '$locazione', '$condizione')";

//Esecuzione della query
if (mysqli_query($conn, $sql)) {
    echo "Record inserito correttamente";
    header("location:Admin.php");
} else {
    echo "Errore durante l'inserimento del record: " . mysqli_error($conn);
}

// Chiusura della connessione al database
mysqli_close($conn);
?>