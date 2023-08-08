<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Formular</title>
</head>
<body>
    <h1>Mein erstes Formular</h1>
    <form action="auslesen.php" method="POST">
        <label for="zahl1">Zahl1</label><br />
        <input type="number" id="zahl1" name="zahl1" /><br />
        <label for="zahl2">Zahl2</label><br />
        <input type="number" id="zahl2" name="zahl2" /><br />
        <button type="submit">Abschicken</button>
    </form>  
</body>
</html>