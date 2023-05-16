<?php
// Connessione al database
session_start();
if(isset($_SESSION["username"])) {
	//header("");
	$username = $_SESSION["username"];
	$id = $_SESSION["ID"];
} else {
	$id = 0;
}
$user = $_SESSION['profi'];
include("ConnDB.php");
    $sql = "SELECT * FROM articoli WHERE Codice = '$user'";//
    $result = $conn->query($sql);
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
            
            if(isset($_SESSION["username"])) {
                $sql = "INSERT INTO preferiti (Marca, Modello, Prezzo, Quantita, Codice, Foto, Locazione, Condizione, IdPreferito) VALUES ('$marca', '$modello', '$prezzo', '$quantita', '$codice', '$foto', '$locazione', '$condizione', '$id')";
            } else {
                $sql = "INSERT INTO preferiti (Marca, Modello, Prezzo, Quantita, Codice, Foto, Locazione, Condizione, IdPreferito) VALUES ('$marca', '$modello', '$prezzo', '$quantita', '$codice', '$foto', '$locazione', '$condizione', '$id')";
            }

            //Esecuzione della query
            if (mysqli_query($conn, $sql)) {
                header('Wishlist.php');
            } else {
                echo "Errore durante l'inserimento del record: " . mysqli_error($conn);
            }

        }
    }
?>