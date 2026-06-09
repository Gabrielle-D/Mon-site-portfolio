<?php
$id = $_GET['id'];
require '../bdd.php';

$formation = null;
foreach ($listeFormations as $f){
    if ($f['id']==$id){
        $formation=$f;
        break;
    }
}
if(!$formation){
    header('location:../formations/index.php');
    exit();
}

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
        
        <h2>Ma formation</h2>
        <?= $formation['nom'] ?>; <?= $formation['lieu'] ?>; <?= $formation['date'] ?>

    </main>

    <?php require $page_base . 'footer.php'; ?>
</body>

</html>