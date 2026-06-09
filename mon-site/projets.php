<?php
$page_base = './';
$page_title = "Projets";
$page_styles = ['style-index'];
?>
<!DOCTYPE html>
<html lang="fr">

<?php require "$page_base/head.php"; ?>

<body>


    <?php require "$page_base/header-projets.php"; ?>


    <main>
        <section class="contenu">

            <h2>Liste de projets</h2>
            <?php $card = ['href' => 'projets/affichejapon.php', 'src' => 'images/affiche-japon.webp', 'alt' => "Projet de Photoshop"] ?>
            <?php require $page_base . 'components/card.php' ?>
            
            <?php $card = ['href' => 'projets/southpark.php', 'src' => 'images/South-Park.webp', 'alt' => "Projet d'Illustrator"] ?>
            <?php require $page_base . 'components/card.php' ?>

        </section>
    </main>


    <?php require "$page_base/footer.php"; ?>

</body>

</html>