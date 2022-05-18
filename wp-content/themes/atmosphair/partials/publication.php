<li class="main__item">
    <article class="main__article" itemscope itemtype="https://schema.org/Article">
        <a class="article__link" href="<?= get_field('lien', false, false); ?>">Lire la publication</a>
        <h4 class="article__title" itemprop="name"><?= get_field('titre', false, false); ?></h4>
        <figure class="article__thumb" itemprop="image">
                <?= get_the_post_thumbnail(null, 'medium', ['class' => 'actor__thumb']); ?>
            </figure>
            <p class="article__excerpt" itemprop="abstract">
                <?= get_field('description', false, false); ?>
            </p>
            <p class="article__date">
                <time class="article__time" itemprop="datePublished"><?= get_field('date'); ?></time>
            </p>
    </article>
</li>
