<!-- php -->

<?php

// echo $_GET['name'];
// echo $_GET['surname'];
// definisco variabili
$nome = $_GET['name']; 
$cognome = $_GET['surname'];
$age = $_GET['age']

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test GET</title>
</head>
<body>
    <h1>sono test GET</h1>
    <!-- richiamo variabili -->
    <p>Benvenuto <?php echo $nome; ?>  <?php echo $cognome; ?> con anni <?php echo $age ?> </p>
</body>
</html>