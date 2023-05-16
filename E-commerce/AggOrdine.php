<?php
session_start();
$marca = "";
$modello = "";
$prezzo = 0;
$fotoCar = "";
$quantita = 0;
$codice = 0;
$locazione = "";
$condizione = "";
$indirizzo = "";
$numero = 0;
$totale = 0;
$id = 0;
$nomeFoto = "";
if(isset($_SESSION["username"])) {
	//header("");
	$username = $_SESSION["username"];
	$id = $_SESSION["ID"];
} else {
	$id = 0;
}
$indirizzo = $_POST["indirizzo"];
$numero = $_POST["numero"];
$totale = $_SESSION["totale"];
// Connessione al database
include("ConnDB.php");

// Verifica della connessione
if (!$conn) {
    die("Connessione al database fallita: " . mysqli_connect_error());
}

$sql3 = "SELECT Nome, Cognome FROM login WHERE ID = $id";
$result = $conn->query($sql3);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nome = $row["Nome"];
            $cognome = $row["Cognome"];
        }
    }
// Query per l'inserimento di un nuovo record nella tabella "profilo"
$sql2 = "SELECT * FROM carrello WHERE IdUtente = $id";
$result = $conn->query($sql2);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $marca = $row["Marca"];
            $modello = $row["Modello"];
            $prezzo = $row["Prezzo"];
            $quantita = $row["Quantita"];
            $codice = $row["Codice"];
            $foto = $row["Foto"];
            $locazione = $row["Locazione"];
            $condizione = $row["Condizione"];
        }
    }

    $sql = "INSERT INTO ordine (Nome, Cognome, CodiceProdotto, Locazione, Condizioni, idUtente, Indirizzo, Numero, Totale) VALUES ('$nome', '$cognome', '$codice', '$locazione', '$condizione', '$id', '$indirizzo', '$numero', '$totale')";
//Esecuzione della query
if (mysqli_query($conn, $sql)) {
    echo "Ordine spedito correttamente";
    header("location:svuotaCarrello.php");
} else {
    echo "Errore durante l'inserimento del record: " . mysqli_error($conn);
}

// Chiusura della connessione al database
mysqli_close($conn);
?>