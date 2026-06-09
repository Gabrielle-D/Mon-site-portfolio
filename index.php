<?php
require 'liste.php';
$page_base = './';
$page_title = "Portfolio Gabrielle";
$page_styles = ['style-index'];
?>

<!DOCTYPE html>
<html lang="fr">

<?php require "$page_base/head.php"; ?>

<body>

    <?php require "$page_base/header.php"; ?>

    <main>

        <section id="moi" class="contenu">
            <h2>A PROPOS DE MOI</h2>

            <figure>
                <img src="images/photo-moi.webp" alt="Photo de profil">
                <figcaption>Moi</figcaption>
            </figure>

            <p>Je suis étudiante en DEUST WMI, je m'appelle Gabrielle Dewevre, j'ai 23 ans et j'habite au Nord
                    Pas-de-Calais!
            </p>
        </section>


        <section id="mespassions" class="contenu">
            <h2>MES PASSIONS</h2>
            <ul>

                <?php
                foreach ($listePassions as $passions): ?>
                    <li>
                        <?= $passions['nom'] ?>
                    </li>
                <?php endforeach; ?>

            </ul>
        </section>


        <section id="formation" class="contenu">
            <h2>MES FORMATIONS</h2>
                <ul>

                    <?php
                    foreach ($listeFormations as $formations): ?>
                        <li>
                            <?= $formations['nom'] ?>; <?= $formations['lieu'] ?>; <?= $formations['date'] ?>
                        </li>

                    <?php endforeach; ?>

                </ul>
        </section>


        <section id="competences" class="contenu">
            <h2>MES COMPETENCES</h2>
            <ul>

                <?php
                foreach ($listeCompetences as $competences): ?>
                    <li>
                        <?= $competences['nom'] ?>
                    </li>

                <?php endforeach; ?>

            </ul>
        </section>


        <section id="contacts" class="contenu">
            <h2>MES CONTACTS</h2>
            <ul>

                <li>Téléphone : 06 40 18 81 08</li>
                <li>Email : gabrielle.dewevre@gmail.com</li>
                <li>LinkedIn : www.linkedin.com/in/gabrielle-dewevre-793478330</li>

            </ul>
        </section>

    </main>

    <?php require $page_base . 'footer.php'; ?>
</body>

</html>