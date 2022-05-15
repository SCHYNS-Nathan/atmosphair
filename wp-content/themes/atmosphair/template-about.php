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


            <div class="actors__actor" itemscope itemtype="https://schema.org/Organization">
                <h4 class="actor__title" itemprop="name">La Haute École de la Province de Liège (HEPL)</h4>
                <p class="actor__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                    dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
                </p>
                <img class="actor__image" src="" alt="Batiment de la Haute École de la Province de Liège" itemprop="image">
                <a class="actor__link" href="#">Visiter le site de la HEPL</a>
            </div>
            <div class="actors__actor" itemscope itemtype="https://schema.org/Organization">
                <h4 class="actor__title" itemprop="name">L'Institut Scientifique de Service Publique (ISSeP)</h4>
                <p class="actor__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                    dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
                </p>
                <img class="actor__image" src="" alt="Batiment de l'Institut Scientifique de Service Publique" itemprop="image">
                <a class="actor__link" href="#">Visiter le site de l'ISSeP</a>
            </div>



        </section>
        <section class="main__morals">
            <h3 class="morals__title">Nos valeurs</h3>
            <?php if(($morals = atmos_get_morals(3))->have_posts()): while($morals->have_posts()): $morals->the_post();
                include (__DIR__ . '/partials/moral.php');
            endwhile; else:  ?>

            <?php endif; ?>


            <div class="morals__moral">
                <svg class="morals__svg"></svg>
                <h4 class="morals__title">Écologie</h4>
                <p class="morals__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
            </div>
            <div class="morals__moral">
                <svg class="morals__svg"></svg>
                <h4 class="morals__title">Technologie</h4>
                <p class="morals__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
            </div>
            <div class="morals__moral">
                <svg class="morals__svg"></svg>
                <h4 class="morals__title">Accueillant</h4>
                <p class="morals__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
                </p>
            </div>



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
