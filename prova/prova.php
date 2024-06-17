prova php 

<?php

// variabili

# varibili

/* 

commento
varibili
su
più
righe

*/


$first_name='Stefano';
$last_name='Antonelli';
$age=30;
$isOld=false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prima pagina PHP</title>
</head>
<body>
    <h1>Ciao, sono PHP </h1>
    <!-- concatenazione in php avviene con il '.' -->
    <p>il mio nome è <?php echo $first_name ?> e gioco a <?php echo 'The Wither 3' . '!' ?></p>
    <p>il mio cognome è <?php echo $last_name ?></p>
    <p>la mia età è <?php echo $age ?></p>
</body>
</html>
