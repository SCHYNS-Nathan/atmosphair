<?php /* Template Name: Template page Articles */ ?>
<?php get_header(); ?>

<main class="main">
    <h2 class="main__title">On parle de nous !</h2>
    <button class="main__filter">Filtrer</button>
    <ul class="main__list">
        <?php if(($publications = atmos_get_publications(10))->have_posts()): while($publications->have_posts()): $publications->the_post();
            include (__DIR__ . '/partials/publication.php');
        endwhile; else:  ?>

        <?php endif; ?>
    </ul>
</main>

<?php get_footer(); ?>