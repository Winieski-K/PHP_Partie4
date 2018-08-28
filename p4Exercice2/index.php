<?php
// Déclaration d'une variable de type string
$myVar = 'home';
// Fonction qui retourne un paramètre de type string
function returnString($myString) {
  // Retourne la valeur du paramètre $myString
  return $myString;
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
    // Affiche ce que la fonction retourne avec $myVar comme paramètre
    echo returnString($myVar);
    ?>
  </p>
</body>
</html>
