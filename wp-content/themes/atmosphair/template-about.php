<?php /* Template Name: Template page À propos */ ?>
<?php get_header(); ?>
    <main class="main">
        <h2 class="main__title"><?= __('Nous nous engageons à faire des trucs !','atmosph\'air'); ?></h2>
        <video class="main__video" width="" height="" controls>
            <source src="" type="">
            <?= __('Votre navigateur ne supporte pas les balises vidéos.','atmosph\'air'); ?>
        </video>
        <section class="main__actors">
            <h3 class="actors__title"><?= __('Les acteurs du projet','atmosph\'air'); ?></h3>
                <?php if(($actors = atmos_get_actors(2))->have_posts()): while($actors->have_posts()): $actors->the_post();
                    include (__DIR__ . '/partials/actor.php');
                endwhile; else:  ?>
                    <?= __('Il n\'y a pas d\'acteur du projet à afficher, revenez plus tard.','atmosph\'air'); ?>
                <?php endif; ?>
        </section>
        <section class="main__morals">
            <h3 class="morals__title"><?= __('Nos valeurs','atmosph\'air'); ?></h3>
            <?php if(($morals = atmos_get_morals(3))->have_posts()): while($morals->have_posts()): $morals->the_post();
                include (__DIR__ . '/partials/moral.php');
            endwhile; else:  ?>
                <?= __('Nous n\'avons aucune valeurs, revenez plus tard.','atmosph\'air'); ?>
            <?php endif; ?>
        </section>
        <section class="main__timeline">
            <h3 class="timeline__title"><?= __('Petit historique du projet','atmosph\'air'); ?></h3>
            <?php if(($dates = atmos_get_dates(10))->have_posts()): while($dates->have_posts()): $dates->the_post();
                include (__DIR__ . '/partials/date.php');
            endwhile; else:  ?>
                <?= __('Il n\'y a pas d\'historique à afficher, revenez plus tard.','atmosph\'air'); ?>
            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>
