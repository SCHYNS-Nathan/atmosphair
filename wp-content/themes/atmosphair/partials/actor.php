<div class="actors__actor fade-in" itemscope itemtype="https://schema.org/Organization" aria-labelledby="actor-<?= get_field('nom', false, false); ?>">
    <div class="actor__container">
        <h4 class="actor__title" itemprop="name" id="actor-<?= get_field('nom', false, false); ?>" aria-level="4"><?= get_field('nom', false, false); ?></h4>
        <p class="actor__text">
            <?= get_field('description', false, false); ?>
        </p>
        <a class="actor__link" href="<?= get_field('lien', false, false); ?>"><?= __('Visiter le site','atmosph\'air'); ?></a>
    </div>
    <figure class="actor__fig">
        <?= get_the_post_thumbnail(null, 'large', ['class' => 'actor__thumb']); ?>
    </figure>
</div>