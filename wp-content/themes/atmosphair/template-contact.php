<?php /* Template Name: Template page Contact */ ?>
<?php get_header(); ?>
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <main class="main">
        <h2 class="main__title">Une question ? Contactez-nous !</h2>
        <section class="main__contact">
            <h3 class="contact__title">Remplissez le formulaire ou utilisez l’un de nos nombreux moyens de contact !</h3>
            <div class="contact__infos" itemscope itemtype="https://schema.org/Organization">
                <h4 class="infos__title" itemprop="name">HEPL</h4>
                <p class="infos__address" itemprop="adress">
                    Rue Trucmachin n°3
                    4332 Seraing Belgique
                </p>
                <p class="infos__phone" itemprop="telephone">
                    +32 45 65 76 8
                </p>
                <p class="infos__mail" itemprop="email">
                    nom-prénom@email.com
                </p>
                <a class="infos__link">Site de la HEPL</a>
            </div>
            <div class="contact__infos" itemscope itemtype="https://schema.org/Organization">
                <h4 class="infos__title" itemprop="name">ISSeP</h4>
                <p class="infos__address" itemprop="adress">
                    Rue Trucmachin n°3
                    4332 Seraing Belgique
                </p>
                <p class="infos__phone" itemprop="telephone">
                    +32 45 65 76 8
                </p>
                <p class="infos__mail" itemprop="email">
                    nom-prénom@email.com
                </p>
                <a class="infos__link">Site de l'ISSeP</a>
            </div>
            <div class="infos__promo">
                <p class="infos__text">
                    Tu t’intéresses à l’électronique et aux systèmes embarqués ?
                </p>
                <a class="infos__link">Visite la page d’inscription de la HEPL</a>
            </div>
            <form class="contact__form">
                <label class="contact__label" for="name">Votre nom</label>
                <input class="contact__input" id="name" name="name">

                <label class="contact__label" for="firstname">Votre prénom</label>
                <input class="contact__input" id="firstname" name="firstname">

                <label class="contact__label" for="mail">Votre adresse mail</label>
                <input class="contact__input" id="mail" name="mail">

                <label class="contact__label" for="subject">Sujet</label>
                <select class="contact__select" id="subject" name="subject">
                    <option value="issep">Question à propos des résultats</option>
                    <option value="hepl">Question à propos de la section électronique et systèmes embarqués</option>
                    <option value="issep">Achat pour le secteur privé</option>
                    <option value="issep">Achat pour le secteur public</option>
                </select>

                <label class="contact__label" for="message">Votre message</label>
                <input class="contact__input" id="message" name="message">

                <input class="contact__submit" type="submit">
            </form>
        </section>
        <section class="main__socials">
            <h3 class="socials__title">Suivez-nous sur nos réseaux sociaux !</h3>
            <ul class="socials__list">
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__svg">

                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__svg">

                        </svg>
                    </a>
                </li>
                <li class="socials__item">
                    <a class="socials__link">
                        <svg class="socials__svg">

                        </svg>
                    </a>
                </li>
            </ul>
        </section>
    </main>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>