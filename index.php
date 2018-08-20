<?php
    session_start();//Démarrage de la session

    $_SESSION['firstName'] = 'Fabien';//Déclaration session firstName
    $_SESSION['lastName'] = 'Lamotte';//Déclaration session lastName
    $_SESSION['age'] = 32;//Déclaration session age
?>
<!DOCTYPE html>
<html lang="foreach" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
      <p>
          <a href="secondPage.php" class="link">Cliquer ici</a><!--Lien vers la seconde page où seront transmis les valeurs sessions-->
      </p>
  </body>
</html>
