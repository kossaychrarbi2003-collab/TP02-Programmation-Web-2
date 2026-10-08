<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Switch</title>
</head>
<body>

    <h1>Exercice 6 - Switch</h1>

    <?php

    $numeroMois = (int) date("m");

    switch ($numeroMois) {
        case 1:
            $nomMois = "Janvier";
            break;
        case 2:
            $nomMois = "Février";
            break;
        case 3:
            $nomMois = "Mars";
            break;
        case 4:
            $nomMois = "Avril";
            break;
        case 5:
            $nomMois = "Mai";
            break;
        case 6:
            $nomMois = "Juin";
            break;
        case 7:
            $nomMois = "Juillet";
            break;
        case 8:
            $nomMois = "Août";
            break;
        case 9:
            $nomMois = "Septembre";
            break;
        case 10:
            $nomMois = "Octobre";
            break;
        case 11:
            $nomMois = "Novembre";
            break;
        case 12:
            $nomMois = "Décembre";
            break;
        default:
            $nomMois = "Numéro de mois invalide";
    }

    echo "<p>Numéro du mois : " . $numeroMois . "</p>";
    echo "<p>Résultat : " . $nomMois . "</p>";

    ?>

</body>
</html>