<li class="projects__item fade-in" itemscope itemtype="https://schema.org/Project">
    <article class="projects__project" aria-labelledby="module-<?= get_the_title(); ?>">
        <div class="project__container">
            <div class="project__name">
                <a class="project__fulllink" href="<?= get_the_permalink(); ?>">
                    <h4 class="project__title" itemprop="name" aria-level="4" id="module-<?= get_the_title(); ?>"><?= get_the_title(); ?></h4>
                    <img class="project__icon" src="<?= get_template_directory_uri() . "/src/images/" . get_field('nom', false, false) . ".svg"; ?>" alt="<?= __('Icône du projet','atmosph\'air'); ?>">
                </a>
            </div>
            <figure class="project__fig">
                <?= get_the_post_thumbnail(null, 'medium', ['class' => 'actor__thumb']); ?>
            </figure>
            <div class="project__text">
                <p class="project__description" itemprop="description">
                    <?= get_field('description', false, false); ?>
                </p>
                <a class="project__link" href="<?= get_the_permalink(); ?>"><?= __('Voir le projet en détail','atmosph\'air'); ?></a>
            </div>
        </div>
    </article>
</li>
