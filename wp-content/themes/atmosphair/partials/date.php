<div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
    <h4 class="timeline__date" itemprop="startData"><time><?= wp_date("F Y", get_field('date', false, false), null); ?></time></h4>
    <p class="timeline__text" itemprop="description">
        <?= get_field('explication', false, false); ?>
    </p>
    <img class="timeline__image" src="<?= get_template_directory_uri() . "/images/" . get_field('date', false, false) . ".jpg"; ?>">
</div>