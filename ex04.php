<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - Types et conversions</title>
</head>
<body>

    <h1>Exercice 4 - Types et conversions</h1>

    <h2>1. Types et valeurs</h2>

    <pre>
<?php

$entier = 42;
$chaine = "42";
$flottant = 15.8;
$vrai = true;
$faux = false;
$nul = null;

var_dump($entier);
var_dump($chaine);
var_dump($flottant);
var_dump($vrai);
var_dump($faux);
var_dump($nul);

?>
    </pre>

    <h2>2. Conversions</h2>

    <pre>
<?php

// "42" en entier
$chaineEnEntier = (int) "42";
echo "Conversion de \"42\" en entier : ";
var_dump($chaineEnEntier);

// 15.8 en entier
$flottantEnEntier = (int) 15.8;
echo "Conversion de 15.8 en entier : ";
var_dump($flottantEnEntier);

// 42 en chaîne
$entierEnChaine = (string) 42;
echo "Conversion de 42 en chaîne : ";
var_dump($entierEnChaine);

?>
    </pre>

    <h2>3. Affichage de true et false</h2>

    <?php

    echo "<p>Avec echo : true = " . true . "</p>";
    echo "<p>Avec echo : false = " . false . "</p>";

    echo "<pre>";
    echo "Avec var_dump() : ";
    var_dump(true);
    var_dump(false);
    echo "</pre>";

    ?>

    <h2>4. Conversion en booléens</h2>

    <pre>
<?php

$boolZero = (bool) 0;
$boolStringZero = (bool) "0";
$boolPHP = (bool) "PHP";
$boolTableauVide = (bool) [];

echo "0 en booléen : ";
var_dump($boolZero);

echo "\"0\" en booléen : ";
var_dump($boolStringZero);

echo "\"PHP\" en booléen : ";
var_dump($boolPHP);

echo "Tableau vide en booléen : ";
var_dump($boolTableauVide);

?>
    </pre>

</body>
</html>