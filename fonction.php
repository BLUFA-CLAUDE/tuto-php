<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipuler les fonctions Cours 6</title>
    </head>
    <body>
        <?php
        /**
         * permet de calculer la somme de deux nombre
         *
         * @param Integer $nb1
         * @param Integer $nb2
         * @return void
         */
           function additionner($nb1, $nb2){
               echo $nb1 + $nb2;
           }

           function saluer($prenom, $nom, $salutation="Hello"){
               echo "$salutation $prenom $nom";
           }
        ?>

        <p><?php additionner(12,8); ?></p>
        <p><?php additionner(25,14); ?></p>

        <h1><?php saluer("Jean Claude", "Camara")?></h1>
    </body>
</html>