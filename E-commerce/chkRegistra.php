<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$user = $_GET['user'];
$pass = $_GET['pass'];
$id = 0;
// Connessione al database
include("ConnDB.php");

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

// Query per l'inserimento di un nuovo record nella tabella "login"
$sql = "INSERT INTO login (Nome, Cognome, Username, Password, ID) VALUES ('$nome', '$cognome', '$user', '$pass', '$id')";

//Esecuzione della query
if (mysqli_query($conn, $sql)) {
    echo "Record inserito correttamente";
    header("location:Login.php? msg=Non ho fatto nada");
} else {
    echo "Errore durante l'inserimento del record: " . mysqli_error($conn);
}

// Chiusura della connessione al database
mysqli_close($conn);
?>