<?php
// definisco variabili
$bad_word = $_GET['bad_word'];
$text = $_GET['song_text'];
// lunghezza text
$lunghezza = strlen($text);
// text censured
// rimpiazzo parola scritta nel input text con ***
$text_censured = str_replace($bad_word, "***", $text);
// lunghezza text censured
$lunghezza_censured = strlen($text_censured);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form GET</title>
</head>

<body>
    <h1>Venom - Eminem</h1>
    <h2>Testo "Venom":</h2>
    <p><?php echo $text; ?></p>
    <p>Lunghezza testo: <?php echo $lunghezza ?> caratteri.</p>
    </div>
    <h3>Parola da censurare: "<?php echo $bad_word ?>"</h3>
    <h2>Testo censurato</h2>
    <p><?php echo $text_censured ?> </p>
    <p>Lunghezza testo: <?php echo $lunghezza_censured ?> caratteri.</p>
</body>

</html>