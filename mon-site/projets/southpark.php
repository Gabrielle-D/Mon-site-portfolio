<?php
$page_base = '../';
$page_title = "South Park";
$page_styles = ['style-index'];
$page_menu = "../menu-index.php";
?>
<!DOCTYPE html>
<html lang="fr">

<?php require "$page_base/head.php"; ?>

<body>

    <?php require "$page_base/header-projets.php"; ?>

    <main>

        <section class="contenu">
            <h2>Run run run!</h2>

            <figure class="sp">
                <img src="images/South-Park.webp" alt="Premier projet d'Illustrator">
                <figcaption></figcaption>
            </figure>

            <p>Description :</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            <ul>
                <li>Objectif :</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</li>
            </ul>
        </section>

    </main>


    <?php require "$page_base/footer.php"; ?>

</body>

</html>