<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>

    <body>

        <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Click moi!</a>

        <?php
        if (isset($_GET['startDate']) AND ( $_GET['endDate'])) { // je vérifie que les 2 paramètres existent
            echo 'Ça commence le' . ' ' . $_GET['startDate'] . ' ' . 'et ça termine le' . ' ' . $_GET['endDate'];
        } else {
            echo 'Je n\'ai pas compris votre requête';
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
