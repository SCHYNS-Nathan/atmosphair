<?php get_header(); ?>
<main class="layout">
    <div class="main__header">
        <h2 class="main__title"><?= __('Pour un air plus','atmosph\'air') . "<br>" . __('sain au coeur de la ville !','atmosph\'air'); ?></h2>
    </div>
    <section class="main__stats">
        <h3 class="stats__title hidden"><?= __('La polution en quelques chiffres','atmosph\'air'); ?></h3>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>50%</strong>
            </p>
            <p class="stats__text">
                <?= __('de taux de ', 'atmosh\'air') . '<em>' . __('particule fine ','atmosp\'air') . '</em>' . __('ont été détecté dans les embouteillages des grandes villes belges en 2018.','atmosph\'air'); ?>
            </p>
        </div>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>+33%</strong>
            </p>
            <p class="stats__text">
                <?= __('d’augmentation de ', 'atmosh\'air') . '<em>' . __('la polution de l’air ', 'atmosh\'air') . '</em>' .  __('entre 2019 et 2020.','atmosph\'air'); ?>
            </p>
        </div>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>x5</strong>
            </p>
            <p class="stats__text">
                <?= __('le nombre de personnes diagnostiquées avec des ', 'atmosh\'air') . '<em>' . __('maladies respiratoires ', 'atmosh\'air') . '</em>' . __('en 2021.','atmosph\'air'); ?>
            </p>
        </div>
    </section>
    <section class="main__presentation">
        <h3 class="presentation__title"><?= __('L’air joue un rôle ', 'atmosh\'air') .  '<em>' . __('primordial ', 'atmosh\'air') . '</em>' . __('pour la vie telle que nous la connaissons sur terre.','atmosph\'air'); ?></h3>
        <p class="presentation__text">
            <?= __('Une mauvaise qualité de l’air a une incidence négative sur la santé humaine et sur l’environnement au sens large. Ses conséquences sont non seulement de nature sanitaire, écologique et économique mais aussi du point de vue humain :','atmosph\'air'); ?>
        </p>
        <p class="presentation__conclusion">
            <?= __('Disposer d’un ', 'atmosh\'air') . '<em>' . __('air de qualité ', 'atmosh\'air') . '</em>' . __('et ', 'atmosh\'air') . '<em>' . __('sain ', 'atmosh\'air') . '</em>' . __('doit être ', 'atmosh\'air') . '<em>' . __('un droit fondamental !', 'atmosh\'air') . '</em>'?>
        </p>
    </section>
    <section class="main__actors">
        <h3 class="actors__title hidden"><?= __('Les acteurs du projet','atmosph\'air'); ?></h3>
        <img class="actors__image" src="<?= get_template_directory_uri(); ?>/images/actors.jpg" alt="<?= __('Du personnel de l\'ISSeP et des étudiant de la HEPL ayant travaillés sur Antilope','atmosph\'air'); ?>">
        <p class="actors__text">
            <?= __('Afin que ce droit soit respecté, la section Électronique & Systèmes Embarqués de la Haute École de la Province de Liège (HEPL) s’est alliée à l’Institut Scientifique de Service Publique (ISSeP) pour créer une gamme de capteurs d’air.','atmosph\'air'); ?>
        </p>
        <a class="actors__link" href="<?= site_url('a-propos/'); ?>"><?= __('Les acteurs du projet','atmosph\'air'); ?></a>
    </section>
    <section class="main__projects">
        <div class="projects__container">
            <h3 class="projects__title"><?= __('Découvrez nos projets !','atmosph\'air'); ?></h3>
            <a class="projects__link" href="<?= site_url('projets/'); ?>"><?= __('Voir tous nos projets','atmosphair') ?></a>
        </div>
        <ul class="projects__list">
            <?php if(($modules = atmos_get_modules_for_index(5))->have_posts()): while($modules->have_posts()): $modules->the_post();
                include (__DIR__ . '/partials/module.php');
            endwhile; else:  ?>
                <p class="projects__error"><?= __('Il n\'y a pas de modules à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
            <?php endif; ?>
            <li class="projects__item">
                <div class="projects__project">
                    <img class="project__icon" src="<?= get_template_directory_uri() . "/images/r_arrow.svg"; ?>" alt="->">
                    <a class="project__link" href="<?= site_url('/projets/') ?>"><?= __('Voir tous nos projets','atmosphair') ?></a>
                </div>
            </li>
        </ul>
    </section>
    <section class="main__articles">
        <div class="articles__container">
            <h3 class="articles__title"><?= __('On parle de nous !','atmosphair') ?></h3>
            <a class="articles__link" href="<?= site_url('publications/'); ?>"><?= __('Voir toutes les publications','atmosphair') ?></a>
        </div>
        <ul class="articles__list">
            <?php if(($publications = atmos_get_publications_for_index(5))->have_posts()): while($publications->have_posts()): $publications->the_post();
                include (__DIR__ . '/partials/publication.php');
            endwhile; else:  ?>
                <p class="projects__error"><?= __('Il n\'y a pas d\'article à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
            <?php endif; ?>
            <div class="articles__container">
                <a class="article__link" href="<?= site_url('publications') ?>">
                    <img class="article__image" src="<?= get_template_directory_uri(); ?>/images/more_articles.jpg" alt="Photo d'un tas de publications.">
                    <h4 class="article__title"><?= __('Voir toutes les publications nous concernant','atmosphair') ?></h4>
                </a>
            </div>
        </ul>
    </section>
    <section class="main__contact">
        <h3 class="contact__title"><?= __('Une question ? Contactez-nous !','atmosphair') ?></h3>
        <form class="contact__form">
            <label class="contact__label" for="name">Votre nom</label>
            <input class="contact__input" id="name" name="name">

            <label class="contact__label" for="firstname">Votre prénom</label>
            <input class="contact__input" id="firstname" name="firstname">

            <label class="contact__label" for="mail">Votre adresse mail</label>
            <input class="contact__input" id="mail" name="mail">

            <label class="contact__label" for="subject">Sujet</label>
            <select class="contact__select" id="subject" name="subject">
                <option value="issep"><?= __('Question à propos des résultats','atmosphair') ?></option>
                <option value="hepl">Question à propos de la section électronique et systèmes embarqués</option>
                <option value="issep">Achat pour le secteur privé</option>
                <option value="issep">Achat pour le secteur public</option>
            </select>

            <label class="contact__label" for="message">Votre message</label>
            <input class="contact__input" id="message" name="message">

            <input class="contact__submit" type="submit">
        </form>
    </section>
    <section class="main__socials">
        <h3 class="socials__title"><?= __('Suivez-nous sur nos réseaux sociaux !','atmosphair') ?></h3>
        <ul class="socials__list">
            <?php if(($socials = atmos_get_socials(2))->have_posts()): while($socials->have_posts()): $socials->the_post();
                include (__DIR__ . '/partials/social.php');
            endwhile; else:  ?>
                <p class="projects__error"><?= __('Il n\'y a pas de réseau social à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
            <?php endif; ?>
        </ul>
    </section>
</main>
<?php get_footer(); ?>