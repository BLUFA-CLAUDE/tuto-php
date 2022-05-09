<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipulation des tableaux Cours 4</title>
    </head>
    <body>
        <!-- Commentaire HTML-->
        <?php
            echo "<pre>";
                //Declarer un tableau
                $tableau = ["Bonjour", 15, true, 58.15, "Velo", false];

                //Ajouter des valeurs
                //A la fin (push)
                //array_push($tableau,"Fin");
                $tableau[] = "Fin";

                //Au debut (unshif)
                array_unshift($tableau, "Début");

                //Supprimer des valeurs
                // A la fin (pop)
                $valeur = array_pop($tableau);

                //Au debut (shift)
                $valeur = array_shift($tableau);

                //Diviser le tableau en plusieures parties de 2 valeurs
                $tableau2 = array_chunk($tableau,2,true);

                //Mélanger un tableau de façon aleatoire
                shuffle($tableau);

                //Tableau associatif
                $tableauMulti = [
                    "nom" => "Camara",
                    "prenom" => "Jean Claude",
                    "Age" => 45
                ];

                //Tableau Multi
                $tableauMulti = [
                    0 => [
                        "nom" => "Camara",
                        "prenom" => "Jean Claude",
                        "Age" => 45
                    ],
                    1 => [
                        "nom" => "Kaba",
                        "prenom" => "Mamadi",
                        "Age" => 14
                    ]
                ];
                var_dump($tableauMulti);
                //echo $valeur;
            echo "</pre>";
        ?>
    </body>
</html>