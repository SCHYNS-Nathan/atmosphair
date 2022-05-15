<?php /* Template Name: Template page À propos */ ?>
<?php get_header(); ?>
    <main class="main">
        <h2 class="main__title">Nous nous engageons à faire des trucs !</h2>
        <video class="main__video" width="" height="" controls>
            <source src="" type="">
            Votre navigateur ne supporte pas les balises vidéos.
        </video>
        <section class="main__actors">
            <h3 class="actors__title">Les acteurs du projet</h3>
                <?php if(($actors = atmos_get_actors(2))->have_posts()): while($actors->have_posts()): $actors->the_post();
                    include (__DIR__ . '/partials/actor.php');
                endwhile; else:  ?>

                <?php endif; ?>
        </section>
        <section class="main__morals">
            <h3 class="morals__title">Nos valeurs</h3>
            <?php if(($morals = atmos_get_morals(3))->have_posts()): while($morals->have_posts()): $morals->the_post();
                include (__DIR__ . '/partials/moral.php');
            endwhile; else:  ?>

            <?php endif; ?>
        </section>
        <section class="main__timeline">
            <h3 class="timeline__title">Petit historique du projet</h3>
            <?php if(($dates = atmos_get_dates(10))->have_posts()): while($dates->have_posts()): $dates->the_post();
                include (__DIR__ . '/partials/date.php');
            endwhile; else:  ?>

            <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>
