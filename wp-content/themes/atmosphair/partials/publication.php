<li class="main__item" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'medium', ['class' => 'actor__thumb']); ?>">
    <article class="main__article" itemscope itemtype="https://schema.org/Article">
        <h4 class="article__title" itemprop="name"><?= get_field('titre', false, false); ?></h4>
        <p class="article__excerpt" itemprop="abstract">
            <?= get_field('description', false, false); ?>
        </p>
        <a class="article__link" href="<?= get_field('lien', false, false); ?>"><?= __('Lire la publication','atmosphair') ?></a>
        <p class="article__date">
            <time class="article__time" itemprop="datePublished"><?= get_field('date'); ?></time>
        </p>
    </article>
</li>
