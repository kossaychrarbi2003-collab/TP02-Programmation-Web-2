<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableau associatif</title>
</head>
<body>

    <h1>Exercice 9 - Gestion des notes</h1>

    <?php

    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    // Calcul de la somme et recherche de la meilleure note
    $somme = 0;
    $nombreValides = 0;
    $meilleureNote = 0;
    $meilleurEtudiant = "";

    foreach ($notes as $nom => $note) {

        $somme += $note;

        if ($note >= 10) {
            $nombreValides++;
        }

        if ($note > $meilleureNote) {
            $meilleureNote = $note;
            $meilleurEtudiant = $nom;
        }
    }

    $moyenne = $somme / count($notes);

    ?>

    <h2>1 et 2. Notes des étudiants</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>

        <?php foreach ($notes as $nom => $note): ?>

            <tr>
                <td><?= $nom ?></td>
                <td><?= $note ?></td>
                <td>
                    <?php
                    if ($note >= 10) {
                        echo "Validé";
                    } else {
                        echo "Non validé";
                    }
                    ?>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

    <h2>3. Somme et moyenne</h2>

    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>

    <h2>4. Nombre d'étudiants validés</h2>

    <p>Nombre d'étudiants ayant validé : <?= $nombreValides ?></p>

    <h2>5. Meilleure note</h2>

    <p>
        Meilleur étudiant : <?= $meilleurEtudiant ?>
        avec une note de <?= $meilleureNote ?>
    </p>

</body>
</html>