<?php /* Template Name: Template page Contact */ ?>
<?php get_header(); ?>
    <main class="mainContact">
        <h2 class="main__title fade-in"><?= __('Une question ? Contactez-nous !','atmosphair') ?></h2>
        <section class="main__contact">
            <h3 class="contact__title fade-in"><?= __('Remplissez le formulaire ou utilisez l’un de nos nombreux moyens de contact !','atmosphair') ?></h3>
            <div class="contact__infos fade-in" itemscope itemtype="https://schema.org/Organization">
                <h4 class="infos__title" itemprop="name">HEPL</h4>
                <p class="infos__adress">Rue Peetermans 80<br>4100 Seraing</p>
                <p class="infos__phone">+32 (0)4 279 75 00</p>
                <a href="mailto: hepl@provincedeliege.be">hepl@provincedeliege.be</a>
                <a class="infos__link" href="https://www.hepl.be/fr"><?= __('Site de la HEPL','atmosphair') ?></a>
            </div>
            <div class="contact__infos fade-in" itemscope itemtype="https://schema.org/Organization">
                <h4 class="infos__title" itemprop="name">ISSeP</h4>
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
            <form class="contact__form">
                <div class="fade-in">
                    <label class="contact__label" for="name"><?= __('Votre nom','atmosphair'); ?></label>
                    <input class="contact__input" id="name" name="name" placeholder="<?= __('Nom','atmosphair'); ?>" required>
                </div>
                <div class="fade-in">
                    <label class="contact__label" for="firstname"><?= __('Votre prénom','atmosphair'); ?></label>
                    <input class="contact__input" id="firstname" name="firstname" placeholder="<?= __('Prénom','atmosphair'); ?>" required>
                </div>
                <div class="fade-in">
                    <label class="contact__label" for="mail"><?= __('Votre adresse mail','atmosphair'); ?></label>
                    <input class="contact__input" id="mail" name="mail" placeholder="<?= __('nom.prénom@email.com','atmosphair'); ?>" required>
                </div>
                <div class="fade-in">
                    <label class="contact__label" for="subject"><?= __('Sujet','atmosphair'); ?></label>
                    <select class="contact__select" id="subject" name="subject">
                        <option value="issep"><?= __('Question à propos des résultats','atmosphair'); ?></option>
                        <option value="hepl"><?= __('Question à propos de la section électronique et systèmes embarqués','atmosphair'); ?></option>
                        <option value="issep"><?= __('Achat pour le secteur privé','atmosphair'); ?></option>
                        <option value="issep"><?= __('Achat pour le secteur public','atmosphair'); ?></option>
                    </select>
                </div>
                <div class="fade-in">
                    <label class="contact__label" for="message"><?= __('Votre message','atmosphair'); ?></label>
                    <textarea class="contact__input" id="message" name="message" placeholder="<?= __('Écrivez votre message ici','atmosphair'); ?>" required></textarea>
                </div>
                <input class="contact__submit fade-in" type="submit">
            </form>
        </section>
        <section class="main__socials">
            <h3 class="socials__title fade-in"><?= __('Suivez-nous sur nos réseaux sociaux !') ?></h3>
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