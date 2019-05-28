<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>

    <body>

        <a href="index.php?building=12&room=101">Appuie-moi</a>

        <?php
        if (isset($_GET['building']) and ( $_GET['room'])) {
            echo 'C\'est l\'immeuble' . ' ' . $_GET['building'] . ' ' . 'chambre' . ' ' . $_GET['room'];
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
