    <footer class="footer">
        <h2 class="footer__title"><?= __('Pied de page', 'atmosph\'air'); ?></h2>
        <ul class="footer__list">
            <?php foreach(atmos_get_menu_items('footer') as $link): ?>
                <li class="footer__item">
                    <a class="footer__link" href="<?= $link->url; ?> <?= $link->title ? ' title="'.$link->title.'"' : ''; ?>">
                        <?= __($link->label, 'atmosph\'air'); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <section class="footer__coordinate">
            <h3 class="coordinate__title"><?= __('Coordonées de contact', 'atmosph\'air') ?></h3>
            <div class="coordinate__div">
                <h4 class="coordinate__hepl">HEPL</h4>
                <p class="coordinate__adress">Rue Peetermans 80<br>4100 Seraing</p>
                <p class="coordinate__phone">+32 (0)4 279 75 00</p>
                <a href="mailto: hepl@provincedeliege.be">hepl@provincedeliege.be</a>
            </div>
            <div class="coordinate__div">
                <h4 class="coordinate__issep">ISSeP</h4>
                <p class="coordinate__adress">Rue du Chéra 200<br>4000 Liège</p>
                <p class="coordinate__phone">04/229.83.67</p>
                <a href="mailto: g.gerard@issep.be">g.gerard@issep.be</a>
            </div>
        </section>
        <section class="footer__logos">
            <h3 class=logos__title""><?= __('Logos des acteurs du projet', 'atmosph\'air') ?></h3>

            <div class="logos__image">
                <a class="logos__link" href=""></a>
                <img src="<?= get_template_directory_uri(); ?>/images/" alt="">
            </div>

        </section>
    </footer>
</body>
</html>