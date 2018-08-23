<?php
session_start();//Démarrage de la session
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
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
              <div class="offset-3 col-6 givenInfo">
                <?php if(!empty($_SESSION['firstName'])){ ?>
                  <p>Prénom : <?= $_SESSION['firstName'] ?></p> <?php } ?>
                <?php if(!empty($_SESSION['lastName'])){ ?>
                  <p>Nom de famille : <?= $_SESSION['lastName'] ?></p> <?php } ?>
                <?php if(!empty($_SESSION['age'])){ ?>
                  <p>Age : <?= $_SESSION['age'] ?></p> <?php } ?>
                  
              </div>
          </div>
      </div>
  </body>
</html>
