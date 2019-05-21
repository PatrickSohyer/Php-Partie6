<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2</title>
    </head>
    <body>
        
        <a href="index.php?lastname=Nemare&amp;firstname=Jean"> click sur moi </a>
        
         <?php 
         
         if (isset($_GET[firstname]) AND ($_GET[lastname]) AND ($_GET[age])) {
             echo "Bonjour" . ' ' . $_GET[firstname] . ' ' . $_GET[lastname] . ' ' . 'tu as' . ' ' . $_GET[age] . ' ' . 'ans!';
         } else {
             echo "Il vous manque le paramètre de l'age!";
         }
         
         ?>
        
        
    </body>
</html>
