# DESIGN WEB - Atmosph'air, site vitrine sous Wordpress

Dans le cadre du cours de design web, nous avons du réaliser un site vitrine pour la section électronique et systèmes embarqués de la HEPL. Il y avait une série de demandes de la part du client à respecter tel que des sections à inclures, des contacts à intégrer et des prokets à présenter. Le cahier des charges peut être consulté ici : https://github.com/hepl-dw/projet-antilope



## Le design

Mes premiers designs jouaient avec Antilope, le nom du projet principal du client, et le thème de la savane. Cependant, après le (seul) retour du client à la mi-mai, j'ai du modifié cet aspect graphique et adopter une approche plus tournée vers le côté technologique et écologique du projet.

L'une des sections qui plaisait le plus au client était le slider des projets situé dans l'index. J'ai donc essayé au mieux de retranscrire cet aspect de mon design au produit final. 

Si vous souhaitez consulté la maquette finale du site, vous pouvez suivre ce lien : https://www.figma.com/file/B4m5axgmlddO5o8SR41zxC/Antilope?node-id=0%3A1



## La réalisation

### HTML et Wordpress

Étant l'un des premiers sites que j'ai développé sous Wordpress, ce site vitrine a eu son lot de complications.

Tout d'abord, le nombre important de pages à créer, styliser et animer a été une masse importante de travail ! En effet, comparé à mes autres projets, celui-ci avait plus du double du travail à réaliser. Je vais donc diviser cette section en plusieurs sous-parties.


#### L'index

J'ai conçut l'index de ce site comme une page permettant de se faire une idée du site dans son ensemble. On y retrouve 3 sections permettant chacune d'introduire l'une des pages du site tout en proposant un lien pour s'y rendre. Il y a également un formulaire de contact et une section pour les réseaux-sociaux.

Cette page sert donc d'introduction au reste du site tout en permettant au visiteur de découvrir les projets au travers d'une courte description.


#### La page des projets

Cette page permet de découvrir l'ensemble des projets et aussi d'accéder à la page personnelle de chacun d'entre eux.

Je n'ai pas grand chose à dire sur la page rgroupant tous les projets, mais les pages personelles ont été assez intéressantes à développer. Effectivement, j'ai fait en sorte via PHP que les sections optionelles ne se construisent que si le champ Wordpress est complété. Cela permet donc d'avoir un code un peu plus propre à la sortie tout en laissant plus de flexibilité lorsque l'on complète les champs Wordpress.

J'ai aussi ajouté une section faisant la promotion de la section de notre client afin que ceux ayant parcourut la page (et donc ceux étant intéressé par les projets) puissent se renseigner plus en détail sur le client.


#### La page des publications

Cette page n'es malheureusement pas la plus aboutie, mais elle n'atais pas vraiment la plus importante non plus.

Il s'agit juste d'une liste des publications que le client souhaite partager. La grille qui compose la page s'ajuste au nombre d'article devant être affiché, mais le boutton de filtrage n'a pas été implémenté et ne fonctionne donc pas.

Après échange avec le client, nous avons tous convenu que cette section ne servirais qu'à partager des articles d'autres sites donc il n'y a pas de page "singleArticle", juste des liens vers ces articles externes.


### CSS

Le CSS a été la partie la plus conséquente de ce projet.





### Images

Les images étant différents pour chaques projets, j'ai préféré utiliser la gestion des images via Wordpress. J'ai tout de même utilisés un plugin afin d'optimiser ces images pour qu'elles ne soient pas trop volumineuses.

Aussi, il est bon de noter que les dégradés ont été réalisé via CSS et les logos l'ont été avec des images SVG ou du code !



## Quelques tests

Voici un test effectué sur GTMetrix :

![Test GTMetrix: Grade B | Performances 84% | Structure 93% | Largest contentful paint 1.3s | Total blockin time 0ms | Cumulative layout shift 0.4](https://user-images.githubusercontent.com/90833102/173080786-37a219e0-1867-4bfe-83c4-c4a2aa245be5.png)


Et voici deux tests effectués sur le Lighthouse de Google (respectivement, la version desktop et la version mobile) :

![Test Google Lighthouse: Performance 89 | Accessibility 89 | Best practices 92 | SEO 91](https://user-images.githubusercontent.com/90833102/173081059-5d16e8e2-21e1-4efd-982d-175e0ad28e33.png)

![Test Google Lighthouse: Performance 94 | Accessibility 89 | Best practices 83 | SEO 92](https://user-images.githubusercontent.com/90833102/173081456-a011b5a5-7852-4b8b-b0a4-6f53a1da9c5a.png)



Mis à part un problème due au temps d'apparition du canvas (visible entre 1.4 et 1.8 secondes) tout est dans le vert ! N'ayant malheureusement pas le temps d'optimiser cette partie, ce désagrément ne pourra pas être régler.



### Accessibilité

Au niveau de l'accessibilité, le site est :

- entièrement navigable au clavier (l'ouverture du menu est cependant contre-intuitive) ;
- adapté au condition de contraste diminué et aux différents daltonismes ;
- utilisable sans javascript ;
- adapté à différents supports grâce aux media queries.

J'ai aussi suivis plusieurs conseil donné sur le site anysurfer ! (Je n'ai pas été jusqu'à tenté de me donner un score d'accessibilité cependant)
