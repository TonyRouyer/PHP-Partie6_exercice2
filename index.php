<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 6 exercice 2</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&amp;firstname=Jean&amp;activate=true">Clique ici !</a>
        <?php 
            if ( isset($_GET['activate'])){
                //si firstname et lastname sont defini -> les recupère et affiche le echo
                if (isset($_GET['firstname']) && isset($_GET['lastname']) && (isset($_GET['age']))) {
                    echo '<p>' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' est bien présent !</p>';
                }else {
                    echo '<p>Un des paramètres n\'est pas defini</p>';
                }
            }
        ?>
    </body>
</html>