<li class="main__item fade-in" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'medium'); ?>">
    <div class="main__articleContainer">
        <article class="main__article" itemscope itemtype="https://schema.org/Article" aria-labelledby="publication-<?= get_field('titre', false, false); ?>">
            <a class="article__fulllink" href="<?= get_field('lien', false, false); ?>">
                <h4 class="article__title" itemprop="name" aria-level="4" id="publication-<?= get_field('titre', false, false); ?>"><?= get_field('titre', false, false); ?></h4>
            </a>
            <p class="article__excerpt" itemprop="abstract">
                <?= get_field('description', false, false); ?>
            </p>
            <div class="article__more">
                <a class="article__link" href="<?= get_field('lien', false, false); ?>"><?= __('Lire la publication','atmosphair') ?></a>
                <p class="article__date">
                    <time class="article__time" itemprop="datePublished"><?= get_field('date'); ?></time>
                </p>
            </div>
        </article>
    </div>
</li>