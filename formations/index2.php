<?php
$db = require '../bdd.php';
$sql = 'SELECT * FROM formations';
$statement = $db->prepare($sql);
$statement->execute();
$listeFormations = $statement->fetchAll();

$page_base = '../';
$page_title = "Afficher les formations";
$page_styles = ['style-infos'];
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require '../head.php'; ?>

<body>
    <?php require $page_base . 'header.php'; ?>

    <main>
        <h2>Mes formations</h2>

        <ul>

            <?php
            foreach ($listeFormations as $formation): ?>
                <li>
                <a href="formations/show.php?id=<?= $formation['id'] ?>"><?= $formation['nom'] ?>; <?= $formation['lieu'] ?>; <?= $formation['date'] ?></a>
                </li>
            <?php endforeach; ?>

        </ul>
    </main>

    <?php require $page_base . 'footer.php'; ?>
</body>

</html>