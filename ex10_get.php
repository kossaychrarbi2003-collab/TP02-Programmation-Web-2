<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement GET</title>
</head>
<body>

    <h1>Résultat GET</h1>

    <?php

    if (
        isset($_GET["nom"]) &&
        isset($_GET["prenom"]) &&
        isset($_GET["groupe"])
    ) {

        $nom = trim($_GET["nom"]);
        $prenom = trim($_GET["prenom"]);
        $groupe = trim($_GET["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {

            echo "<p>Erreur : tous les champs sont obligatoires.</p>";

        } else {

            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "<p>Bienvenue $prenom $nom, vous êtes dans le groupe $groupe.</p>";
        }

    } else {

        echo "<p>Veuillez utiliser le formulaire pour envoyer les données.</p>";

    }

    ?>

</body>
</html>