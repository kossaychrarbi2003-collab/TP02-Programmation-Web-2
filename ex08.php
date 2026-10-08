<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles et contrôle</title>
</head>
<body>

    <h1>Exercice 8 - Boucles et contrôle des itérations</h1>

    <!-- Partie 1 -->
    <section>
        <h2>1. Nombres pairs de 0 à 20</h2>

        <?php

        $nombre = 0;

        while ($nombre <= 20) {

            if ($nombre == 10) {
                echo "<strong>$nombre</strong><br>";
            } else {
                echo $nombre . "<br>";
            }

            $nombre += 2;
        }

        ?>

    </section>

    <!-- Partie 2 -->
    <section>
        <h2>2. while et do-while</h2>

        <?php

        // Boucle while
        $compteur = 5;
        $executionsWhile = 0;

        while ($compteur < 5) {
            $executionsWhile++;
            $compteur++;
        }

        echo "<p>Nombre d'exécutions de while : " . $executionsWhile . "</p>";

        // Boucle do-while
        $compteur = 5;
        $executionsDoWhile = 0;

        do {
            $executionsDoWhile++;
            $compteur++;
        } while ($compteur < 5);

        echo "<p>Nombre d'exécutions de do-while : " . $executionsDoWhile . "</p>";

        ?>

    </section>

    <!-- Partie 3 -->
    <section>
        <h2>3. Continue et break</h2>

        <?php

        for ($i = 1; $i <= 20; $i++) {

            if ($i >= 16) {
                break;
            }

            if ($i % 3 == 0) {
                continue;
            }

            echo $i . "<br>";
        }

        ?>

    </section>
</body>
</html>