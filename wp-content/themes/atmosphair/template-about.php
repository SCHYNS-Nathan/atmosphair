<?php /* Template Name: Template page À propos */ ?>
<?php get_header(); ?>
    <main class="main">
        <h2 class="main__title">Nous nous engageons à faire des trucs !</h2>
        <video class="main__video" width="" height="" controls>
            <source src="" type="">
            Votre navigateur ne supporte pas les balises vidéos.
        </video>
        <section class="main__actors">
            <h3 class="actors__title">Les acteurs du projet</h3>
                <?php if(($actors = atmos_get_actors(2))->have_posts()): while($actors->have_posts()): $actors->the_post();
                    include (__DIR__ . '/partials/actor.php');
                endwhile; else:  ?>

                <?php endif; ?>
        </section>
        <section class="main__morals">
            <h3 class="morals__title">Nos valeurs</h3>
            <?php if(($morals = atmos_get_morals(3))->have_posts()): while($morals->have_posts()): $morals->the_post();
                include (__DIR__ . '/partials/moral.php');
            endwhile; else:  ?>

            <?php endif; ?>
        </section>
        <section class="main__timeline">
            <h3 class="timeline__title">Petit historique du projet</h3>



            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>2015</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Janvier 2016</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna.
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Juin 2016</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felisas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felisas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Août 2016</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Novembre 2017</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>2018</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Février 2020</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Mars 2022</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>
            <div class="timeline__entry" itemscope itemtype="https://schema.org/Event">
                <h4 class="timeline__date" itemprop="startData"><time>Mai 2022</time></h4>
                <p class="timeline__text" itemprop="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
                <img class="timeline__image" src="" alt="Photo du projet">
            </div>



        </section>
    </main>
<?php get_footer(); ?>
