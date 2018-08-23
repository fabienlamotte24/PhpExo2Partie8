<?php
    session_start();//Démarrage de la session
    $_SESSION['firstName'] = 'Fabien';//Déclaration session avec clé associative 'firstName' et valeur 'Fabien'
    $_SESSION['lastName'] = 'Lamotte';//Déclaration session avec clé associative 'lastName' et valeur 'Lamotte'
    $_SESSION['age'] = 26;//Déclaration session avec clé associative 'age' et valeur '26'
?>
<!DOCTYPE html>
<html lang="foreach" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Exercice 2</title>
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="offset-3 col-6 info">
                <!--Lien vers la seconde page où seront transmis les valeurs sessions-->
                <p>Cliquez <a href="secondPage.php" class="link1">ici</a>pour lire le contenu des cookies.</p>
              </div>
          </div>
      </div>
  </body>
</html>
