<div class="morals__moral">
    <img class="morals__icon" src="<?= get_template_directory_uri() . "/images/" . get_field('icone_nom', false, false) . ".svg"; ?>" alt="Icône">
    <h4 class="morals__title"><?= get_field('valeur', false, false); ?></h4>
    <p class="morals__text">
        <?= get_field('description', false, false); ?>
    </p>
</div>
