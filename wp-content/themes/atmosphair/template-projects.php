<?php /* Template Name: Template page Projets */ ?>
<?php get_header(); ?>

<main class="main">
    <h2 class="main__title">Découvrez nos projets !</h2>
    <ul class="main__list">
        <?php if(($modules = atmos_get_modules_for_project(6))->have_posts()): while($modules->have_posts()): $modules->the_post();
            include (__DIR__ . '/partials/module.php');
        endwhile; else:  ?>

        <?php endif; ?>
    </ul>
</main>

<?php get_footer(); ?>