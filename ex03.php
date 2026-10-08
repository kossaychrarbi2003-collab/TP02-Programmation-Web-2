<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - Constantes et calculs</title>
</head>
<body>

    <h1>Exercice 3 - Constantes et calculs</h1>

    <?php

    // Définition des constantes
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    // Données
    $prixUnitaireHT = 60;
    $quantite = 3;

    // Calcul du total HT
    $totalHT = $prixUnitaireHT * $quantite;

    // Calcul de la TVA
    $montantTVA = $totalHT * TAUX_TVA / 100;

    // Calcul du total TTC
    $totalTTC = $totalHT + $montantTVA;

    // Ajouter les frais de livraison
    $totalFinal = $totalTTC;
    $totalFinal += 15;

    ?>

    <h2>Récapitulatif</h2>

    <p>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></p>
    <p>Quantité : <?= $quantite ?></p>
    <p>Total HT : <?= $totalHT . " " . DEVISE ?></p>
    <p>TVA (<?= TAUX_TVA ?>%) : <?= $montantTVA . " " . DEVISE ?></p>
    <p>Total TTC : <?= $totalTTC . " " . DEVISE ?></p>
    <p>Frais de livraison : 15 <?= DEVISE ?></p>
    <p><strong>Montant final : <?= $totalFinal . " " . DEVISE ?></strong></p>

    <?php

    // Vérifier l'existence de la constante
    if (defined("TAUX_TVA")) {
        echo "<p>La constante TAUX_TVA est bien définie.</p>";
    }

    ?>

</body>
</html>