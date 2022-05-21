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

    <link rel="stylesheet" type="text/css" href="<?= get_template_directory_uri(); ?>/public/css/style.css">
    <script type="text/javascript" src="<?= atmos_mix('js/script.js') ?>" defer></script>
</head>
<body>
<h1 class="title hidden"><?= get_bloginfo('name'); ?></h1>
<header class="header">
    <h2 class="header__title hidden"><?= __('Menu de navigation principale', 'atmosph\'air'); ?></h2>
    <nav class="header__nav">
        <a class="header__link" href="<?= get_home_url(); ?>">
            <h3 class="header__title"><?= get_bloginfo('name') ?></h3>
            <svg class="header__logo" width="45" height="60" viewBox="0 0 138 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M132.698 130.593C133.257 130.3 133.683 130.087 134.269 129.768C135.468 131.311 136.639 132.855 137.997 134.612C129.449 141.105 120.954 147.519 112.406 154.013C111.127 152.336 109.956 150.792 108.704 149.142C109.104 148.717 109.476 148.344 109.769 148.025C108.518 146.215 107.319 144.512 106.121 142.808C104.15 140.041 104.47 137.22 107.16 135.144C111.82 131.551 116.507 128.011 121.194 124.472C123.857 122.476 126.786 122.902 128.863 125.536C130.142 127.186 131.34 128.81 132.698 130.593Z" fill="white"/>
                <path d="M116.748 121.437C115.549 119.388 114.164 117.445 112.833 115.476C111.794 113.932 110.729 112.415 109.69 110.872C108.971 109.807 108.252 108.743 107.507 107.678C106.335 105.948 105.137 104.218 103.965 102.488C103.512 101.823 103.033 101.158 102.554 100.519C101.621 99.2149 100.663 97.8842 99.7041 96.5802C99.0117 95.6221 98.3193 94.6374 97.6003 93.6793C96.8014 92.6148 96.0025 91.5769 95.2035 90.5389C95.0438 90.2994 94.8574 90.0865 94.6976 89.847C94.4313 88.8357 94.1916 87.7977 94.0052 86.7598C93.4459 83.7259 92.4606 80.8782 90.0106 79.0153C87.321 76.9661 85.7498 74.2249 84.1519 71.4571C80.8764 65.8683 75.9232 61.9295 70.3308 59.9601C70.2775 59.9069 70.2243 59.8536 70.171 59.8004C69.5851 59.0818 68.9993 58.3633 68.3868 57.6713C67.6677 56.8729 66.8955 56.1011 66.1498 55.3027C66.0966 55.2495 66.0699 55.2229 66.0167 55.1697C65.3509 54.3979 64.7384 53.5729 64.046 52.8277C63.114 51.843 62.1553 50.8849 61.1966 49.9268C61.1433 49.8736 61.1167 49.847 61.0634 49.7937C60.2911 48.9155 59.5721 47.984 58.7732 47.1324C57.8944 46.2009 56.8825 45.3759 56.0303 44.3646C54.8585 42.9807 53.3406 41.9428 52.1689 40.5323C51.1569 39.3347 49.8787 38.4032 48.8135 37.2322C47.4553 35.7152 45.8841 34.358 44.3928 32.9208C42.1825 30.7651 39.7591 28.8224 37.4423 26.7997C36.7765 26.2142 36.1374 25.6021 35.4716 25.0166C32.7287 22.6214 30.0124 20.2262 27.2695 17.831C27.1896 17.7512 27.0831 17.6713 26.9766 17.5915C25.9912 16.8729 24.9527 16.181 23.994 15.4358C22.9287 14.6374 21.9168 13.7592 20.9048 12.9341C20.8782 12.9075 20.8516 12.9075 20.8249 12.8809C19.7331 12.0825 18.6413 11.2841 17.576 10.4591C17.4695 10.3792 17.3896 10.2994 17.2831 10.2196C16.4576 9.66068 15.632 9.12841 14.8331 8.54292C13.9809 7.93081 13.182 7.23886 12.3299 6.60013C12.25 6.54691 12.1967 6.49368 12.1168 6.44046C11.4244 5.98803 10.7054 5.5356 10.013 5.05655C9.02769 4.39122 8.04237 3.67266 7.05705 3.00732C6.44455 2.5815 5.77879 2.23553 5.16629 1.80971C4.28749 1.25083 3.43532 0.638723 2.47662 0C1.62445 1.09115 0.825541 2.12908 0 3.19361C0.186413 3.37991 0.292935 3.5662 0.479347 3.67266C0.985324 4.04524 1.51793 4.39122 1.99728 4.79042C2.84945 5.45576 3.5951 6.22755 4.52716 6.83966C5.77879 7.66467 6.92389 8.7026 8.04237 9.71391C10.8386 12.2156 13.5815 14.7438 16.351 17.2455C16.9103 17.7512 17.363 18.3633 17.7625 19.002C17.869 19.1617 17.9489 19.3214 18.082 19.4278C19.7597 21.0512 21.4374 22.6747 23.0885 24.2981C23.8075 25.0166 24.5266 25.7618 25.1923 26.5336C25.8581 27.3054 26.4972 28.1038 27.163 28.8756C27.9086 29.7006 28.6809 30.499 29.4532 31.2974C29.5064 31.3506 29.5331 31.3772 29.5597 31.4305C30.0923 32.0958 30.5983 32.7611 31.1309 33.3999C31.9032 34.3313 32.7021 35.2096 33.4477 36.1411C34.1934 37.0459 34.8325 38.004 35.5782 38.9089C36.6168 40.1863 37.7086 41.4105 38.7472 42.7146C39.8657 44.0985 40.9309 45.4824 42.0227 46.8663C42.3156 47.2389 42.6352 47.6114 42.9015 48.0106C43.5673 48.9687 44.2064 49.9534 44.8455 50.9115C46.1504 52.8011 47.4819 54.6906 48.7868 56.6068C48.8933 56.7399 48.8667 56.9528 48.92 57.2455C48.4673 56.8729 48.1211 56.5536 47.7482 56.2874C47.0825 55.835 46.3901 55.4092 45.7243 54.9301C45.0319 54.4511 44.3928 53.8922 43.7004 53.4132C43.1678 53.014 42.6352 52.6414 42.076 52.2688C41.357 51.7898 40.6113 51.3373 39.9189 50.8317C39.2265 50.3526 38.5874 49.8204 37.895 49.3147C37.389 48.9421 36.8564 48.5961 36.3504 48.2236C35.6581 47.7445 34.939 47.3187 34.2466 46.8397C33.714 46.4671 33.1814 46.0945 32.5956 45.6953C31.4771 46.9195 30.4385 48.0373 29.4266 49.2083C29.2934 49.3413 29.2401 49.5808 29.2401 49.7937C29.2135 51.4704 29.3999 53.1204 29.826 54.7439C30.4651 57.1391 31.4238 59.4278 32.8086 61.477C33.0749 61.8763 33.3678 62.2488 33.6608 62.6214C34.4064 63.5529 35.1254 64.5376 35.951 65.3892C36.9629 66.4272 38.0814 67.3586 39.1733 68.3433C39.3597 68.503 39.5461 68.6627 39.7325 68.7957C40.0254 68.982 40.3184 69.1683 40.5847 69.3546C35.7912 76.1943 34.3798 85.2429 37.4955 93.5196C38.0282 94.9568 38.7472 95.6487 40.1586 95.7286C39.8124 97.2987 39.5727 98.8689 39.3863 100.439C39.0934 102.967 39.0667 105.549 38.9336 108.104C38.907 108.663 38.9336 109.275 38.8004 109.807C38.5341 110.925 38.3744 112.043 38.0015 113.134C37.3091 115.13 36.7765 117.179 36.164 119.202C36.1108 119.335 36.0841 119.494 36.0309 119.627C34.939 121.597 33.8738 123.566 32.782 125.509C32.4358 126.094 31.9831 126.627 31.6102 127.212C31.1309 127.931 30.7048 128.729 30.1189 129.341C29.2668 130.273 28.4679 131.231 27.5624 132.109L58.1607 160C58.1607 159.973 58.1873 159.947 58.1873 159.92C58.7466 158.536 59.1993 157.099 59.7053 155.662C59.9716 154.89 60.2113 154.118 60.4776 153.347C61.0368 151.75 61.7026 150.206 62.1819 148.609C63.9395 142.701 65.5906 136.766 67.0553 130.752C67.0819 130.645 67.1351 130.512 67.1351 130.406C67.4015 128.889 67.6411 127.372 67.9341 125.882C68.5199 122.768 69.1324 119.681 69.7716 116.593C69.8248 116.274 69.958 115.981 70.0911 115.556C71.6623 116.035 73.2069 116.514 74.7248 116.993C74.9112 117.099 75.1243 117.179 75.3639 117.206C75.8965 117.365 76.4291 117.552 76.9617 117.711C78.24 118.137 79.5183 118.643 80.7433 119.148C82.6074 119.92 84.4715 120.692 86.2824 121.544C88.4927 122.608 90.703 123.726 92.8867 124.844C94.0052 125.429 95.0704 126.068 96.1622 126.707C97.041 127.212 97.9465 127.691 98.7986 128.224C100.343 129.182 101.888 130.193 103.539 130.938C106.388 132.375 111.714 126.893 114.697 124.444C115.895 123.619 117.28 122.661 116.748 121.437ZM88.3595 92.4019C85.4568 95.5955 80.5302 95.8084 77.3346 92.9075C74.1389 90.0067 73.9259 85.0832 76.8286 81.8896C79.7313 78.6959 84.6579 78.483 87.8536 81.3839C91.0226 84.2848 91.2623 89.2349 88.3595 92.4019Z" fill="white"/>
            </svg>
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
