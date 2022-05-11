<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="author" content="">
    <meta name="description" content="">

    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="MobileOptimized" content="width">

    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <title><?= wp_title('|', false, 'right') . get_bloginfo('name') ?></title>

    <link rel="stylesheet" type="text/css" href="<?= dw_mix('css/style.css') ?>">
    <script type="text/javascript" src="<?= dw_mix('js/script.js') ?>" defer></script>
</head>
<body>
    <h1 class="title"><?= get_bloginfo('name') ?></h1>
    <header class="header">
        <h2 class="header__title"><?= __('Menu de navigation principale', 'atmosph\'air'); ?></h2>
        <nav class="header__nav">
            <a class="header__link" href="<?= get_home_url(); ?>">
                <h3 class="header__title"><?= get_bloginfo('name') ?></h3>
                <img class="header__logo" src="" alt="<?= __('Le logo d\'Atmosph\'air, une antilope avec un masque à gaz.', 'atmosph\'air') ?>">
            </a>
            <ul class="header__list">
                <?php foreach(atmosphair_get_menu_items('primary') as $link): ?>
                    <li class="header__item">
                        <a class="header__link" href="<?= $link->url; ?> <?= $link->title ? ' title="'.$link->title.'"' : ''; ?>">
                            <?= __($link->label, 'atmosph\'air'); ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
