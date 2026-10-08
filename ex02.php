<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - Variables</title>
</head>
<body>

    <h1>Exercice 2 - Variables</h1>

    <?php

    // Déclaration des variables
    $nom = "CHRARBI";
    $prenom = "Kossay";
    $age = 23;
    $formation = "Informatique Appliquée";

    // Concaténation avec l'opérateur .
    $presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ".";

    // Ajouter une phrase avec .=
    $presentation .= " J'apprends PHP.";

    echo "<p>$presentation</p>";

    // PHP est sensible à la casse
    $note = 12;
    $Note = 16;

    echo "<p>Note : " . $note . "</p>";
    echo "<p>Note : " . $Note . "</p>";

    ?>

</body>
</html>