<?php
$id = $_GET['id'];
require './bdd.php';

$competence = null;
foreach ($listeCompetences as $c){
    if ($c['id']==$id){
        $competence=$c;
        break;
    }
}
if(!$competence){
    header('location:../competences/index.php');
    exit();
}

$page_base = './';
$page_title = "Afficher les compétences";
$page_styles = ['style-infos'];
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require "$page_base/head.php"; ?>

<body>
    <?php require "$page_base/header.php"; ?>

    <main>

        <h2>Ma compétence</h2>
        <?= $competence['nom'] ?>
            
    </main>

    <?php require "$page_base/footer.php"; ?>
</body>

</html>