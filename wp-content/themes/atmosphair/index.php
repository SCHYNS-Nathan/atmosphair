<?php get_header(); ?>
<main class="layout" aria-labelledby="layoutTitle">
    <div class="main__header">
        <h2 class="main__title fade-in" aria-level="2" id="layoutTitle"><?= __('Pour un air plus','atmosph\'air') . "<br>" . __('sain au coeur de la ville !','atmosph\'air'); ?></h2>
    </div>
    <section class="main__stats" aria-labelledby="layoutStats">
        <h3 class="stats__title hidden" aria-level="3" id="layoutStats"><?= __('La polution en quelques chiffres','atmosph\'air'); ?></h3>
        <div class="stats__stat fade-in">
            <p class="stats__number">
                <strong><span id="number1" class="fade-in">50</span>%</strong>
            </p>
            <p class="stats__text">
                <?= __('de taux de ', 'atmosh\'air') . '<em>' . __('particule fine ','atmosp\'air') . '</em>' . __('ont été détecté dans les embouteillages des grandes villes belges en 2018.','atmosph\'air'); ?>
            </p>
        </div>
        <div class="stats__stat fade-in">
            <p class="stats__number">
                <strong>+<span id="number2" class="fade-in">33</span>%</strong>
            </p>
            <p class="stats__text">
                <?= __('d’augmentation de ', 'atmosh\'air') . '<em>' . __('la polution de l’air ', 'atmosh\'air') . '</em>' .  __('entre 2019 et 2020.','atmosph\'air'); ?>
            </p>
        </div>
        <div class="stats__stat fade-in">
            <p class="stats__number">
                <strong>x<span id="number3" class="fade-in">5</span></strong>
            </p>
            <p class="stats__text">
                <?= __('le nombre de personnes diagnostiquées avec des ', 'atmosh\'air') . '<em>' . __('maladies respiratoires ', 'atmosh\'air') . '</em>' . __('en 2021.','atmosph\'air'); ?>
            </p>
        </div>
    </section>
    <section class="main__presentation" aria-labelledby="layoutPresentation">
        <h3 class="presentation__title fade-in" aria-level="3" id="layoutPresentation"><?= __('L’air joue un rôle ', 'atmosh\'air') .  '<em>' . __('primordial ', 'atmosh\'air') . '</em>' . __('pour la vie telle que nous la connaissons sur terre.','atmosph\'air'); ?></h3>
        <p class="presentation__text fade-in">
            <?= __('Une mauvaise qualité de l’air a une incidence négative sur la santé humaine et sur l’environnement au sens large. Ses conséquences sont non seulement de nature sanitaire, écologique et économique mais aussi du point de vue humain :','atmosph\'air'); ?>
        </p>
        <p class="presentation__conclusion fade-in">
            <?= __('Disposer d’un ', 'atmosh\'air') . '<em>' . __('air de qualité ', 'atmosh\'air') . '</em>' . __('et ', 'atmosh\'air') . '<em>' . __('sain ', 'atmosh\'air') . '</em>' . __('doit être ', 'atmosh\'air') . '<em>' . __('un droit fondamental !', 'atmosh\'air') . '</em>'?>
        </p>
    </section>
    <section class="main__actors fade-in" aria-labelledby="layoutActors">
        <h3 class="actors__title hidden" aria-level="3" id="layoutActors"><?= __('Les acteurs du projet','atmosph\'air'); ?></h3>
        <img class="actors__image" src="<?= get_template_directory_uri(); ?>/src/images/actors.jpg" alt="<?= __('Du personnel de l\'ISSeP et des étudiant de la HEPL ayant travaillés sur Antilope','atmosph\'air'); ?>">
        <p class="actors__text">
            <?= __('Afin que ce droit soit respecté, la section Électronique & Systèmes Embarqués de la Haute École de la Province de Liège (HEPL) s’est alliée à l’Institut Scientifique de Service Publique (ISSeP) pour créer une gamme de capteurs d’air.','atmosph\'air'); ?>
        </p>
        <a class="actors__link" href="<?= site_url('a-propos/'); ?>"><?= __('Les acteurs du projet','atmosph\'air'); ?></a>
    </section>
    <section class="main__projects" aria-labelledby="layoutProjects">
        <div class="projects__container fade-in">
            <h3 class="projects__title" aria-level="3" id="layoutProjects"><?= __('Découvrez nos projets !','atmosph\'air'); ?></h3>
            <a class="projects__link" href="<?= site_url('projets/'); ?>"><?= __('Voir tous nos projets','atmosphair') ?></a>
        </div>
        <ul class="projects__list fade-in">
            <?php if(($modules = atmos_get_modules_for_index())->have_posts()): while($modules->have_posts()): $modules->the_post();
                include (__DIR__ . '/partials/module.php');
            endwhile; else:  ?>
            <?php endif; ?>
            <li class="projects__item fade-in">
                <div class="projects__project">
                    <div class="project__container">
                        <img class="project__icon" src="<?= get_template_directory_uri() . "/src/images/r_arrow.svg"; ?>" alt="->">
                        <a class="project__link" href="<?= site_url('/projets/') ?>"><?= __('Voir tous nos projets','atmosphair') ?></a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="main__articles" aria-labelledby="layoutArticles">
        <div class="articles__container fade-in">
            <h3 class="articles__title" aria-level="3" id="layoutArticles"><?= __('On parle de nous !','atmosphair') ?></h3>
            <a class="articles__link" href="<?= site_url('publications/'); ?>"><?= __('Voir toutes les publications','atmosphair') ?></a>
        </div>
        <ul class="articles__list fade-in">
            <?php if(($publications = atmos_get_publications_for_index())->have_posts()): while($publications->have_posts()): $publications->the_post();
                include (__DIR__ . '/partials/publication.php');
            endwhile; else:  ?>
            <?php endif; ?>
            <li class="main__item fade-in" style="background-image: url(<?= get_template_directory_uri(); ?>/src/images/more_articles.jpg)">
                <div>
                    <a class="article__link" href="<?= site_url('publications') ?>">
                        <?= __('Voir toutes les publications nous concernant','atmosphair') ?>
                    </a>
                </div>
            </li>
        </ul>
    </section>
    <section class="main__contact" aria-labelledby="layoutContact">
        <div class="contact__container">
            <h3 class="contact__title" aria-level="3" id="layoutContact"><?= __('Une question ?','atmosphair') . "<br>" .  __('Contactez-nous !','atmosphair'); ?></h3>
            <?= do_shortcode('[contact-form-7 id="244" title="Formulaire index"]') ?>
        </div>
    </section>
    <section class="main__socials" aria-labelledby="layoutSocials">
        <h3 class="socials__title fade-in" aria-level="3" id="layoutSocials"><?= __('Suivez-nous sur nos réseaux sociaux !','atmosphair'); ?></h3>
        <ul class="socials__list fade-in">
            <?php if(($socials = atmos_get_socials())->have_posts()): while($socials->have_posts()): $socials->the_post();
                include (__DIR__ . '/partials/social.php');
            endwhile; else:  ?>
                <p class="projects__error"><?= __('Il n\'y a pas de réseau social à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
            <?php endif; ?>
        </ul>
    </section>
</main>
<?php get_footer(); ?>