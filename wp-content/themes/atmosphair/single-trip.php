<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="layout singleTrip">
        <h2 class="singleTrip__title"><?= get_the_title(); ?></h2>
        <figure class="singleTrip__fig">
            <?= get_the_post_thumbnail(null, 'medium_large', ['class' => 'singleTrip__thumb']); ?>
        </figure>
        <div class="singleTrip__content">
            <?php the_content(); ?>
        </div>
        <aside class="singleTrip__details">
            <h3 class="singleTrip__subtitle"><?= __('Détails du voyage', 'atmosphair'); ?></h3>
            <dl class="singleTrip__definitions">
                <dt class="singleTrip__label"><?= __('Date de départ', 'atmosphair'); ?></dt>
                <dd class="singleTrip__data">
                    <time class="singleTrip__time" datetime="<?= date('c', strtotime(get_field('departure_date', false, false))); ?>"><?= ucfirst(date_i18n('d F Y', strtotime(get_field('departure_date', false, false)))); ?></time>
                </dd>
                <dt class="singleTrip__label"><?= __('Date de retour', 'atmosphair'); ?></dt>
                <dd class="singleTrip__data">
                    <?php if(get_field('return_date')): ?>
                    <time class="singleTrip__time" datetime="<?= date('c', strtotime(get_field('return_date', false, false))); ?>"><?= ucfirst(date_i18n('d F Y', strtotime(get_field('return_date', false, false)))); ?></time>
                    <?php else: ?>
                    <span class="singleTrip__empty"><?= __('Aucune date de retour de prévue pour le moment.', 'atmosphair'); ?></span>
                    <?php endif; ?>
                </dd>
            </dl>
        </aside>
    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>