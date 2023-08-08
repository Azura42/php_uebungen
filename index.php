<!doctype html>
<html lang="en">

<head>
  <title>PHP-Übungen</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
   <div class="container">
    <div class="row">
        <h1>Meine ersten PHP Versuche</h1>
        <div class="col">
            <?php
                $br = "<br />";
                print("Hello World! <br />");
                echo "So geht Echo!<br />";
                $name = "Müller";
                print("Guten Morgen Herr $name!<br />");
                print('Guten Morgen Herr $name!<br />');
                var_dump($name);
                print("<br/>");
                $zahl1 = 12;
                $zahl2 = 23.2;
                $ergebnis = $zahl1 + $zahl2;
                var_dump($ergebnis);
                print("<br/>");
                $zahl3 = 2;
                $zahl4 = 10;
                $ergebnis1 = $zahl3 ** $zahl4;
                var_dump($ergebnis1);
                print("<br/>");
                // for ($i = 0; $i <= 40; $i+=2){
                //     print($i);
                //     print($br);
                // }

                // von 1 bis 10 Zählen, die 6 soll nicht ausgegeben werden 
                for ($i = 0; $i <= 10; $i++){
                    if ($i==6){
                        print("Igitt");
                        print($br);
                    }
                    else{
                        print($i);
                        print($br);
                    }
                }

                // $i = 0;                 // Initialisirunt
                // while ($i<=10){         // Bedinugn     
                //     print($i);
                //     print($br);
                //     $i = $i + 1;        // $i++ Iteration(Scheifen Variable weiterentwickelt)
                // }
            ?>
        </div>
    </div>
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