<?php get_header(); ?>

<main class="layout">
    <h2 class="main__title">Pour un air plus sain au coeur de la ville !</h2>
    <!-- <img class="main__image" src="" alt="Un parc avec des arbres aux feuilles jaunes au coeur d'une ville"> BACKGROUND IMAGE ??? -->
    <section class="main__stats">
        <h3 class="stats__title">La polution en quelques chiffres</h3>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>50%</strong>
            </p>
            <p class="stats__text">
                de taux de <em>particule fine</em> ont été détecté dans les embouteillages des grandes villes belges en 2018.
            </p>
        </div>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>+33%</strong>
            </p>
            <p class="stats__text">
                d’augmentation de <em>la polution de l’air</em> entre 2019 et 2020.
            </p>
        </div>
        <div class="stats__stat">
            <p class="stats__number">
                <strong>x5</strong>
            </p>
            <p class="stats__text">
                le nombre de personnes diagnostiquées avec des <em>maladies respiratoires</em> en 2021.
            </p>
        </div>
    </section>
    <section class="main__presentation">
        <h3 class="presentation__title">L’air joue un rôle <em>primordial</em> pour la vie telle que nous la connaissons sur terre.</h3>
        <p class="presentation__text">
            Une mauvaise qualité de l’air a une incidence négative sur la santé humaine et sur l’environnement au sens large. Ses conséquences sont non seulement de nature sanitaire, écologique et économique mais aussi du point de vue humain :
        </p>
        <p class="presentation__conclusion">
            Disposer d’un <em>air de qualité</em> et <em>sain</em> doit être <em>un droit fondamental !</em>
        </p>
    </section>
    <section class="main__actors">
        <h3 class="actors__title">Les acteurs du projet</h3>
        <img class="actors__image" src="" alt="Du personnel de l'ISSeP et des étudiant de la HEPL ayant travaillés sur Antilope">
        <p class="actors__text">
            Afin que ce droit soit respecté, la section Électronique & Systèmes Embarqués de la Haute École de la Province de Liège (HEPL) s’est alliée à l’Institut Scientifique de Service Publique (ISSeP) pour créer une gamme de capteurs d’air.
        </p>
        <a class="actors__link" href="">Les acteurs du projet</a>
    </section>
    <section class="main__projects">
        <h3 class="projects__title">Découvrez nos projets !</h3>
        <a class="projects__link">Voir tous nos projets</a>
        <ul class="projects__list">
            <?php
                if(($modules = atmosphair_get_module(5))->have_posts()): while($modules->have_posts()): $modules->the_post();
                    dw_include('module');
            endwhile; else: ?>
                <p class="projects__empty"><?= __('Il n\'y a pas de modules à afficher.', 'atmosph\'air') ?></p>
            <?php endif; ?>



            <li class="projects__item" itemscope itemtype="https://schema.org/Project">
                <article class="projects__projet">
                    <img class="projet__image" src="" alt="Le boîtier du projet Antilope" itemprop="image">
                    <h4 class="projet__title" itemprop="name"></h4>
                    <svg class="projet__svg">

                    </svg>
                    <p class="projet__description" itemprop="description">
                        Le compagnon de poche qui analyse l’état de l’air durant vos promenade !
                    </p>
                    <a class="projet__link" href="template-single-project.php">Voir le projet en détail</a>
                </article>
            </li>



            <li class="projects__item" itemscope itemtype="https://schema.org/Project">
                <article class="projects__projet">
                    <img class="projet__image" src="" alt="Le boîtier du projet Saïga" itemprop="image">
                    <h4 class="projet__title" itemprop="name">Saïga</h4>
                    <svg class="projet__svg">

                    </svg>
                    <p class="projet__description" itemprop="description">
                        Plus précis et autonome, il est l’ami des villes !
                    </p>
                    <a class="projet__link" href="template-single-project.php">Voir le projet en détail</a>
                </article>
            </li>
            <li class="projects__item" itemscope itemtype="https://schema.org/Project">
                <article class="projects__projet">
                    <img class="projet__image" src="" alt="Le boîtier du projet Impala" itemprop="image">
                    <h4 class="projet__title" itemprop="name">Impala</h4>
                    <svg class="projet__svg">

                    </svg>
                    <p class="projet__description" itemprop="description">
                        Le copilote rêvé de tout automobiliste !
                    </p>
                    <a class="projet__link" href="template-single-project.php">Voir le projet en détail</a>
                </article>
            </li>
            <li class="projects__item" itemscope itemtype="https://schema.org/Project">
                <article class="projects__projet">
                    <img class="projet__image" src="" alt="Le boîtier du projet Oryx" itemprop="image">
                    <h4 class="projet__title" itemprop="name">Oryx</h4>
                    <svg class="projet__svg">

                    </svg>
                    <p class="projet__description" itemprop="description">
                        L’outerboard fixe qui capte son, mouvement et particules !
                    </p>
                    <a class="projet__link" href="template-single-project.php">Voir le projet en détail</a>
                </article>
            </li>
            <li class="projects__item" itemscope itemtype="https://schema.org/Project">
                <article class="projects__projet">
                    <img class="projet__image" src="" alt="Le boîtier du projet Nyala" itemprop="image">
                    <h4 class="projet__title" itemprop="name">Nyala</h4>
                    <svg class="projet__svg">

                    </svg>
                    <p class="projet__description" itemprop="description">
                        Le module destiné aux étudiants !
                    </p>
                    <a class="projet__link" href="template-single-project.php">Voir le projet en détail</a>
                </article>
            </li>



            <li class="projects__item">
                <div class="projects__projet">
                    <svg class="projet__svg">

                    </svg>
                    <a class="projet__link" href="template-projects.php">Voir tous nos projet</a>
                </div>
            </li>
        </ul>
    </section>
    <section class="main__articles">
        <h3 class="articles__title">On parle de nous !</h3>
        <a class="articles__link">Voir toutes les publications</a>
        <div class="articles__container">



                <article class="article" itemscope itemtype="https://schema.org/Article">
                    <a class="article__link" href="">Lire la publication</a>
                    <div class="articles__article">
                        <figure class="article__image">

                        </figure>
                        <h4 class="article__title" itemprop="name"><?= get_the_title(); ?></h4>
                    </div>
                    <p class="article__text">
                        <time class="article__time" itemprop="datePublished">10 mars 2022</time>
                    </p>
                </article>



        </div>
        <div class="articles__container">
            <a class="article__link" href="template-articles.php">
                <img class="article__image" src="" alt="Image bannière de l'article">
                <h4 class="article__title">Voir toutes les publications nous concernant</h4>
            </a>
        </div>
    </section>
    <section class="main__contact">
        <h3 class="contact__title">Une question ? Contactez-nous !</h3>
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







    <section class="layout__latest latest">
        <h2 class="latest__title"><?= __('Mes derniers articles', 'atmosphair'); ?></h2>
        <div class="latest__container">
            <?php 
            if(have_posts()): while(have_posts()): the_post();
                dw_include('post', ['modifier' => 'index']);
            endwhile; else: ?>
                <!-- Il n'y a pas d'articles à afficher -->
            <?php endif; ?>
        </div>
    </section>

    <section class="layout__trips trips">
        <h2 class="trips__title"><?= __('Mes derniers voyages', 'atmosphair'); ?></h2>
        <div class="trips__container">
            <?php 
            if(($trips = dw_get_trips(3))->have_posts()): while($trips->have_posts()): $trips->the_post();
                dw_include('trip');
            endwhile; else: ?>
            <p class="trips__empty"><?= __('Il n’y a pas de voyages à vous raconter...', 'atmosphair'); ?></p>
            <?php endif; ?>
        </div>
    </section>







</main>

<?php get_footer(); ?>