<?php
// Déclaration d'une variable int et d'une variable string
$myNumber = 20;
$myString = 'windows';
// Fonction qui retourne un paramètre int et un paramètre string
function concatNumberString($number, $char) {
  // Retourne les deux paramètres concaténés
  return $number . ' ' . $char;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 5</title>
</head>
<body>
  <p>
    <?php
      // Affiche ce que la fonction retourne avec $myNumber et $myString comme paramètres
    echo concatNumberString($myNumber, $myString);
    ?>
  </p>
</body>
</html>
