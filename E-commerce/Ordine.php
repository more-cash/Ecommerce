<?php
$marca = "";
$modello = "" ;
$prezzo = 0;
$fotoCar = "" ;
$quantita = 0;
$codice = 0;
$locazione = "" ;
$condizione = "" ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <form action="AggOrdine.php" method="POST" enctype="multipart/form-data">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>ADD</h2>
                    </div>
                    <p>La preghiamo di fornirci:</p>
                        <div class="form-group">
                            <label>Indirizzo</label>
                            <input type="text" name="indirizzo" class="form-control" value="<?php echo $marca; ?>">
                        </div>
                        <div class="form-group">
                            <label>Numero di telefono:</label>
                            <input type="number" name="numero" class="form-control" value="<?php echo $modello; ?>">
                        </div>
                        <?php
                            session_start();

                           
                        ?>
                        <input type="submit" class="btn btn-primary" value="Aggiungi">
                        <a href="Admin.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>