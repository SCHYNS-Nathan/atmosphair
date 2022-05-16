<li class="projects__item" itemscope itemtype="https://schema.org/Project">
    <article class="projects__project">
        <div>
            <figure class="project__fig">
                <?= get_the_post_thumbnail(null, 'medium', ['class' => 'actor__thumb']); ?>
            </figure>
            <h4 class="project__title" itemprop="name"><?= get_the_title(); ?></h4>
            <img class="project__icon" src="<?= get_template_directory_uri() . "/images/" . get_field('nom', false, false) . ".svg"; ?>" alt="Icône">
            <p class="project__description" itemprop="description">
                <?= get_field('description', false, false); ?>
            </p>
            <a class="project__link" href="<?= get_the_permalink(); ?>">Voir le projet en détail</a>
        </div>
    </article>
</li>
