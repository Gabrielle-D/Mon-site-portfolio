<?php
$id = $_GET['id'];
require '../bdd.php';

$passion = null;
foreach ($listePassions as $p){
    if ($p['id']==$id){
        $passion=$p;
        break;
    }
}
if(!$passion){
    header('location:../passions/index.php');
    exit();
}

$page_base = '../';
$page_title = "Afficher les passions";
$page_styles = ['style-infos'];
?>

<!DOCTYPE html>
<html lang='fr'>

<?php require './head.php'; ?>

<body>
    <?php require "./header.php"; ?>

    <main>

        <h2>Ma passion</h2>
        <?= $passion['nom'] ?>
            
    </main>

    <?php require "./footer.php"; ?>
</body>

</html>