<?php
// Fonction qui retourne la valeur des ses paramètres int initialisés
function myFunction($number1 = 10, $number2 = 10, $number3 = 10) {
  // Retourne la somme des paramètres de type int
  return $number1 + $number2 + $number3;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 8</title>
</head>
<body>
  <p>
    <?php
    // Affiche ce que la fonctionne retourne
    echo myFunction();
    ?>
  </p>
</body>
</html>
