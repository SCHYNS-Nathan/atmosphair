<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="author" content="Nathan Schyns">
    <meta name="description" content="Atmosph'air est un site présentant les projets de la section Électronique et Systèmes Embarqués de la Haute École de la Province de Liège.">

    <meta property="og:title" content="Atmosph'air">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/images/">
    <meta property="og:description" content="Atmosph'air est un site présentant les projets de la section Électronique et Systèmes Embarqués de la Haute École de la Province de Liège.">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">

    <link rel="icon" type="image/x-icon" href="<?= get_template_directory_uri(); ?>/images/favicon/favicon.ico">
    <title><?= wp_title('|', false, 'right') . get_bloginfo('name') ?></title>

    <link rel="stylesheet" type="text/css" href="<?= atmos_mix('/css/style.css') ?>">
    <script type="text/javascript" src="<?= atmos_mix('js/script.js') ?>" defer></script>
</head>
<body>
    <h1 class="title"><?= get_bloginfo('name'); ?></h1>
    <header class="header">
        <h2 class="header__title"><?= __('Menu de navigation principale', 'atmosph\'air'); ?></h2>
        <nav class="header__nav">
            <a class="header__link" href="<?= get_home_url(); ?>">
                <h3 class="header__title"><?= get_bloginfo('name') ?></h3>
                <img class="header__logo" src="<?= get_template_directory_uri(); ?>/images/antilope.svg" alt="<?= __('Le logo d\'Atmosph\'air, une antilope avec un masque à gaz.', 'atmosph\'air') ?>">
            </a>
            <ul class="header__list">
                <?php foreach(atmos_get_menu_items('primary') as $link): ?>
                    <li class="header__item">
                        <a class="header__link" href="<?= $link->url; ?> <?= $link->title ? ' title="'.$link->title.'"' : ''; ?>">
                            <?= __($link->label, 'atmosph\'air'); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
