<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Manipulation des chaines de caractère Cours 2</title>
    </head>
    <body>
        
        <?php
            $chaine = "Ceci est une chaine de caractère";
            //echo $chaine;

            //Afficher un caractère de la chaine

            //echo $chaine[3];

            //Modifier un caractère de la chaine
            //$chaine[0] = "F";
            //echo $chaine;

            //Extraire une partie de la chaine
            //echo substr($chaine, 0, 4);

            //var_dump(substr($chaine, 0, 4));//valeur negative pour patir de la fin

            //Remplacer une partie de la chaine
            //$chaine = str_ireplace('Ceci', 'Cela',$chaine);
            //var_dump($chaine);

            //Pour connaitre si une chaine contient un mot clé
            //var_dump(str_contains($chaine,'lapin')); php 8

            //pour eliminer les espaces dans une chaine de caractère
            var_dump(trim($chaine));
        ?>
    </body>
</html>