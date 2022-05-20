<?php /* Template Name: Template page Projet */ ?>

<?= get_header(); ?>
    <main class="main" itemscope itemtype="https://schema.org/Project">
        <a class="main__return" href="<?= site_url('projets/'); ?>" id="top"><?= __('Retour à la page projets','atmosphair') ?></a>
        <figure class="main__image">
            <?= get_the_post_thumbnail(); ?>
        </figure>
        <div class="main__title">
            <h2 class="title__title" itemprop="name"><?= get_the_title(); ?></h2>
            <figure class="how__fig">
                <?= wp_get_attachment_image(get_field('logo_simple', false, false)); ?>
            </figure>
        </div>
        <article class="main__what">
            <h3 class="what__title"><?= get_the_title() . __(', c\'est quoi ?','atmosphair') ?></h3>
            <p class="what__text" itemprop="description">
                <?= get_field('description', false, false); ?>
            </p>
        </article>
        <article class="main__why">
            <h3 class="why__title"><?= __('Pourquoi ce dispositif ?','atmosphair') ?></h3>
            <p class="why__text">
                <?= get_field('pourquoi', false, false); ?>
            </p>
        </article>
        <article class="main__technicals">
            <h3 class="technicals__title"><?= __('Fiche technique du projet','atmosphair') ?></h3>
        </article>
        <article class="main__how">
            <h3 class="how__title"><?= __('Comment ça marche ?','atmosphair') ?></h3>
            <ol class="how__list">
                <li class="how__item">
                    <h4 class="how__step" itemprop="potentialAction"><?= get_field('comment_titre_1', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_1', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_1', false, false)); ?>
                    </figure>
                </li>
                <li class="how__item">
                    <h4 class="how__step" itemprop="potentialAction"><?= get_field('comment_titre_2', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_2', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_2', false, false)); ?>
                    </figure>
                </li>
                <li class="how__item">
                    <h4 class="how__step" itemprop="potentialAction"><?= get_field('comment_titre_3', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_3', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_3', false, false)); ?>
                    </figure>
                </li>
                <li class="how__item">
                    <h4 class="how__step" itemprop="potentialAction"><?= get_field('comment_titre_4', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_4', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_4', false, false)); ?>
                    </figure>
                </li>
            </ol>
        </article>
        <article class="main__who">
            <h3 class="who__title"><?= __('À qui est-il destiné ?','atmosphair') ?></h3>
            <p class="who__text">
                <?= get_field('qui', false, false); ?>
            </p>
            <div class="who__group">
                <figure class="who__fig">
                    <?= wp_get_attachment_image(get_field('qui_icone_1', false, false)); ?>
                </figure>
                <p class="who__characteristic">
                    <?= get_field('qui_titre_1', false, false); ?>
                </p>
            </div>
            <div class="who__group">
                <figure class="who__fig">
                    <?= wp_get_attachment_image(get_field('qui_icone_2', false, false)); ?>
                </figure>
                <p class="who__characteristic">
                    <?= get_field('qui_titre_2', false, false); ?>
                </p>
            </div>
            <div class="who__group">
                <figure class="who__fig">
                    <?= wp_get_attachment_image(get_field('qui_icone_3', false, false)); ?>
                </figure>
                <p class="who__characteristic">
                    <?= get_field('qui_titre_3', false, false); ?>
                </p>
            </div>
        </article>
        <article class="main__result">
            <h3 class="result__title"><?= __('Ca donne quoi au final ?','atmosphair') ?></h3>
            <p class="result__text">
                <?= get_field('resultat_texte', false, false); ?>
            </p>
            <figure class="result__map">
                <?= wp_get_attachment_image(get_field('resultat_image', false, false)); ?>
            </figure>
            <div class="result__number">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_1', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_1', false, false); ?>
                </p>
            </div>
            <div class="result__number">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_2', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_2', false, false); ?>
                </p>
            </div>
            <div class="result__number">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_3', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_3', false, false); ?>
                </p>
            </div>
            <a class="result__link" href="<?= get_field('resultat_lien', false, false); ?>"><?= __('Voir les données complètes','atmosphair') ?></a>
        </article>
        <article class="main__more">
            <h3 class="more__title"><?= get_field('plus_titre', false, false); ?></h3>
            <p class="more__text">
                <?= get_field('plus_texte', false, false); ?>
            </p>
            <figure class="more__fig">
                <?= wp_get_attachment_image(get_field('plus_image', false, false)); ?>
            </figure>
            <a class="more__link" href="<?= get_field('plus_lien', false, false); ?>"><?= __('Voir les données complètes','atmosphair') ?></a>
        </article>
        <article class="main__conclusion">
            <h3 class="conclusion__title"><?= __('Conclusion, que retenir de tout ça ?','atmosphair') ?></h3>
            <p class="conclusion__text">
                <?= get_field('conclusion_texte', false, false); ?>
            </p>
            <div class="conclusion__keys">
                <div class="keys__key">
                    <svg class="key__svg">

                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_1', false, false); ?>
                    </p>
                </div>
                <div class="keys__key">
                    <svg class="key__svg">

                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_2', false, false); ?>
                    </p>
                </div>
                <div class="keys__key">
                    <svg class="key__svg">

                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_3', false, false); ?>
                    </p>
                </div>
            </div>
        </article>
        <article class="main__promotion">
            <h3 class="promotion__title"><?= __('Pour aller plus loin !','atmosphair') ?></h3>
            <p class="promotion__text">
                <?= __('Vous vous intéressez à l’électronique, aux systèmes embarqués ou vous souhaitez juste en apprendre plus sur notre section ? Venez jeter un oeil à notre section sur le site de la ','atmosphair') . '<span  itemprop="parentOrganization">' . __('Haute École de la Province de Liège !','atmosphair') . '</span>' ?>
            </p>
            <img class="promotion__image" src="" alt="Bâtiment de la HEPL">
            <a class="promotion__link" href="https://www.hepl.be/fr/master-ingenieur-industriel/electronique-systemes-embarques"><?= __('Visiter le site de la HEPL','atmosphair') ?></a>
        </article>
        <section class="main__others">
            <h3 class="others__title"><?= __('Nos autres projets','atmosphair') ?></h3>
            <ul class="others__list">
                <?php if(($modules = atmos_get_modules_for_index(6))->have_posts()): while($modules->have_posts()): $modules->the_post();
                    include (__DIR__ . '/partials/module.php');
                endwhile; else:  ?>
                    <p class="projects__error"><?= __('Il n\'y a pas de modules à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
                <?php endif; ?>
            </ul>
        </section>
        <a class="main__arrow" href="#top">-></a>
    </main>
<?= get_footer(); ?>