<?php
require '../bdd.php';
$page_base = '../';
$page_title = "Afficher les competences";
$page_styles = ['style-infos'];
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require '../head.php'; ?>

<body>
    <?php require $page_base . 'header.php'; ?>

    <main>
        <h2>MES COMPETENCES</h2>

            <ul>

                <?php
                foreach ($listeCompetences as $competences): ?>
                    <li>
                        <?= $competences['nom'] ?>
                    </li>
                <?php endforeach; ?>

            </ul>
    </main>

    <?php require $page_base . 'footer.php'; ?>
</body>

</html>