<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipulation des nombres</title>
    </head>
    <body>
        <!-- Commentaire HTML-->
        <?php
            $nombre1 = 14;
            $nombre2 = 85;

            //Addition
            $resultat = $nombre1 + $nombre2;

            //Soustraction
            $resultat = $nombre1 - $nombre2;

            //Multiplication
            $resultat = $nombre1 * $nombre2;

            //Division
            $resultat = $nombre1 / $nombre2;

            //Calcul "Complexe"
            $resultat = ($nombre1 + $nombre2) / 5;

            //Modulo

            $resultat = $nombre2 % $nombre1;

            //9 est-il multiple de 3
            var_dump(9%3);

            //Incrementer (ajouter 1)
            $nombre1 = $nombre1 + 1;
            var_dump($nombre1);

            $nombre1 += 1;
            var_dump($nombre1);

            $nombre1++;
            var_dump($nombre1);
        ?>
    </body>
</html>