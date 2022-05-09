<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Condition et opérateurs de comparaison Cours 7</title>
    </head>
    <body>
        <?php
            //On pose une question et verifier si la réponse est vraie
            $reponse = 17;
            //Pour comparer ==,===, <,<=, >, >=, !=
            if($reponse === 17){
                //Alors
                echo "Egal";
            }else{
                //Sinon
                echo "Different";
            }

            $animal = "Chat";
            switch($animal){
                case 'Chat':
                    echo "Félin";
                    break;
            }
        ?>
    </body>
</html>