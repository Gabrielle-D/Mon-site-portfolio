<?php
require '../bdd.php';
$page_base = '../';
$page_title = "Afficher les passions";
$page_styles = ['style-infos'];
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require "$page_base/head.php"; ?>

<body>
    <?php require "$page_base/header.php"; ?>

    <main>
        <h2>MES PASSIONS</h2>

            <ul>

                <?php
                foreach ($listePassions as $passion): ?>
                    <li>
                        <a href="passions/show.php?id=<?= $passion['id'] ?>"><?= $passion['nom'] ?></a>
                    </li>
                <?php endforeach; ?>

            </ul>
    </main>

    <?php require "$page_base/footer.php"; ?>
</body>

</html>