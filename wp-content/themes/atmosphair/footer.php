<footer class="footer" aria-labelledby="footerTitle">
    <div class="footer__container">
        <h2 class="footer__title hidden" aria-level="2" id="footerTitle"><?= __('Pied de page', 'atmosph\'air'); ?></h2>
        <ul class="footer__list">
            <?php foreach(atmos_get_menu_items('footer') as $link): ?>
                <li class="footer__item">
                    <a class="footer__link" href="<?= $link->url; ?> <?= $link->title ? ' title="'.$link->title.'"' : ''; ?>">
                        <?= __($link->label, 'atmosph\'air'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <section class="footer__coordinate" aria-labelledby="coordinateTitle">
            <h3 class="coordinate__title" aria-level="3" id="coordinateTitle"><?= __('Coordonées de contact', 'atmosph\'air') ?></h3>
            <div class="coordinate__div" aria-labelledby="footerHepl">
                <h4 class="coordinate__subtitle" aria-level="4" id="footerHepl">HEPL</h4>
                <p class="coordinate__adress">Rue Peetermans 80<br>4100 Seraing</p>
                <p class="coordinate__phone">+32 (0)4 279 75 00</p>
                <a class="coordinate__mail" href="mailto: hepl@provincedeliege.be">hepl@provincedeliege.be</a>
            </div>
            <div class="coordinate__div" aria-labelledby="footerIssep">
                <h4 class="coordinate__subtitle" aria-level="4" id="footerIssep">ISSeP</h4>
                <p class="coordinate__adress">Rue du Chéra 200<br>4000 Liège</p>
                <p class="coordinate__phone">04/229.83.67</p>
                <a class="coordinate__mail" href="mailto: g.gerard@issep.be">g.gerard@issep.be</a>
            </div>
        </section>
        <section class="footer__logos" aria-labelledby="footerLogo">
            <h3 class="logos__title hidden" aria-level="3" id="footerLogo"><?= __('Logos des acteurs du projet', 'atmosph\'air'); ?></h3>
            <div class="logos__image">
                <a class="logos__link" href="https://www.hepl.be/fr">
                    <img class="logos__svg" src="<?= get_template_directory_uri(); ?>/src/images/hepl.svg" alt="<?= __('Logo HEPL', 'atmosph\'air'); ?>">
                </a>
            </div>
            <div class="logos__image">
                <a class="logos__link" href="https://www.issep.be/">
                    <img class="logos__svg" src="<?= get_template_directory_uri(); ?>/src/images/issep.svg" alt="<?= __('Logo ISSeP', 'atmosph\'air'); ?>">
                </a>
            </div>
            <div class="logos__image">
                <a class="logos__link" href="https://www.hepl.be/fr/master-ingenieur-industriel/electronique-systemes-embarques">
                    <img class="logos__svg" src="<?= get_template_directory_uri(); ?>/src/images/section_electronique.svg" alt="<?= __('Logo Section électronique', 'atmosph\'air'); ?>">
                </a>
            </div>
        </section>
    </div>
    <section class="footer__privacy" aria-labelledby="footerPrivacy">
        <h3 class="privacy__title hidden" aria-level="3" id="footerPrivacy"><?= __('Politique de confidentialité', 'atmosph\'air'); ?></h3>
        <a class="privacy__link" href="<?= site_url('politique-de-confidentialite/'); ?>"><?= __('Politique de confidentialité', 'atmosph\'air'); ?></a>
        <p class="privacy__text">
            © Atmosph'air - 2022
        </p>
    </section>
</footer>
</body>
</html>