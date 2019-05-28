<!DOCTYPE html>
<html lang="fr" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
    </head>

    <body>

        <a href="index.php?language=PHP&server=LAMP">Ouh Ouh</a>

        <?php
        if (isset($_GET['language']) and ( $_GET['server'])) {
            echo 'On apprend à parler le' . ' ' . $_GET['language'] . ' ' . 'sur le serveur' . ' ' . $_GET['server'];
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
