<?php
/**
 * ArchSan Theme Functions
 */

if (!defined('ABSPATH')) {
    exit; 
}

// Theme Setup
function archsan_setup() {
    add_theme_support('title-tag');
    
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'archsan'),
    ));
    
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'archsan_setup');

function archsan_scripts() {
    wp_enqueue_style('archsan-google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;1,300;1,400&family=Oswald:wght@300;400&display=swap');
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/modules/magnific-popup/magnific-popup.css');
    wp_enqueue_style('youtubepopup', get_template_directory_uri() . '/assets/modules/YouTubePopUp/YouTubePopUp.css');
    wp_enqueue_style('archsan-style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_script('jquery');
    
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/plugins/modernizr-2.6.2.min.js', array(), '2.6.2', false);
    
    $scripts = array(
        'bootstrap'        => '/assets/js/plugins/bootstrap.min.js',
        'waypoints'        => '/assets/js/plugins/jquery.waypoints.min.js',
        'imagesloaded'     => '/assets/js/plugins/imagesloaded.pkgd.min.js',
        'isotope'          => '/assets/js/plugins/jquery.isotope.v3.0.2.js',
        'owl-carousel'     => '/assets/js/plugins/owl.carousel.min.js',
        'scrollit'         => '/assets/js/plugins/scrollIt.min.js',
        'magnific-popup'   => '/assets/modules/magnific-popup/jquery.magnific-popup.js',
        'masonry'          => '/assets/modules/masonry/masonry.pkgd.min.js',
        'youtubepopup'     => '/assets/modules/YouTubePopUp/YouTubePopUp.js'
    );

    foreach ($scripts as $handle => $src) {
        wp_enqueue_script(
            $handle,
            get_template_directory_uri() . $src,
            array('jquery'),
            filemtime(get_template_directory() . $src),
            true
        );
    }

    // Main theme script
    wp_enqueue_script(
        'archsan-main',
        get_template_directory_uri() . '/assets/js/script.js',
        array_keys($scripts),
        filemtime(get_template_directory() . '/assets/js/script.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'archsan_scripts');

// Custom Menu Walker
class Archsan_Menu_Walker extends Walker_Nav_Menu {
    function start_lvl(&$output, $depth = 0, $args = null) {
        $output .= '<ul>';
    }
    
    function end_lvl(&$output, $depth = 0, $args = null) {
        $output .= '</ul>';
    }
    
    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        
        $has_children = in_array('menu-item-has-children', $classes);
        $dropdown_class = $has_children ? ' duru-menu-sub' : '';
        
        $output .= '<li class="' . esc_attr($class_names) . $dropdown_class . '">';
        
        // Menu item link
        $atts = array();
        $atts['title']  = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel']    = !empty($item->xfn) ? $item->xfn : '';
        $atts['href']   = !empty($item->url) ? $item->url : '';
        
        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
        
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        
        if ($has_children) {
            $item_output .= ' <i class="ti-angle-down"></i>';
        }
        
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}


function archsan_register_projects() {
    $labels = array(
        'name'                  => 'Projects',
        'singular_name'         => 'Project',
        'menu_name'             => 'Projects',
        'name_admin_bar'        => 'Project',
        'archives'              => 'Project Archives',
        'attributes'            => 'Project Attributes',
        'parent_item_colon'     => 'Parent Project:',
        'all_items'             => 'All Projects',
        'add_new_item'          => 'Add New Project',
        'add_new'               => 'Add New',
        'new_item'              => 'New Project',
        'edit_item'             => 'Edit Project',
        'update_item'           => 'Update Project',
        'view_item'             => 'View Project',
        'view_items'            => 'View Projects',
        'search_items'          => 'Search Project',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into project',
        'uploaded_to_this_item' => 'Uploaded to this project',
        'items_list'            => 'Projects list',
        'items_list_navigation' => 'Projects list navigation',
        'filter_items_list'     => 'Filter projects list',
    );
    
    $args = array(
        'label'                 => 'Project',
        'description'           => 'Architecture projects',
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-building',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'rewrite'               => array('slug' => 'projects'),
    );
    
    register_post_type('project', $args);
}
add_action('init', 'archsan_register_projects', 0);

// Add menu item classes filter
function archsan_menu_classes($classes, $item, $args) {
    if ($args->theme_location == 'primary') {
        if (in_array('menu-item-has-children', $classes)) {
            $classes[] = 'duru-menu-sub';
        }
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'archsan_menu_classes', 10, 3);
