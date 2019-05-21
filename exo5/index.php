<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Exercice 5</title>
</head>

<body>

    <a href="index.php?week=12">TchouTchou</a>
    
    <?php
    
    if (isset($_GET[week])) {
        echo 'C\'est la semaine' . ' ' . $_GET[week];
    }
    
    ?>
    
</body>

</html>
