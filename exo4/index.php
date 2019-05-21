<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>

<body>
    
    <a href="index.php?language=PHP&server=LAMP">Ouh Ouh</a>

<?php 

if (isset($_GET[language]) and ($_GET[server])) {
    echo 'On apprend à parler le' . ' ' . $_GET[language] . ' ' . 'sur le serveur' . ' ' . $_GET[server]; 
}

?>
    
</body>

</html>
