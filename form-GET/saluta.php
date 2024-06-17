<!-- php -->

<?php

// echo $_GET['name'];
// echo $_GET['surname'];
// definisco variabili
$nome = $_GET['nome']; 
$cognome = $_GET['cognome'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>
<body>
    <h1>Form GET</h1>
    <!-- richiamo variabili -->
    <p>Benvenuto <?php echo $nome; ?>  <?php echo $cognome; ?></p>
</body>
</html>