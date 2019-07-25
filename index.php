<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Exercice 6</title>
</head>
<body>
  <h1>Créer un tableau avec les jours de la semaine en utilisant une boucle</h1>
  <?php
  $week = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
  foreach ($week as $day) { ?>
    <p> <?= $day ?> </p>
  <?php } ?>
</body>
</html>
