<?php /* Template Name: Template page Contact */ ?>
<?php get_header(); ?>
    <main class="mainContact" aria-labelledby="contactTitle">
        <h2 class="main__title" aria-level="2" id="contactTitle"><?= __('Une question ? Contactez-nous !','atmosphair') ?></h2>
        <section class="main__contact" aria-labelledby="contactContainer">
            <h3 class="contact__title fade-in" aria-level="3" id="contactContainer"><?= __('Remplissez le formulaire ou utilisez l’un de nos nombreux moyens de contact !','atmosphair') ?></h3>
            <div class="contact__infos fade-in" itemscope itemtype="https://schema.org/Organization" aria-labelledby="contactHepl">
                <h4 class="infos__title" itemprop="name" aria-level="4" id="contactHepl">HEPL</h4>
                <p class="infos__adress">Rue Peetermans 80<br>4100 Seraing</p>
                <p class="infos__phone">+32 (0)4 279 75 00</p>
                <a href="mailto: hepl@provincedeliege.be">hepl@provincedeliege.be</a>
                <a class="infos__link" href="https://www.hepl.be/fr"><?= __('Site de la HEPL','atmosphair') ?></a>
            </div>
            <div class="contact__infos fade-in" itemscope itemtype="https://schema.org/Organization" aria-labelledby="contactIssep">
                <h4 class="infos__title" itemprop="name" aria-level="4" id="contactIssep">ISSeP</h4>
                <p class="infos__adress">Rue du Chéra 200<br>4000 Liège</p>
                <p class="infos__phone">04/229.83.67</p>
                <a href="mailto: g.gerard@issep.be">g.gerard@issep.be</a>
                <a class="infos__link" href="https://www.issep.be/"><?= __('Site de l\'ISSeP','atmosphair') ?></a>
            </div>
            <div class="infos__promo fade-in">
                <p class="infos__text">
                    <?= __('Tu t’intéresses à l’électronique et aux systèmes embarqués ?','atmosphair') ?>
                </p>
                <a class="infos__link fade-in" href="https://www.hepl.be/fr/master-ingenieur-industriel/electronique-systemes-embarques"><?= __('Visite la page d’inscription de la HEPL','atmosphair') ?></a>
            </div>
            <?= do_shortcode('[contact-form-7 id="244" title="Formulaire index"]') ?>
        </section>
        <section class="main__socials" aria-labelledby="contactSocials">
            <h3 class="socials__title fade-in" aria-level="3" id="contactSocials"><?= __('Suivez-nous sur nos réseaux sociaux !') ?></h3>
            <ul class="socials__list fade-in">
                <?php if(($socials = atmos_get_socials(2))->have_posts()): while($socials->have_posts()): $socials->the_post();
                    include (__DIR__ . '/partials/social.php');
                endwhile; else:  ?>
                    <p class="projects__error"><?= __('Il n\'y a pas de réseau social à afficher pour le moment, revenez plus tard.','atmosph\'air'); ?></p>
                <?php endif; ?>
            </ul>
        </section>
    </main>
<?php get_footer(); ?>