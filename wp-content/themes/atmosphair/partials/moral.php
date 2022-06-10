<div class="morals__moral" aria-labelledby="moral-<?= get_field('valeur', false, false); ?>">
    <img class="morals__icon" src="<?= get_template_directory_uri() . "/src/images/" . get_field('icone_nom', false, false) . ".svg"; ?>" alt="<?= __('Icône de la valeur','atmosph\'air'); ?>">
    <h4 class="morals__title" aria-level="4" id="moral-<?= get_field('valeur', false, false); ?>"><?= get_field('valeur', false, false); ?></h4>
    <p class="morals__text">
        <?= get_field('description', false, false); ?>
    </p>
</div>
