<?php /* Template Name: Template page Projets */ ?>
<?php get_header(); ?>
<main class="projects" aria-labelledby="projectsTitle">
    <section class="main__presentation" aria-labelledby="projectsPresentation">
        <h3 class="presentation__title fade-in" aria-level="3" id="projectsPresentation"><?= __('Nos appareils ', 'atmosh\'air') .  '<em>' . __('captent ', 'atmosh\'air') . '</em>' . __('et ', 'atmosh\'air') .  '<em>' . __('annalyse  ', 'atmosh\'air') . '</em>' . __('l\'air pollué.','atmosph\'air'); ?></h3>
        <p class="presentation__text fade-in">
            <?= __('Suite à des années de développement, nous avons mis au point une gamme de capteurs d\'air pollué permettant de collecter des données.','atmosph\'air'); ?>
        </p>
    </section>
    <h2 class="main__title fade-in" aria-level="2" id="projectsTitle"><?= __('Découvrez nos projets !','atmosph\'air'); ?></h2>
    <ul class="main__list">
        <?php if(($modules = atmos_get_modules_for_project())->have_posts()): while($modules->have_posts()): $modules->the_post();
            include (__DIR__ . '/partials/module.php');
        endwhile; else:  ?>
            <?= __('Il n\'y a pas de projet à afficher, revenez plus tard.','atmosph\'air'); ?>
        <?php endif; ?>
    </ul>
</main>
<?php get_footer(); ?>