<?php
// Déclaration des variables
$myFirstname = 'John';
$myLastname = 'Doe';
$myAge = 58;
// Fonction qui retourne un string incluant les paramètres
function returnDescription($lastname, $firstname, $age) {
  // Retourne un string avec les paramètres concaténés
  return 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . ' ans.';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 6</title>
</head>
<body>
  <p>
    <?php
    // Affiche ce que la fonction retourne avec $myFirstName, $myLastname et $myAge comme paramètres
    echo returnDescription($myLastname, $myFirstname, $myAge);
    ?>
  </p>
</body>
</html>
