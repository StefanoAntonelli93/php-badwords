<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form-get</title>
</head>
<body>
    <form action="saluta.php" method='GET'>
        <div>
            <!-- id si lega al for -->
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <!-- id si lega al for -->
            <label for="cognome">Cognome</label>
            <input type="text" name="cognome" id="cognome">
        </div>
        <div>
            <button>
                Invia il form
            </button>
        </div>
    </form>
</body>
</html>