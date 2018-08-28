<?php
// Déclaration de deux variables de type string
$myVar1 = 'my';
$myVar2 = 'home';
// Fonction qui retourne deux paramètres de type string
function returnString($myString1, $myString2) {
  // Retourne les deux paramètres concaténés
  return $myString1 . ' ' . $myString2;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 2</title>
</head>
<body>
  <p>
    <?php
    // Affiche ce que la fonction retourne avec $myVar1 et $myVar2 comme paramètres
    echo returnString($myVar1, $myVar2);
    ?>
  </p>
</body>
</html>
