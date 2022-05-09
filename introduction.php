<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Les bases en php</title>
    </head>
    <body>
        <!-- Commentaire HTML-->
        <?php
        //Introduction sur les bases
        //On ecrit hello word
        $nomPersonne = "Jean Claude";

            echo '<h1>Hello Word !! $nomPersonne</h1>';

            /*
            l'injection des variables fonctionne avec les "",
            pas avec les ''
            */
            echo "<p>Bonjour $nomPersonne, Comment ça va</p>";

            //Les types de variables
            //Entiers (Integer)
            $nombre1 = 85;

            //Decimaux (float)
            $nombre2 = 85.9;

            //Chaines de caractères
            $chaines = "Ceci est un texte";

            //booleen (boolean)
            $boleen = true; //false

            //Connaitre le contenu et le type d'une variable
            var_dump($nombre2);
        ?>
    </body>
</html>