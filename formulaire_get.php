<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les formulaires en methode GET Cours 5</title>
    </head>
    <body>
        <form method="get">
            <div>
                <label for="nombre1"> Nombre1: </label>
                <input type="number" name="nb1" id="nombre1">
            </div>
            <div>
                <label for="nombre2"> Nombre2: </label>
                <input type="number" name="nb2" id="nombre2">
            </div>
            <button type="submit">Calculer</button>
        </form>

        <?php
            //http://localhost/php_projets/tuto_php/formulaire_get.php?nb1=124&nb2=36

           // echo "<pre>";
              //  var_dump($_GET["nb1"]);
            //echo "</pre>";

            $total = $_GET["nb1"] + $_GET["nb2"];
            echo "<p>Total: $total</p>";
        ?>
    </body>
</html>