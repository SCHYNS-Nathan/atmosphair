<?php /* Template Name: Template page Articles */ ?>
<?php get_header(); ?>
<main class="publications" aria-labelledby="publicationsTitle">
    <div class="main__container fade-in">
        <h2 class="main__title" aria-level="2" id="publicationsTitle"><?= __('On parle de nous !','atmosph\'air'); ?></h2>
        <button class="main__filter"><?= __('Filtrer','atmosph\'air'); ?></button>
    </div>
    <ul class="main__list">
        <?php if(($publications = atmos_get_publications(10))->have_posts()): while($publications->have_posts()): $publications->the_post();
            include (__DIR__ . '/partials/publication.php');
        endwhile; else:  ?>
            <?= __('Il n\'y a pas d\'article à afficher, revenez plus tard.','atmosph\'air'); ?>
        <?php endif; ?>
    </ul>
</main>
<?php get_footer(); ?>