<?php
// Déclaration des variables
$varGender = '';
$varAge = 18;
// Fonction qui retourne un string selon les valeurs des paramètres
function myFunction($gender, $age) {
  $isFemale = false;
  // Si $age est supérieure ou égale à 18 et si $isFemale est faux
  if ($age >= 18 && $isFemale == false) {
    // Attribue la valeur 'homme' à la variable $gender
    $gender = 'homme';
    // retourne un string incluant la variable $gender
    $msg = 'Vous êtes un ' . $gender . ' et vous êtes majeur';
  }
  // Sinon si $a est inférieure à 18 et $isFemale est égale à faux
  elseif ($age < 18 && $isFemale == false) {
    // Attribue la valeur 'homme' à la variable $gender
    $gender = 'homme';
    // retourne un string incluant la variable $gender
    $msg = 'Vous êtes un ' . $gender . ' et vous êtes mineur';
  }
  // Sinon si $a supérieure ou égale à 18 et $isFemale est égale à true
  elseif ($age >= 18 && $isFemale == true) {
    // Attribue la valeur 'femme' à la variable $gender
    $gender = 'femme';
    // retourne un string incluant la variable $gender
    $msg = 'Vous êtes une ' . $gender . ' et vous êtes majeure';
  }
  else {
    // Attribue la valeur 'femme' à la variable $gender
    $gender = 'femme';
    // retourne un string incluant la variable $gender
    $msg = 'Vous êtes une ' . $gender . ' et vous êtes mineure';
  }
  return $msg;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    // Affche ce que retourne la fonction
    echo myFunction($varGender, $varAge);
    ?>
  </p>
</body>
</html>
