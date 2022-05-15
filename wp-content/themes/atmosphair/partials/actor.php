<div class="actors__actor" itemscope itemtype="https://schema.org/Organization">
    <h4 class="actor__title" itemprop="name"><?= get_field('nom', false, false); ?></h4>
    <p class="actor__text">
        <?= get_field('description', false, false); ?>
    </p>
    <figure class="actor__fig">
        <?= get_the_post_thumbnail(null, 'medium', ['class' => 'actor__thumb']); ?>
    </figure>
    <a class="actor__link" href="<?= get_field('lien', false, false); ?>">Visiter le site</a>
</div>