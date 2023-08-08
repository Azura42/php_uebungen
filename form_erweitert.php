<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mein Formular</title>
</head>
<body>
    <?php
        if (isset($_POST["zahl1"])) {
            print("Das war der recrsive Aufruf");
            $fehler = "";
            $zahl1 = $_POST["zahl1"];
            var_dump($zahl1);
            $zahl2 = $_POST["zahl2"];
            if ($zahl1=="") {
                $fehler .= "Sie sollten bei Zahl 1 schon etwas eintagen. <br />";
            }
            elseif ($zahl1<0) {
                $fehler .= "Zahl1 sollten größer oder gleich Null sein. <br />";
            }
            if ($zahl2=="") {
                $fehler .= "Sie sollten bei Zahl 2 schon etwas eintagen.. <br />";
            }
            elseif ($zahl2<0) {
                $fehler .= "Zahl2 sollten größer oder gleich Null sein. <br />";
            }
            if ($zahl1>10) {
                $fehler .= "Zahl1 sollten kleiner oder gleich 10 sein. <br />";
            }
            if ($zahl2>10) {
                $fehler .= "Zahl2 sollten kleiner oder gleich 10 sein. <br />";
            }
            
           
            # Berechnung
            if ($fehler == "") {
                # Sehr gut , keine Fehler
                $ergebnis = $zahl1 * $zahl2;
                $message = $ergebnis;
            }
            else {
                $message = $fehler;
            }
        }
        else{
            print("Das war der Aufruf über die URL");
            $message = "";
            $zahl1 = "";
            $zahl2 = "";
        }
    ?>
    <h1>Das kleine Einmaleins</h1>
    <form method="POST">
        <label for="zahl1">Zahl1</label><br />
        <input type="number" id="zahl1" name="zahl1" value="<?php print($zahl1); ?>" /><br />
        <br />
        <label for="zahl2">Zahl2</label><br />
        <input type="number" id="zahl2" name="zahl2" value="<?php print($zahl2); ?>" /><br />
        <br />
        <button type="submit">Abschicken</button>
    </form>
    <p>
        <?php print($message); ?>
    </p>
</body>
</html>