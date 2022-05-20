<div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
    <h4 class="timeline__date" itemprop="startData"><time><?= get_field('date'); ?></time></h4>
    <p class="timeline__text" itemprop="description">
        <?= get_field('explication', false, false); ?>
    </p>
    <figure class="timeline__thumb">
        <?= get_the_post_thumbnail(); ?>
    </figure>
</div>