<?php
require '../bdd.php';
$page_base = '../';
$page_title = "Afficher les formations";
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require "$page_base/head.php"; ?>

<body>
    <?php require "$page_base/header.php"; ?>

    <main>
        <h2>MES FORMATIONS</h2>

            <ul>

                <?php
                foreach ($listeFormations as $formation): ?>
                    <li>
                        <a href="formations/show.php?id=<?= $formation['id'] ?>"><?= $formation['nom'] ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
    </main>

    <?php require "$page_base/footer.php"; ?>
</body>

</html>