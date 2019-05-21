<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    
    <body>
        
    <a href="index.php?building=12&room=101">Appuie-moi</a>
    
    <?php
    
    if (isset($_GET[building]) and ($_GET[room])) {
        echo 'C\'est l\'immeuble' . ' ' . $_GET[building] . ' ' . 'chambre' . ' ' . $_GET[room];
    }
    
    ?>
        
    </body>
    
</html>
