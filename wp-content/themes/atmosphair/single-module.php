<?= get_header(); ?>
    <main class="singleMain" itemscope itemtype="https://schema.org/Project" aria-labelledby="singleTitle<?= get_the_title(); ?>">
        <a class="main__return" href="<?= site_url('projets/'); ?>" id="top"><?= __('Retour à la page projets','atmosphair') ?></a>
        <div class="main__title fade-in" style="background-image: url(<?= get_the_post_thumbnail_url(null, 'large', ['class' => 'actor__thumb']); ?>">
            <h2 class="title__title" itemprop="name" aria-level="2" id="singleTitle<?= get_the_title(); ?>"><?= get_the_title(); ?></h2>
            <figure class="title__fig">
                <?= wp_get_attachment_image(get_field('logo_simple', false, false), array('100', '100')); ?>
            </figure>
        </div>
        <article class="main__what" aria-labelledby="what<?= get_the_title(); ?>">
            <h3 class="what__title fade-in" aria-level="3" id="what<?= get_the_title(); ?>"><?= get_the_title() . __(', c\'est quoi ?','atmosphair') ?></h3>
            <p class="what__text fade-in" itemprop="description">
                <?= get_field('cest_quoi_', false, false); ?>
            </p>
        </article>
        <article class="main__why" aria-labelledby="why<?= get_the_title(); ?>">
            <h3 class="why__title fade-in" aria-level="3" id="why<?= get_the_title(); ?>"><?= __('Pourquoi ce dispositif ?','atmosphair') ?></h3>
            <p class="why__text fade-in">
                <?= get_field('pourquoi', false, false); ?>
            </p>
        </article>
        <article class="main__how" aria-labelledby="how<?= get_the_title(); ?>">
            <h3 class="how__title fade-in" aria-level="3" id="how<?= get_the_title(); ?>"><?= __('Comment ça marche ?','atmosphair') ?></h3>
            <ol class="how__list">
                <li class="how__item fade-in" aria-labelledby="how1<?= get_the_title(); ?>">
                    <h4 class="how__step" itemprop="potentialAction" aria-level="4" id="how1<?= get_the_title(); ?>"><?= get_field('comment_titre_1', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_1', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_1', false, false), array('400', '400')); ?>
                    </figure>
                </li>
                <?php if(get_field('comment_titre_2', false, false)):?>
                    <li class="how__item fade-in" aria-labelledby="how2<?= get_the_title(); ?>">
                    <h4 class="how__step" itemprop="potentialAction" aria-level="4" id="how2<?= get_the_title(); ?>"><?= get_field('comment_titre_2', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_2', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_2', false, false), array('400', '400')); ?>
                    </figure>
                </li>
                <?php endif; ?>
                <?php if(get_field('comment_titre_3', false, false)):?>
                    <li class="how__item fade-in" aria-labelledby="how3<?= get_the_title(); ?>">
                    <h4 class="how__step" itemprop="potentialAction"  aria-level="4" id="how3<?= get_the_title(); ?>"><?= get_field('comment_titre_3', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_3', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_3', false, false), array('400', '400')); ?>
                    </figure>
                </li>
                <?php endif; ?>
                <?php if(get_field('comment_titre_4', false, false)):?>
                    <li class="how__item fade-in" aria-labelledby="how4<?= get_the_title(); ?>">
                    <h4 class="how__step" itemprop="potentialAction" aria-level="4" id="how4<?= get_the_title(); ?>"><?= get_field('comment_titre_4', false, false); ?></h4>
                    <p class="how__description">
                        <?= get_field('comment_texte_4', false, false); ?>
                    </p>
                    <figure class="how__fig">
                        <?= wp_get_attachment_image(get_field('comment_image_4', false, false), array('400', '400')); ?>
                    </figure>
                </li>
                <?php endif; ?>
            </ol>
        </article>
        <article class="main__who" aria-labelledby="who<?= get_the_title(); ?>">
            <h3 class="who__title fade-in" aria-level="3" id="who<?= get_the_title(); ?>"><?= __('À qui est-il destiné ?','atmosphair') ?></h3>
            <p class="who__text fade-in">
                <?= get_field('qui', false, false); ?>
            </p>
            <div class="who__container fade-in">
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
            </div>
        </article>
        <?php if(get_field('resultat_texte', false, false) && get_field('resultat_image', false, false) && get_field('resultat_lien', false, false)):?>
            <article class="main__result" aria-labelledby="result<?= get_the_title(); ?>">
            <h3 class="result__title fade-in" aria-level="3" id="result<?= get_the_title(); ?>"><?= __('Ca donne quoi au final ?','atmosphair') ?></h3>
            <p class="result__text fade-in">
                <?= get_field('resultat_texte', false, false); ?>
            </p>
            <figure class="result__map fade-in">
                <?= wp_get_attachment_image(get_field('resultat_image', false, false), array('600', '600')); ?>
            </figure>
            <?php if(get_field('resultat_chiffre_1', false, false) && get_field('resultat_info_chiffre_1', false, false)):?>
                <div class="result__number fade-in">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_1', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_1', false, false); ?>
                </p>
            </div>
            <?php endif; ?>
            <?php if(get_field('resultat_chiffre_2', false, false) && get_field('resultat_info_chiffre_2', false, false)):?>
                    <div class="result__number fade-in">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_2', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_2', false, false); ?>
                </p>
            </div>
            <?php endif; ?>
            <?php if(get_field('resultat_chiffre_3', false, false) && get_field('resultat_info_chiffre_3', false, false)):?>
                <div class="result__number fade-in">
                <p class="number__number">
                    <strong><?= get_field('resultat_chiffre_3', false, false); ?></strong>
                </p>
                <p class="number__text">
                    <?= get_field('resultat_info_chiffre_3', false, false); ?>
                </p>
            </div>
            <?php endif; ?>
            <a class="result__link fade-in" href="<?= get_field('resultat_lien', false, false); ?>"><?= __('Voir les données complètes','atmosphair') ?></a>
        </article>
        <?php endif; ?>
        <?php if(get_field('plus_titre', false, false) && get_field('plus_texte', false, false) && get_field('plus_lien', false, false)):?>
            <article class="main__more" aria-labelledby="more<?= get_the_title(); ?>">
            <h3 class="more__title fade-in" aria-level="3" id="more<?= get_the_title(); ?>"><?= get_field('plus_titre', false, false); ?></h3>
            <p class="more__text fade-in">
                <?= get_field('plus_texte', false, false); ?>
            </p>
            <figure class="more__fig fade-in">
                <?= wp_get_attachment_image(get_field('plus_image', false, false), array('600', '600')); ?>
            </figure>
            <a class="more__link fade-in" href="<?= get_field('plus_lien', false, false); ?>"><?= __('Voir les données complètes','atmosphair') ?></a>
        </article>
        <?php endif; ?>
        <?php if(get_field('conclusion_texte', false, false)):?>
            <article class="main__conclusion" aria-labelledby="conclusion<?= get_the_title(); ?>">
            <h3 class="conclusion__title fade-in" aria-level="3" id="conclusion<?= get_the_title(); ?>"><?= __('Conclusion, que retenir de tout ça ?','atmosphair') ?></h3>
            <p class="conclusion__text fade-in">
                <?= get_field('conclusion_texte', false, false); ?>
            </p>
            <div class="conclusion__keys">
                <?php if(get_field('conclusion_point_1', false, false)):?>
                    <div class="keys__key fade-in">
                    <svg class="key__svg" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.8133 27.2367C43.6967 27.0167 44.9533 26.8967 45.1767 26.8967C45.4233 26.9267 44.5233 28.4033 43.8133 27.2367ZM36.64 16.9967L37 16.8933C37.2133 17.0767 36.76 17.21 36.83 17.3467C37.1167 17.8633 36.9 18.1733 36.8567 18.4533C36.81 18.7367 36.51 18.6133 36.36 18.7633C36.1833 18.9833 37.22 19.0133 37.2333 19.0467C37.27 19.1567 35.9833 19.3433 36.22 19.6167C36.54 20.07 38.9667 18.9667 38.58 19.03C39.33 18.6533 38.6767 18.6133 38.2567 18.3967C38.1133 17.68 37.9933 16.5733 37.5467 16.13L37.84 15.79C37.1533 14.7933 36.64 16.9967 36.64 16.9967ZM80 40C80 62.09 62.09 80 40 80C17.9067 80 0 62.09 0 40C0 17.91 17.9067 0 40 0C62.09 0 80 17.91 80 40ZM52.3 22.0967C52.28 21.61 51.6667 21.15 51.0267 21.9933C50.5767 22.5733 50.6567 23.4567 50.4133 23.85C50.0667 24.4333 52.3033 24.98 52.3033 24.43C52.3867 23.5067 54.7433 24.22 55.2033 24.3467C56.03 24.5767 57.3467 23.5933 55.9067 23.0767C54.7233 22.6433 54.1 22.18 53.9933 21.3333C53.9933 21.3333 54.62 20.7467 54.3467 20.78C53.62 20.87 52.3 23.4 52.3 22.0967ZM73.2867 40C73.2867 36.55 72.6967 33.0667 72.0967 31.2267C71.9033 30.6467 71.4667 30.1867 70.9 29.9667C70.0467 29.6333 66.4433 31.9567 65.9 30.8133C65.5433 30.05 64.82 31.3 63.9933 30.84C63.5933 30.62 62.48 29.1233 61.9767 29.3067C60.9467 29.6767 63.5567 32.52 64.27 32.8933C64.94 32.3867 67.11 31.3433 67.5767 32.7667C68.47 35.4467 65.12 38.3833 63.4067 39.93C60.8467 42.2433 61.3267 38.4333 59.5833 37.09C58.6667 36.3867 58.6767 34.89 57.75 34.3733C57.3367 34.14 55.44 31.9567 55.4567 31.6633L55.4 32.2167C55.0867 32.4533 54.42 31.3233 54.35 31.1467C54.35 32.13 55.95 33.6967 56.48 34.4833C57.3833 35.8333 57.8667 37.8 58.9733 38.9033C59.5667 39.4967 61.8333 41.95 62.4233 41.8967C63.0667 41.84 65.1 40.37 65.46 40.4533C67.6067 40.96 60.4067 51.1367 59.7233 52.3967C59.16 53.4533 60.1833 56.0667 60.1 57.3167C60.0033 58.76 58.8667 59.2267 57.79 60.0133C56.6367 60.8567 56.9067 62.4967 55.9367 63.0967C54.2133 64.1567 52.9733 67.6067 50.5267 67.59C49.8067 67.5867 46.7267 68.79 46.3233 67.6133C46.01 66.76 45.59 66.1133 45.1467 65.27C44.7133 64.4433 45.0967 63.5867 44.57 62.8567C44.2067 62.35 42.9867 61.2 42.8767 60.6C42.87 60.0833 43.2667 58.5133 43.81 58.24C44.5733 57.85 43.9567 56.7133 43.8633 56.0533C43.7033 54.8733 42.9733 53.9 42.0967 53.2167C40.8 52.22 41.47 51.4267 41.7733 50.0033C41.7733 49.3233 41.36 48.43 40.4467 48.6967C38.5667 49.2433 39.1367 47.23 37.7667 47.32C36.78 47.39 35.9733 48.0167 35.0567 48.2933C33.9033 48.64 32.7233 48.02 31.5833 47.8767C26.8933 47.2833 25.3633 41.9233 26.5867 38.0567C26.71 37.4233 26.2067 36.25 26.4267 35.76C26.9533 34.5867 28.0267 33.27 28.9667 32.38C29.4933 31.88 30.17 32.0067 30.79 31.6167C31.7467 31.0133 31.76 29.7733 32.6967 29.0133C34.03 27.93 35.85 27.9533 37.59 27.72C38.5167 27.5967 42.0433 26.8333 42.6 27.52C42.6 27.6467 43.2367 29.5333 42.5367 29.4267C43.98 29.5033 46.0367 31.9233 47.4067 31.3567C48.11 31.0633 47.8533 28.9033 49.2967 29.9467C50.17 30.5733 54.0833 30.8533 54.8967 30.1767C55.3967 29.7633 55.6767 27.0767 55.07 26.7733C55.4567 27.1567 53.0333 27.1867 52.8067 27.1C52.4067 26.9533 52.0333 27.48 51.39 27.1833C51.7767 27.3667 49.2367 26.0033 50.6633 24.96C50.0667 25.3967 49.51 24.8367 48.8667 25.3167C48.4233 25.6767 49.0733 25.9167 48.44 26.23C47.4333 26.74 46.6733 24.48 46.2933 24.2233C45.9067 23.97 42.9133 21.87 43.7267 23.24L46.3567 25.8567C46.2267 25.94 45.6667 24.9033 45.6667 25.66C45.8433 25.21 45.7333 27.59 45.32 26.8167C45.1367 26.52 45.62 26.3533 45.34 25.9233C45.34 25.64 44.58 25.3633 44.4333 25.17C44.0167 24.6533 42.91 23.5133 42.31 23.24C42.1433 23.1633 39.7633 23.53 39.5633 23.6067C39.33 23.9333 39.13 24.2767 38.9667 24.6433C38.4733 24.8267 38.01 25.0633 37.57 25.3567L37.0467 26.5333C36.82 26.7367 34.4967 27.5033 34.4833 27.5333C34.58 27.2833 32.86 26.9633 32.9733 26.4633C33.1 25.9133 33.6833 24.1967 33.5333 23.57C33.3733 22.9133 37.1133 24.5167 37.3533 22.7867C37.45 22.0367 37.5067 21.1633 36.31 21.0367C36.5367 21.0633 38.6267 20.2167 38.9733 19.8367C39.46 19.2767 40.5767 18.3633 41.3867 18.3633C42.3333 18.3633 42.13 16.9867 42.5667 16.3133C43.0033 16.49 42.3333 17.5667 42.8567 18.0033C42.8233 17.66 44.34 18.1933 44.4867 18.1133C44.8333 17.9333 46.7667 18.04 46.4667 17.1333C46.1333 16.21 46.6367 16.4833 47.07 16.29C46.9967 16.32 48.2033 14.2267 48.41 14.9133C48.2667 14.2067 47.0067 15.16 46.5667 15.1233C45.55 15.0433 45.98 13.39 46.3633 12.9067C46.66 12.5233 45.5533 12.0533 45.54 12.7867C45.52 13.8833 44.5 14.8767 44.7367 16.3333C45.0967 18.53 42.2867 15.8033 42.04 15.9533C41.1067 16.52 40.3433 15.24 40.8267 14.4733C41.32 13.69 42.51 13.7267 43 12.8867C43.3467 12.2933 43.75 11.6033 44.2833 11.1533C46.0667 9.65667 46.56 10.8533 48.3367 11.0167C50.0733 11.1767 48.9233 11.43 48.6833 12.0967C48.4533 12.73 49.6367 12.9567 50.0467 12.4267C50.28 12.12 50.81 11.35 51.04 10.78C51.3367 10.04 54.0433 10.1233 52.1533 8.99333C50.9067 8.25 45.4733 6.75333 41.8333 6.75333C41.0467 6.75333 40.4967 7.63 39.8967 8.12667C38.71 9.11 35.67 11.04 33.98 10.4533C32.25 9.85667 28.5467 12.6533 27.9533 12.6733C27.7367 12.6867 27.9667 10.56 29.1467 10.4033C28.6367 10.48 33.3033 8.04667 33.1767 7.54C33.0233 6.94 23.8467 10.28 24.2567 10.95C24.4533 11.2567 25.2533 11.2567 24.2033 11.93C23.6033 12.2933 22.9633 14.6 22.4 14.6C20.7167 15.3367 20.61 13.15 18.7367 15.9633L15.7567 17.1633C11.33 21.8667 8.26667 27.8233 7.15667 34.44C7.11333 34.7033 8.27 35.1933 8.42 35.3733C8.79333 35.82 8.79333 37.7467 8.97667 38.3767C9.43667 39.97 10.5733 40.8567 11.4433 42.3067C11.9567 43.17 12.81 45.3533 12.54 46.26C12.9 45.6667 16.1067 48.9767 16.6933 49.6667C18.0733 51.29 19.1367 53.2567 16.8967 54.8633C16.1733 55.3833 17.9967 58.6267 17.0567 59.4233L15.8533 59.7333C14.6667 60.4633 15.2033 62.2533 15.9233 63.0067C21.9833 69.3433 30.5233 73.2967 39.99 73.2967C58.38 73.2967 73.2867 58.39 73.2867 40ZM34.93 18.81C35.3467 18.6267 35.9067 18.6333 35.9667 18.0767C36.0167 17.5833 36.1133 17.9233 36.2333 17.7433C36.35 17.5667 36.01 17.2833 35.8667 17.2567C35.6533 17.21 35.5067 17.4867 35.37 17.6033L35.13 17.6667L34.9033 17.9567L34.93 18.1167L34.64 18.47C34.3567 18.75 34.6467 18.9333 34.93 18.81Z" fill="#DDA458"/>
                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_1', false, false); ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php if(get_field('conclusion_point_2', false, false)):?>
                    <div class="keys__key fade-in">
                    <svg class="key__svg" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.8133 27.2367C43.6967 27.0167 44.9533 26.8967 45.1767 26.8967C45.4233 26.9267 44.5233 28.4033 43.8133 27.2367ZM36.64 16.9967L37 16.8933C37.2133 17.0767 36.76 17.21 36.83 17.3467C37.1167 17.8633 36.9 18.1733 36.8567 18.4533C36.81 18.7367 36.51 18.6133 36.36 18.7633C36.1833 18.9833 37.22 19.0133 37.2333 19.0467C37.27 19.1567 35.9833 19.3433 36.22 19.6167C36.54 20.07 38.9667 18.9667 38.58 19.03C39.33 18.6533 38.6767 18.6133 38.2567 18.3967C38.1133 17.68 37.9933 16.5733 37.5467 16.13L37.84 15.79C37.1533 14.7933 36.64 16.9967 36.64 16.9967ZM80 40C80 62.09 62.09 80 40 80C17.9067 80 0 62.09 0 40C0 17.91 17.9067 0 40 0C62.09 0 80 17.91 80 40ZM52.3 22.0967C52.28 21.61 51.6667 21.15 51.0267 21.9933C50.5767 22.5733 50.6567 23.4567 50.4133 23.85C50.0667 24.4333 52.3033 24.98 52.3033 24.43C52.3867 23.5067 54.7433 24.22 55.2033 24.3467C56.03 24.5767 57.3467 23.5933 55.9067 23.0767C54.7233 22.6433 54.1 22.18 53.9933 21.3333C53.9933 21.3333 54.62 20.7467 54.3467 20.78C53.62 20.87 52.3 23.4 52.3 22.0967ZM73.2867 40C73.2867 36.55 72.6967 33.0667 72.0967 31.2267C71.9033 30.6467 71.4667 30.1867 70.9 29.9667C70.0467 29.6333 66.4433 31.9567 65.9 30.8133C65.5433 30.05 64.82 31.3 63.9933 30.84C63.5933 30.62 62.48 29.1233 61.9767 29.3067C60.9467 29.6767 63.5567 32.52 64.27 32.8933C64.94 32.3867 67.11 31.3433 67.5767 32.7667C68.47 35.4467 65.12 38.3833 63.4067 39.93C60.8467 42.2433 61.3267 38.4333 59.5833 37.09C58.6667 36.3867 58.6767 34.89 57.75 34.3733C57.3367 34.14 55.44 31.9567 55.4567 31.6633L55.4 32.2167C55.0867 32.4533 54.42 31.3233 54.35 31.1467C54.35 32.13 55.95 33.6967 56.48 34.4833C57.3833 35.8333 57.8667 37.8 58.9733 38.9033C59.5667 39.4967 61.8333 41.95 62.4233 41.8967C63.0667 41.84 65.1 40.37 65.46 40.4533C67.6067 40.96 60.4067 51.1367 59.7233 52.3967C59.16 53.4533 60.1833 56.0667 60.1 57.3167C60.0033 58.76 58.8667 59.2267 57.79 60.0133C56.6367 60.8567 56.9067 62.4967 55.9367 63.0967C54.2133 64.1567 52.9733 67.6067 50.5267 67.59C49.8067 67.5867 46.7267 68.79 46.3233 67.6133C46.01 66.76 45.59 66.1133 45.1467 65.27C44.7133 64.4433 45.0967 63.5867 44.57 62.8567C44.2067 62.35 42.9867 61.2 42.8767 60.6C42.87 60.0833 43.2667 58.5133 43.81 58.24C44.5733 57.85 43.9567 56.7133 43.8633 56.0533C43.7033 54.8733 42.9733 53.9 42.0967 53.2167C40.8 52.22 41.47 51.4267 41.7733 50.0033C41.7733 49.3233 41.36 48.43 40.4467 48.6967C38.5667 49.2433 39.1367 47.23 37.7667 47.32C36.78 47.39 35.9733 48.0167 35.0567 48.2933C33.9033 48.64 32.7233 48.02 31.5833 47.8767C26.8933 47.2833 25.3633 41.9233 26.5867 38.0567C26.71 37.4233 26.2067 36.25 26.4267 35.76C26.9533 34.5867 28.0267 33.27 28.9667 32.38C29.4933 31.88 30.17 32.0067 30.79 31.6167C31.7467 31.0133 31.76 29.7733 32.6967 29.0133C34.03 27.93 35.85 27.9533 37.59 27.72C38.5167 27.5967 42.0433 26.8333 42.6 27.52C42.6 27.6467 43.2367 29.5333 42.5367 29.4267C43.98 29.5033 46.0367 31.9233 47.4067 31.3567C48.11 31.0633 47.8533 28.9033 49.2967 29.9467C50.17 30.5733 54.0833 30.8533 54.8967 30.1767C55.3967 29.7633 55.6767 27.0767 55.07 26.7733C55.4567 27.1567 53.0333 27.1867 52.8067 27.1C52.4067 26.9533 52.0333 27.48 51.39 27.1833C51.7767 27.3667 49.2367 26.0033 50.6633 24.96C50.0667 25.3967 49.51 24.8367 48.8667 25.3167C48.4233 25.6767 49.0733 25.9167 48.44 26.23C47.4333 26.74 46.6733 24.48 46.2933 24.2233C45.9067 23.97 42.9133 21.87 43.7267 23.24L46.3567 25.8567C46.2267 25.94 45.6667 24.9033 45.6667 25.66C45.8433 25.21 45.7333 27.59 45.32 26.8167C45.1367 26.52 45.62 26.3533 45.34 25.9233C45.34 25.64 44.58 25.3633 44.4333 25.17C44.0167 24.6533 42.91 23.5133 42.31 23.24C42.1433 23.1633 39.7633 23.53 39.5633 23.6067C39.33 23.9333 39.13 24.2767 38.9667 24.6433C38.4733 24.8267 38.01 25.0633 37.57 25.3567L37.0467 26.5333C36.82 26.7367 34.4967 27.5033 34.4833 27.5333C34.58 27.2833 32.86 26.9633 32.9733 26.4633C33.1 25.9133 33.6833 24.1967 33.5333 23.57C33.3733 22.9133 37.1133 24.5167 37.3533 22.7867C37.45 22.0367 37.5067 21.1633 36.31 21.0367C36.5367 21.0633 38.6267 20.2167 38.9733 19.8367C39.46 19.2767 40.5767 18.3633 41.3867 18.3633C42.3333 18.3633 42.13 16.9867 42.5667 16.3133C43.0033 16.49 42.3333 17.5667 42.8567 18.0033C42.8233 17.66 44.34 18.1933 44.4867 18.1133C44.8333 17.9333 46.7667 18.04 46.4667 17.1333C46.1333 16.21 46.6367 16.4833 47.07 16.29C46.9967 16.32 48.2033 14.2267 48.41 14.9133C48.2667 14.2067 47.0067 15.16 46.5667 15.1233C45.55 15.0433 45.98 13.39 46.3633 12.9067C46.66 12.5233 45.5533 12.0533 45.54 12.7867C45.52 13.8833 44.5 14.8767 44.7367 16.3333C45.0967 18.53 42.2867 15.8033 42.04 15.9533C41.1067 16.52 40.3433 15.24 40.8267 14.4733C41.32 13.69 42.51 13.7267 43 12.8867C43.3467 12.2933 43.75 11.6033 44.2833 11.1533C46.0667 9.65667 46.56 10.8533 48.3367 11.0167C50.0733 11.1767 48.9233 11.43 48.6833 12.0967C48.4533 12.73 49.6367 12.9567 50.0467 12.4267C50.28 12.12 50.81 11.35 51.04 10.78C51.3367 10.04 54.0433 10.1233 52.1533 8.99333C50.9067 8.25 45.4733 6.75333 41.8333 6.75333C41.0467 6.75333 40.4967 7.63 39.8967 8.12667C38.71 9.11 35.67 11.04 33.98 10.4533C32.25 9.85667 28.5467 12.6533 27.9533 12.6733C27.7367 12.6867 27.9667 10.56 29.1467 10.4033C28.6367 10.48 33.3033 8.04667 33.1767 7.54C33.0233 6.94 23.8467 10.28 24.2567 10.95C24.4533 11.2567 25.2533 11.2567 24.2033 11.93C23.6033 12.2933 22.9633 14.6 22.4 14.6C20.7167 15.3367 20.61 13.15 18.7367 15.9633L15.7567 17.1633C11.33 21.8667 8.26667 27.8233 7.15667 34.44C7.11333 34.7033 8.27 35.1933 8.42 35.3733C8.79333 35.82 8.79333 37.7467 8.97667 38.3767C9.43667 39.97 10.5733 40.8567 11.4433 42.3067C11.9567 43.17 12.81 45.3533 12.54 46.26C12.9 45.6667 16.1067 48.9767 16.6933 49.6667C18.0733 51.29 19.1367 53.2567 16.8967 54.8633C16.1733 55.3833 17.9967 58.6267 17.0567 59.4233L15.8533 59.7333C14.6667 60.4633 15.2033 62.2533 15.9233 63.0067C21.9833 69.3433 30.5233 73.2967 39.99 73.2967C58.38 73.2967 73.2867 58.39 73.2867 40ZM34.93 18.81C35.3467 18.6267 35.9067 18.6333 35.9667 18.0767C36.0167 17.5833 36.1133 17.9233 36.2333 17.7433C36.35 17.5667 36.01 17.2833 35.8667 17.2567C35.6533 17.21 35.5067 17.4867 35.37 17.6033L35.13 17.6667L34.9033 17.9567L34.93 18.1167L34.64 18.47C34.3567 18.75 34.6467 18.9333 34.93 18.81Z" fill="#DDA458"/>
                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_2', false, false); ?>
                    </p>
                </div>
                <?php endif; ?>
                <?php if(get_field('conclusion_point_3', false, false)):?>
                    <div class="keys__key fade-in">
                    <svg class="key__svg" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M43.8133 27.2367C43.6967 27.0167 44.9533 26.8967 45.1767 26.8967C45.4233 26.9267 44.5233 28.4033 43.8133 27.2367ZM36.64 16.9967L37 16.8933C37.2133 17.0767 36.76 17.21 36.83 17.3467C37.1167 17.8633 36.9 18.1733 36.8567 18.4533C36.81 18.7367 36.51 18.6133 36.36 18.7633C36.1833 18.9833 37.22 19.0133 37.2333 19.0467C37.27 19.1567 35.9833 19.3433 36.22 19.6167C36.54 20.07 38.9667 18.9667 38.58 19.03C39.33 18.6533 38.6767 18.6133 38.2567 18.3967C38.1133 17.68 37.9933 16.5733 37.5467 16.13L37.84 15.79C37.1533 14.7933 36.64 16.9967 36.64 16.9967ZM80 40C80 62.09 62.09 80 40 80C17.9067 80 0 62.09 0 40C0 17.91 17.9067 0 40 0C62.09 0 80 17.91 80 40ZM52.3 22.0967C52.28 21.61 51.6667 21.15 51.0267 21.9933C50.5767 22.5733 50.6567 23.4567 50.4133 23.85C50.0667 24.4333 52.3033 24.98 52.3033 24.43C52.3867 23.5067 54.7433 24.22 55.2033 24.3467C56.03 24.5767 57.3467 23.5933 55.9067 23.0767C54.7233 22.6433 54.1 22.18 53.9933 21.3333C53.9933 21.3333 54.62 20.7467 54.3467 20.78C53.62 20.87 52.3 23.4 52.3 22.0967ZM73.2867 40C73.2867 36.55 72.6967 33.0667 72.0967 31.2267C71.9033 30.6467 71.4667 30.1867 70.9 29.9667C70.0467 29.6333 66.4433 31.9567 65.9 30.8133C65.5433 30.05 64.82 31.3 63.9933 30.84C63.5933 30.62 62.48 29.1233 61.9767 29.3067C60.9467 29.6767 63.5567 32.52 64.27 32.8933C64.94 32.3867 67.11 31.3433 67.5767 32.7667C68.47 35.4467 65.12 38.3833 63.4067 39.93C60.8467 42.2433 61.3267 38.4333 59.5833 37.09C58.6667 36.3867 58.6767 34.89 57.75 34.3733C57.3367 34.14 55.44 31.9567 55.4567 31.6633L55.4 32.2167C55.0867 32.4533 54.42 31.3233 54.35 31.1467C54.35 32.13 55.95 33.6967 56.48 34.4833C57.3833 35.8333 57.8667 37.8 58.9733 38.9033C59.5667 39.4967 61.8333 41.95 62.4233 41.8967C63.0667 41.84 65.1 40.37 65.46 40.4533C67.6067 40.96 60.4067 51.1367 59.7233 52.3967C59.16 53.4533 60.1833 56.0667 60.1 57.3167C60.0033 58.76 58.8667 59.2267 57.79 60.0133C56.6367 60.8567 56.9067 62.4967 55.9367 63.0967C54.2133 64.1567 52.9733 67.6067 50.5267 67.59C49.8067 67.5867 46.7267 68.79 46.3233 67.6133C46.01 66.76 45.59 66.1133 45.1467 65.27C44.7133 64.4433 45.0967 63.5867 44.57 62.8567C44.2067 62.35 42.9867 61.2 42.8767 60.6C42.87 60.0833 43.2667 58.5133 43.81 58.24C44.5733 57.85 43.9567 56.7133 43.8633 56.0533C43.7033 54.8733 42.9733 53.9 42.0967 53.2167C40.8 52.22 41.47 51.4267 41.7733 50.0033C41.7733 49.3233 41.36 48.43 40.4467 48.6967C38.5667 49.2433 39.1367 47.23 37.7667 47.32C36.78 47.39 35.9733 48.0167 35.0567 48.2933C33.9033 48.64 32.7233 48.02 31.5833 47.8767C26.8933 47.2833 25.3633 41.9233 26.5867 38.0567C26.71 37.4233 26.2067 36.25 26.4267 35.76C26.9533 34.5867 28.0267 33.27 28.9667 32.38C29.4933 31.88 30.17 32.0067 30.79 31.6167C31.7467 31.0133 31.76 29.7733 32.6967 29.0133C34.03 27.93 35.85 27.9533 37.59 27.72C38.5167 27.5967 42.0433 26.8333 42.6 27.52C42.6 27.6467 43.2367 29.5333 42.5367 29.4267C43.98 29.5033 46.0367 31.9233 47.4067 31.3567C48.11 31.0633 47.8533 28.9033 49.2967 29.9467C50.17 30.5733 54.0833 30.8533 54.8967 30.1767C55.3967 29.7633 55.6767 27.0767 55.07 26.7733C55.4567 27.1567 53.0333 27.1867 52.8067 27.1C52.4067 26.9533 52.0333 27.48 51.39 27.1833C51.7767 27.3667 49.2367 26.0033 50.6633 24.96C50.0667 25.3967 49.51 24.8367 48.8667 25.3167C48.4233 25.6767 49.0733 25.9167 48.44 26.23C47.4333 26.74 46.6733 24.48 46.2933 24.2233C45.9067 23.97 42.9133 21.87 43.7267 23.24L46.3567 25.8567C46.2267 25.94 45.6667 24.9033 45.6667 25.66C45.8433 25.21 45.7333 27.59 45.32 26.8167C45.1367 26.52 45.62 26.3533 45.34 25.9233C45.34 25.64 44.58 25.3633 44.4333 25.17C44.0167 24.6533 42.91 23.5133 42.31 23.24C42.1433 23.1633 39.7633 23.53 39.5633 23.6067C39.33 23.9333 39.13 24.2767 38.9667 24.6433C38.4733 24.8267 38.01 25.0633 37.57 25.3567L37.0467 26.5333C36.82 26.7367 34.4967 27.5033 34.4833 27.5333C34.58 27.2833 32.86 26.9633 32.9733 26.4633C33.1 25.9133 33.6833 24.1967 33.5333 23.57C33.3733 22.9133 37.1133 24.5167 37.3533 22.7867C37.45 22.0367 37.5067 21.1633 36.31 21.0367C36.5367 21.0633 38.6267 20.2167 38.9733 19.8367C39.46 19.2767 40.5767 18.3633 41.3867 18.3633C42.3333 18.3633 42.13 16.9867 42.5667 16.3133C43.0033 16.49 42.3333 17.5667 42.8567 18.0033C42.8233 17.66 44.34 18.1933 44.4867 18.1133C44.8333 17.9333 46.7667 18.04 46.4667 17.1333C46.1333 16.21 46.6367 16.4833 47.07 16.29C46.9967 16.32 48.2033 14.2267 48.41 14.9133C48.2667 14.2067 47.0067 15.16 46.5667 15.1233C45.55 15.0433 45.98 13.39 46.3633 12.9067C46.66 12.5233 45.5533 12.0533 45.54 12.7867C45.52 13.8833 44.5 14.8767 44.7367 16.3333C45.0967 18.53 42.2867 15.8033 42.04 15.9533C41.1067 16.52 40.3433 15.24 40.8267 14.4733C41.32 13.69 42.51 13.7267 43 12.8867C43.3467 12.2933 43.75 11.6033 44.2833 11.1533C46.0667 9.65667 46.56 10.8533 48.3367 11.0167C50.0733 11.1767 48.9233 11.43 48.6833 12.0967C48.4533 12.73 49.6367 12.9567 50.0467 12.4267C50.28 12.12 50.81 11.35 51.04 10.78C51.3367 10.04 54.0433 10.1233 52.1533 8.99333C50.9067 8.25 45.4733 6.75333 41.8333 6.75333C41.0467 6.75333 40.4967 7.63 39.8967 8.12667C38.71 9.11 35.67 11.04 33.98 10.4533C32.25 9.85667 28.5467 12.6533 27.9533 12.6733C27.7367 12.6867 27.9667 10.56 29.1467 10.4033C28.6367 10.48 33.3033 8.04667 33.1767 7.54C33.0233 6.94 23.8467 10.28 24.2567 10.95C24.4533 11.2567 25.2533 11.2567 24.2033 11.93C23.6033 12.2933 22.9633 14.6 22.4 14.6C20.7167 15.3367 20.61 13.15 18.7367 15.9633L15.7567 17.1633C11.33 21.8667 8.26667 27.8233 7.15667 34.44C7.11333 34.7033 8.27 35.1933 8.42 35.3733C8.79333 35.82 8.79333 37.7467 8.97667 38.3767C9.43667 39.97 10.5733 40.8567 11.4433 42.3067C11.9567 43.17 12.81 45.3533 12.54 46.26C12.9 45.6667 16.1067 48.9767 16.6933 49.6667C18.0733 51.29 19.1367 53.2567 16.8967 54.8633C16.1733 55.3833 17.9967 58.6267 17.0567 59.4233L15.8533 59.7333C14.6667 60.4633 15.2033 62.2533 15.9233 63.0067C21.9833 69.3433 30.5233 73.2967 39.99 73.2967C58.38 73.2967 73.2867 58.39 73.2867 40ZM34.93 18.81C35.3467 18.6267 35.9067 18.6333 35.9667 18.0767C36.0167 17.5833 36.1133 17.9233 36.2333 17.7433C36.35 17.5667 36.01 17.2833 35.8667 17.2567C35.6533 17.21 35.5067 17.4867 35.37 17.6033L35.13 17.6667L34.9033 17.9567L34.93 18.1167L34.64 18.47C34.3567 18.75 34.6467 18.9333 34.93 18.81Z" fill="#DDA458"/>
                    </svg>
                    <p class="key__text">
                        <?= get_field('conclusion_point_3', false, false); ?>
                    </p>
                </div>
                <?php endif; ?>
            </div>
        </article>
        <?php endif; ?>
        <article class="main__promotion" aria-labelledby="promotion<?= get_the_title(); ?>">
            <h3 class="promotion__title fade-in" aria-level="3" id="promotion<?= get_the_title(); ?>"><?= __('Pour aller plus loin !','atmosphair') ?></h3>
            <p class="promotion__text fade-in">
                <?= __('Vous vous intéressez à l’électronique, aux systèmes embarqués ou vous souhaitez juste en apprendre plus sur notre section ? Venez jeter un oeil à notre section sur le site de la ','atmosphair') . '<span  itemprop="parentOrganization">' . __('Haute École de la Province de Liège !','atmosphair') . '</span>' ?>
            </p>
            <img class="promotion__image fade-in" src="<?= get_template_directory_uri(); ?>/src/images/hepl.jpg" alt="Bâtiment de la HEPL">
            <a class="promotion__link fade-in" href="https://www.hepl.be/fr/master-ingenieur-industriel/electronique-systemes-embarques"><?= __('Visiter le site de la HEPL','atmosphair') ?></a>
        </article>
        <section class="layout" aria-labelledby="others<?= get_the_title(); ?>">
            <h3 class="others__title fade-in" aria-level="3" id="others<?= get_the_title(); ?>"><?= __('Nos autres projets','atmosphair') ?></h3>
            <ul class="projects__list">
                <?php if(($modules = atmos_get_modules_for_index(6))->have_posts()): while($modules->have_posts()): $modules->the_post();
                    include (__DIR__ . '/partials/module.php');
                endwhile; else:  ?>
                    <p class="projects__error"><?= __('Il n\'y a pas de modules à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
                <?php endif; ?>
            </ul>
        </section>
        <a class="main__arrow" href="#top">V</a>
    </main>
<?= get_footer(); ?>