<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les boucles For et Foreach Cours 8</title>
    </head>
    <body>
        <?php
        //pour incrementer
           // for ($nombre=0; $nombre <=100 ; $nombre +=5) { 
             //   echo "<p>$nombre</p>";
            //}

            //pour decrementer
            //for ($nombre=100; $nombre >=0 ; $nombre -=5) { 
                //echo "<p>$nombre</p>";
            //}

            $clients = [
                "ref1" =>[
                    "nom" => "Camara",
                    "prenom" => "Jean Claude"
                ],
                "ref2" =>[
                    "nom" => "Kaba",
                    "prenom" => "Mamadi"
                ]
            ];
           // echo sizeof($clients); afficher la taille du tableau

           //for ($nombre=0; $nombre < sizeof($clients); $nombre++) { 
              // echo "<p>$nombre</p>";
           //}

           foreach ($clients as $client) {
               echo "<p>{$client["prenom"]} {$client["nom"]}</p>";
           }

        ?>
    </body>
</html>