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
    <form action="chkCar.php" method="POST" enctype="multipart/form-data">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>ADD</h2>
                    </div>
                    <p>Please fill this form to add a car</p>
                        <div class="form-group">
                            <label>Marca</label>
                            <input type="text" name="marca" class="form-control" value="<?php echo $marca; ?>">
                        </div>
                        <div class="form-group">
                            <label>Modello</label>
                            <input type="text" name="modello" class="form-control" value="<?php echo $modello; ?>">
                        </div>
                        <div class="form-group">
                            <label>Prezzo</label>
                            <input type="number" name="prezzo" class="form-control" value="<?php echo $prezzo; ?>">
                        </div>
                        <div class="form-group">
                            <label>Quantità</label>
                            <input type="number" name="quantita" class="form-control" value="<?php echo $quantita; ?>">
                        </div>
                        <div class="form-group">
                            <label>Codice</label>
                            <input type="number" name="codice" class="form-control" value="<?php echo $codice; ?>">
                        </div>
                        <div class="form-group">
                            <label>Foto Macchina</label>
                            <input type="file" name="fotoCar" class="form-control" value="<?php echo $fotoCar; ?>">
                        </div>
                        <div class="form-group">
                            <label>Locazione</label>
                            <input type="numeber" name="locazione" class="form-control" value="<?php echo $locazione; ?>">
                        </div>
                        <div class="form-group">
                            <label>Condizione</label>
                            <input type="text" name="condizione" class="form-control" value="<?php echo $condizione; ?>">
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