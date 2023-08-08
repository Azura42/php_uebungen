<!doctype html>
<html lang="de">

<head>
  <title>Auslesen und überprüfen für Bibliotheken</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <?php
            if (isset($_POST["name"])) {
                print("Das war der recrsive Aufruf");
                $fehler = "";
                $zahl1 = $_POST["name"];
                var_dump($name);
                $zahl2 = $_POST["zahl2"];
                if ($name=="") {
                    $fehler .= "Sie sollten bei Zahl 1 schon etwas eintagen. <br />";
                }
                elseif ($name=="is_numeric") {
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
                    $ergebnis = $name + $zahl2;
                    $message = $ergebnis;
                }
                else {
                    $message = $fehler;
                }
            }
            else{
                print("Das war der Aufruf über die URL");
                $message = "";
                $name = "";
                $vorname = "";
                $plz = "";
                $ort = "";
            }
        ?>
  <div class="container header">
       <h1>Eintrag für die Bibliothek</h1>
  </div> 
  <div class="container main">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="<?php print($name); ?>">
        </div>
        <div class="mb-3">
            <label for="vorname" class="form-label">Vorname</label>
            <input type="text" class="form-control" id="vorname" placeholder="Vorname" name="Vorname" value="<?php print($vorname); ?>">
        </div>
        <div class="mb-3">
            <label for="plz" class="form-label">Postleitzahl</label>
            <input type="number" class="form-control" id="plz" placeholder="PLZ" name="plz" value="<?php print($plz); ?>">
        </div>
        <div class="mb-3">
            <label for="ort" class="form-label">Wohnort</label>
            <input type="text" class="form-control" id="ort" placeholder="ORT" name="ort" value="<?php print($ort); ?>">
        </div>
        
        <!-- <form method="POST">
                <label for="zahl1">Zahl1</label><br />
                <input type="number" id="zahl1" name="zahl1" value="<?php print($zahl1); ?>" /><br />
                <br />
                <label for="zahl2">Zahl2</label><br />
                <input type="number" id="zahl2" name="zahl2" value="<?php print($zahl2); ?>" /><br />
                <br /> -->
                <button type="submit">Abschicken</button>
            </form>
            <p>
                <?php print($message); ?>
            </p>
        <!-- 
        Aufgabe:

        Name 
        Vorname
        PLZ
        ORT
        Adresse
        E-Mail 
        Geburtsdatum -->
  </div>
  <div class="container footer">

  </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>