<?php
// Déclaration de deux variables de types int
$myNumber1 = 25;
$myNumber2 = 20;
// Fonction qui retourne des strings selon les valeurs des paramètres
function compareNumber($number1, $number2) {
  // Si le paramètre $number1 est supérieur au paramètre $number2
  if ($number1 > $number2) {
    // retourne le message suivant
    $msg = 'Le premier nombre est plus grand';
  }
  // Sinon si le paramètre $number1 est inférieur au paramètre $number2
  elseif ($number1 < $number2) {
    // retourne le message suivant
    $msg = 'Le premier nombre est plus petit';
  }
  // Sinon
  else {
    // retourne le message suivant
    $msg = 'Les deux nombres sont identiques';
  }
  return $msg;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    // Affiche ce que la fonction retourne avec $myNumber1 et $myNumber2 comme paramètres
    echo compareNumber($myNumber1, $myNumber2);
    ?>
  </p>
</body>
</html>
