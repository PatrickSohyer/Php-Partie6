<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>

        <a href="index.php?lastname=Nemare&amp;firstname=Jean"> click sur moi</a>

        <?php
        if (isset($_GET['firstname']) AND ( $_GET['lastname'])) { // si les 2 paramètres existent
            echo "Bonjour" . ' ' . $_GET['firstname'] . ' ' . $_GET['lastname']; // j'envoie le message
        } else { // sinon 
            echo "Je ne comprends pas votre requête!"; // je ne comprends pas
        }
        ?>

        <p><a href="http://phpexercice/partie6/exo1/">Partie 6 exerice 1</a></p>
        <p><a href="http://phpexercice/partie6/exo2/">Partie 6 exerice 2</a></p>
        <p><a href="http://phpexercice/partie6/exo3/">Partie 6 exerice 3</a></p>
        <p><a href="http://phpexercice/partie6/exo4/">Partie 6 exerice 4</a></p>
        <p><a href="http://phpexercice/partie6/exo5/">Partie 6 exerice 5</a></p>
        <p><a href="http://phpexercice/partie6/exo6/">Partie 6 exerice 6</a></p>




    </body>
</html>
