<?php

require_once(__DIR__ . '/acf.php');
require_once(__DIR__ . '/CustomSearchQuery.php');
require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');
require_once(__DIR__ . '/Forms/BaseFormController.php');
require_once(__DIR__ . '/Forms/ContactFormController.php');
require_once(__DIR__ . '/Forms/Sanitizers/BaseSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/TextSanitizer.php');
require_once(__DIR__ . '/Forms/Sanitizers/EmailSanitizer.php');
require_once(__DIR__ . '/Forms/Validators/BaseValidator.php');
require_once(__DIR__ . '/Forms/Validators/RequiredValidator.php');
require_once(__DIR__ . '/Forms/Validators/EmailValidator.php');
require_once(__DIR__ . '/Forms/Validators/AcceptedValidator.php');

add_action('init', 'atmos_boot_theme', 1);

function atmos_boot_theme()
{
    load_theme_textdomain('atmosphair', __DIR__ . '/locales');

    if (! session_id()) {
        session_start();
    }
}

add_filter('use_block_editor_for_post', '__return_false');
add_theme_support('post-thumbnails');
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4 );

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// Création de Custom Post Type
register_post_type('module', [
    'label' => 'Modules',
    'labels' => [
        'name' => 'Modules',
        'singular_name' => 'Module',
    ],
    'description' => 'Tous les articles qui décrivent un module sous forme de carte.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-calculator',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'modules'],
]);
register_post_type('publication', [
    'label' => 'Publications',
    'labels' => [
        'name' => 'Publications',
        'singular_name' => 'Publication',
    ],
    'description' => 'Toutes les publications.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-media-text',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'publications-index'],
]);

register_post_type('actor', [
    'label' => 'Acteurs',
    'labels' => [
        'name' => 'Acteurs',
        'singular_name' => 'Acteur',
    ],
    'description' => 'Tous les acteurs du projet.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-bank',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'acteurs'],
]);
register_post_type('moral', [
    'label' => 'Valeurs',
    'labels' => [
        'name' => 'Valeurs',
        'singular_name' => 'Valeur',
    ],
    'description' => 'Toutes les valeurs d\'Atmosph\'air.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-awards',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'valeurs'],
]);
register_post_type('date', [
    'label' => 'Dates',
    'labels' => [
        'name' => 'Dates',
        'singular_name' => 'Date',
    ],
    'description' => 'Toutes les dates de l\'historique.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-calendar',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'dates'],
]);
register_post_type('social', [
    'label' => 'Socials',
    'labels' => [
        'name' => 'Socials',
        'singular_name' => 'Social',
    ],
    'description' => 'Vos réseaux sociaux.',
    'public' => true,
    'has_archive' => true,
    'menu_position' => 2,
    'menu_icon' => 'dashicons-share',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'dates'],
]);


