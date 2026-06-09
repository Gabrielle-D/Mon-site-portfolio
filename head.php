<head>
    <base href="<?= $page_base ?? './' ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/colors.css">

    <title><?=  $page_title ?? 'Accueil' ?></title>
    <?php
    foreach (($page_styles ?? []) as $style) {
        echo "    <link rel='stylesheet' href='css/{$style}.css'>\n";
    }
    ?>
</head>