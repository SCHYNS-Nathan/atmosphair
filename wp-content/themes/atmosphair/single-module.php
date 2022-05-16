<?php /* Template Name: Template page Projet */ ?>

<?= get_header(); ?>
    <main class="main" itemscope itemtype="https://schema.org/Project">
      <a class="main__return" href="<?= site_url('projets/'); ?>">Retour à la page projets</a>
      <img class="main__image" src="" alt="Boîtier Antilope" itemprop="image">
      <div class="main__title">
        <h2 class="title__title" itemprop="name"><?= get_the_title(); ?></h2>
        <svg class="title__svg">

        </svg>
      </div>
      <article class="main__what">
        <h3 class="what__title">Antilope, c'est quoi ?</h3>
        <p class="what__text" itemprop="description">
          Texte descriptif sur c’est quoi Antilope :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec. Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis
          dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum. Sed id nisi laoreet, fermentum risus vel, rhoncus turpis. Praesent sed hendrerit leo, sit amet vestibulum mi. In pulvinar purus mi, sed ultrices sapien iaculis at.
        </p>
      </article>
      <article class="main__why">
        <h3 class="why__title">Pourquoi ce dispositif ?</h3>
        <p class="why__text">
          Texte descriptif sur les objectifs d’Antilope :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
          Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor.
        </p>
      </article>
      <article class="main__technicals">
        <h3 class="technicals__title">Fiche technique du projet</h3>
      </article>
      <article class="main__how">
        <h3 class="how__title">Comment ça marche ?</h3>
        <ol class="how__list">
          <li class="how__item">
            <h4 class="how__step" itemprop="potentialAction">Capter</h4>
            <p class="how__description">
              Texte descriptif sur comment marche Antilope (1) :
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
              Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
            </p>
            <svg class="how__svg">

            </svg>
          </li>
          <li class="how__item">
            <h4 class="how__step" itemprop="potentialAction">Analyser</h4>
            <p class="how__description">
              Texte descriptif sur comment marche Antilope (2) :
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
              Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
            </p>
            <svg class="how__svg">

            </svg>
          </li>
          <li class="how__item">
            <h4 class="how__step" itemprop="potentialAction">Compiler</h4>
            <p class="how__description">
              Texte descriptif sur comment marche Antilope (3) :
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
              Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
            </p>
            <svg class="how__svg">

            </svg>
          </li>
          <li class="how__item">
            <h4 class="how__step" itemprop="potentialAction">Résultat</h4>
            <p class="how__description">
              Texte descriptif sur comment marche Antilope (4) :
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
              Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor. Vestibulum feugiat gravida lectus congue placerat. Maecenas lacinia ut risus sed feugiat. Cras accumsan purus sed vestibulum bibendum.
            </p>
            <svg class="how__svg">

            </svg>
          </li>
        </ol>
      </article>
      <article class="main__who">
        <h3 class="who__title">À qui est-il destiné ?</h3>
        <p class="who__text">
          Texte descriptif sur à qui est destiné d’Antilope :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.

          Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor.
        </p>
        <div class="who__group">
          <svg class="who__svg">

          </svg>
          <p class="who__characteristic">
            Pour tous
          </p>
        </div>
        <div class="who__group">
          <svg class="who__svg">

          </svg>
          <p class="who__characteristic">
            Mobile
          </p>
        </div>
        <div class="who__group">
          <svg class="who__svg">

          </svg>
          <p class="who__characteristic">
            Particules fines
          </p>
        </div>
      </article>
      <article class="main__result">
        <h3 class="result__title">Ca donne quoi au final ?</h3>
        <p class="result__text">
          Texte descriptif sur les résultats d’Antilope :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
          Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor.Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci.
        </p>
        <figure class="result__map">
          <img class="map__image" src="" alt="Données de la carte en alt">
          <figcaption class="map__legend">Légende de la carte + <time>date</time></figcaption>
        </figure>
        <div class="result__number">
          <p class="number__number">
            <strong>50%</strong>
          </p>
          <p class="number__text">
            de CO2 en plus.
          </p>
        </div>
        <div class="result__number">
          <p class="number__number">
            <strong>10x</strong>
          </p>
          <p class="number__text">
            plus de particules fines.
          </p>
        </div>
        <div class="result__number">
          <p class="number__number">
            <strong>20T</strong>
          </p>
          <p class="number__text">
            de carbone/belge.
          </p>
        </div>
        <a class="result__link" href="#">Voir les données complètes</a>
      </article>
      <article class="main__composition">
        <h3 class="composition__title">Composition de l’air en Belgique</h3>
        <p class="composition__text">
          Texte descriptif sur la composition de l'air en Belgique :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
          Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor.Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci.
        </p>
        <svg class="composition__svg">

        </svg>
        <a class="composition__link" href="#">Voir les données complètes</a>
      </article>
      <article class="main__conclusion">
        <h3 class="conclusion__title">Conclusion, que retenir de tout ça ?</h3>
        <p class="conclusion__text">
          Conclusion sur le projet :
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo elit, luctus vitae dolor ac, cursus luctus magna. Donec imperdiet auctor nulla, sed porta justo hendrerit nec.
          Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. Suspendisse ullamcorper urna nec elit dignissim, nec malesuada tellus porttitor.Maecenas finibus, libero dapibus venenatis mattis, nulla justo eleifend orci, vulputate sollicitudin felis urna id orci. nulla justo eleifend orci, vulputate sollicitudin felis urna id orci.
        </p>
        <div class="conclusion__keys">
          <div class="keys__key">
            <svg class="key__svg">

            </svg>
            <p class="key__text">
              La qualité de l’air se dégrade d’année en année !
            </p>
          </div>
          <div class="keys__key">
            <svg class="key__svg">

            </svg>
            <p class="key__text">
              En détectant les zones les plus touchées, on peut agir plus efficacement !
            </p>
          </div>
          <div class="keys__key">
            <svg class="key__svg">

            </svg>
            <p class="key__text">
              Une population sensibilisée ferra plus attention à la qualité de l’air !
            </p>
          </div>
        </div>
      </article>
      <article class="main__promotion">
        <h3 class="promotion__title">Pour aller plus loin !</h3>
        <p class="promotion__text">
          Vous vous intéressez à l’électronique, aux systèmes embarqués ou vous souhaitez juste en apprendre plus sur notre section ?
          Venez jeter un oeil à notre section sur le site de la <span  itemprop="parentOrganization">Haute École de la Province de Liège</span> !
        </p>
        <img class="promotion__image" src="" alt="Bâtiment de la HEPL">
        <a class="promotion__link">Visiter le site de la HEPL</a>
      </article>
      <section class="main__others">
        <h3 class="others__title">Nos autres projets</h3>
        <ul class="others__list">
          <li class="others__item">
            <article class="others__projet">
              <img class="projet__imagce" src="" alt="Le boîtier du projet Saïga">
              <h4 class="projet__title">Saïga</h4>
              <svg class="projet__svg">

              </svg>
              <p class="projet__description">
                Plus précis et autonome, il est l’ami des villes !
              </p>
              <a class="projet__link" href="#">Voir le projet en détail</a>
            </article>
          </li>
          <li class="others__item">
            <article class="others__projet">
              <img class="projet__imagce" src="" alt="Le boîtier du projet Impala">
              <h4 class="projet__title">Impala</h4>
              <svg class="projet__svg">

              </svg>
              <p class="projet__description">
                Le copilote rêvé de tout automobiliste !
              </p>
              <a class="projet__link" href="#">Voir le projet en détail</a>
            </article>
          </li>
          <li class="others__item">
            <article class="others__projet">
              <img class="projet__imagce" src="" alt="Le boîtier du projet Oryx">
              <h4 class="projet__title">Oryx</h4>
              <svg class="projet__svg">

              </svg>
              <p class="projet__description">
                L’outerboard fixe qui capte son, mouvement et particules !
              </p>
              <a class="projet__link" href="#">Voir le projet en détail</a>
            </article>
          </li>
          <li class="others__item">
            <article class="others__projet">
              <img class="projet__imagce" src="" alt="Le boîtier du projet Nyala">
              <h4 class="projet__title">Nyala</h4>
              <svg class="projet__svg">

              </svg>
              <p class="projet__description">
                Le module destiné aux étudiants !
              </p>
              <a class="projet__link" href="#">Voir le projet en détail</a>
            </article>
          </li>
          <li class="others__item">
            <article class="others__projet">
              <img class="projet__imagce" src="" alt="Le boîtier du projet Madoqua">
              <h4 class="projet__title">Madoqua</h4>
              <svg class="projet__svg">

              </svg>
              <p class="projet__description">
                Le module destiné aux étudiants !
              </p>
              <a class="projet__link" href="#">Voir le projet en détail</a>
            </article>
          </li>
          <li class="others__item">
            <div class="others__projet">
              <svg class="projet__svg">

              </svg>
              <a class="projet__link" href="template-projects.php">Voir tous nos projet</a>
            </div>
          </li>
        </ul>
      </section>
      <a class="main__arrow" href="#"></a>
    </main>

<?= get_footer(); ?>