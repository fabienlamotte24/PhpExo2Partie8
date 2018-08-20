<?php
session_start();//Démarrage de la session
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice2</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <p><!--Affichage avec phrase concaténée comprenant les paramètres de la page index.php-->
      Je m'appelle <?php echo $_SESSION['firstName'] . ' ' . $_SESSION['lastName']; ?> et j'ai <?php echo $_SESSION['age']; ?> ans  !
      <a href="index.php" class="link">Retour</a>
    </p>
  </body>
</html>
