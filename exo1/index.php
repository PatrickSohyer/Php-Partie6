<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1</title>
    </head>
    <body>
        
        <a href="index.php?lastname=Nemare&amp;firstname=Jean"> click sur moi </a>
        
         <?php 
         
         if (isset($_GET[firstname]) AND ($_GET[lastname])) {
             echo "Bonjour" . ' ' . $_GET[firstname] . ' ' . $_GET[lastname];
         } else {
             echo "Je ne comprends pas votre requête!";
         }
         
         ?>
          
        
    </body>
</html>
