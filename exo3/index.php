<!DOCTYPE html>
<html lang="fr" dir="ltr">
    
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    
    <body>
        
        <a href="index.php?startDate=2/05/2016&amp;endDate=27/11/2016">Click moi!</a>
        
<?php

if (isset($_GET[startDate]) AND ($_GET[endDate])) {
    echo 'Ça commence le' . ' ' . $_GET[startDate] . ' ' . 'et ça termine le' . ' ' . $_GET[endDate];
} else {
    echo 'Je n\'ai pas compris votre requête';
}

?>
        
    </body>
    
</html>
