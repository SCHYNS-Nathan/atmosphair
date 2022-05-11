<li class="projects__item" itemscope itemtype="https://schema.org/Project">
    <article class="projects__projet">
        <a class="projet__link" href="">Voir le projet en détail
            <div>
                <figure class="projet__fig">
                </figure>
                <h4 class="projet__title" itemprop="name"><?= get_the_title(); ?></h4>
                <figure class="projet__logo">
                    <?= get_field('logo-simplifié', false, false); ?>
                </figure>
                <p class="projet__description" itemprop="description">
                    <?= get_field('description', false, false); ?>
                </p>
            </div>
        </a>
    </article>
</li>