// Récupérer les customs posts types via requête wordpress
function atmos_get_modules_for_index($count = 5, $search = null)
{
    $modules = new DW_CustomSearchQuery([
        'post_type' => 'module',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $modules;
}
function atmos_get_publications_for_index($count = 5, $search = null)
{
    $publications = new DW_CustomSearchQuery([
        'post_type' => 'publication',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $publications;
}

function atmos_get_actors($count = 2, $search = null)
{
    $actors = new DW_CustomSearchQuery([
        'post_type' => 'actor',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $actors;
}
function atmos_get_morals($count = 3, $search = null)
{
    $morals = new DW_CustomSearchQuery([
        'post_type' => 'moral',
        'orderby' => 'date',
        'order' => 'DESC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $morals;
}
function atmos_get_dates($count = 10, $search = null)
{
    $dates = new DW_CustomSearchQuery([
        'post_type' => 'date',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $dates;
}

function atmos_get_modules_for_project($count = 6, $search = null)
{
    $modules = new DW_CustomSearchQuery([
        'post_type' => 'module',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $modules;
}

function atmos_get_publications($count = 10, $search = null)
{
    $publications = new DW_CustomSearchQuery([
        'post_type' => 'publication',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $publications;
}

function atmos_get_socials($count = 2, $search = null)
{
    $socials = new DW_CustomSearchQuery([
        'post_type' => 'social',
        'orderby' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
        's' => strlen($search) ? $search : null,
    ]);

    return $socials;
}


// Enregistrer les zones de menus

register_nav_menu('primary', 'Navigation principale (haut de page)');
register_nav_menu('footer', 'Navigation de pied de page');
register_nav_menu('legals', 'Lien vers les mentions légales et autres');

// Fonction pour récupérer les éléments d'un menu sous forme d'un tableau d'objets
function atmos_get_menu_items($location)
{
    $items = [];

    // Récupérer le menu Wordpress pour $location
    $locations = get_nav_menu_locations();

    if(! ($locations[$location] ?? false)) {
        return $items;
    }

    $menu = $locations[$location];

    // Récupérer tous les éléments du menu récupéré
    $posts = wp_get_nav_menu_items($menu);

    // Formater chaque élément dans une instance de classe personnalisée
    // Boucler sur chaque $post
    foreach($posts as $post) {
        // Transformer le WP_Post en une instance de notre classe personnalisée
        $item = new PrimaryMenuItem($post);

        // Ajouter au tableau d'éléments de niveau 0.
        if(! $item->isSubItem()) {
            $items[] = $item;
            continue;
        }

        // Ajouter $item comme "enfant" de l'item parent.
        foreach($items as $parent) {
            if(! $parent->isParentFor($item)) continue;
                
            $parent->addSubItem($item);
        }
    }

    // Retourner un tableau d'éléments du menu formatés
    return $items;
}

// Gérer l'envoi de formulaire personnalisé

add_action('admin_post_submit_contact_form', 'dw_handle_submit_contact_form');

function dw_handle_submit_contact_form()
{
    // Instancier le controlleur du form
    $form = new ContactFormController($_POST);
}
function dw_get_contact_field_value($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    return $_SESSION['contact_form_feedback']['data'][$field] ?? '';
}
function dw_get_contact_field_error($field)
{
    if(! isset($_SESSION['contact_form_feedback'])) {
        return '';
    }

    if(! ($_SESSION['contact_form_feedback']['errors'][$field] ?? null)) {
        return '';
    }

    return '<p>Ce champ ne respecte pas : ' . $_SESSION['contact_form_feedback']['errors'][$field] . '</p>';
}

// Fonction qui charge les assets compilés et retourne leure chemin absolu

function atmos_mix($path)
{
    $path = '/' . ltrim($path, '/');

    if(! realpath(__DIR__ .'/public' . $path)) {
        return;
    }

    if(! ($manifest = realpath(__DIR__ .'/public/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Ouvrir le fichier mix-manifest.json
    $manifest = json_decode(file_get_contents($manifest), true);

    // Regarder si on a une clef qui correspond au fichier chargé dans $path
    if(! array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/public' . $path;
    }

    // Récupérer & retourner le chemin versionné
    return get_stylesheet_directory_uri() . '/public' . $manifest[$path];
}

// Restreindre la requête de recherche "par défaut"
function dw_restrict_search_query($query) {
    if ($query->is_search && ! is_admin() && ! is_a($query, DW_CustomSearchQuery::class)) {
        $query->set('post_type', ['post']);
    }
 
    return $query;
}
 
add_filter('pre_get_posts','dw_restrict_search_query');

// Fonction pour diriger vers une page template
function atmos_get_template_post(string $template) {
    $query = new WP_Query([
        'post-type' => 'page',
        'post-status' => 'published',
        'meta-query' => [
            [
                'key' => '_wp_page_template',
                'value' => $template . 'php'
            ]
        ]
    ]);

    return $query->posts ?? null;
}

// Fonction permettant d'inclure des "partials" dans la vue et d'y injecter des variables "locales" (uniquement disponibles dans le scope de l'inclusion).
function dw_include(string $partial, array $variables = [])
{
    extract($variables);
    include(__DIR__ . '/partials/' . $partial . '.php');
}