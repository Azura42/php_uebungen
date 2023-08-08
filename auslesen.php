<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auslesen des Formulars</title>
</head>
<body>
    <h1>Auslesen des Formulars</h1>
    <?php
        $zahl1 = $_POST["zahl1"];
        $zahl2 = $_POST["zahl2"];
        print("Sie haben $zahl1 und $zahl2 eingegeben.");

        $ergebnis = $zahl1 + $zahl2;

        print("<br />Ergebnis: $ergebnis");
    ?>
</body>
</html>