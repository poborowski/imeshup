<?php

global $login;

$login = 'kamil';

function remove_from_admin_bar($wp_admin_bar)

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        $wp_admin_bar->remove_node('updates');

        $wp_admin_bar->remove_node('comments');

        $wp_admin_bar->remove_node('customize');

        $wp_admin_bar->remove_node('nav-menus');
    }
}

add_action('admin_bar_menu', 'remove_from_admin_bar', 999);



function custom_menu_page_removing()

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        remove_menu_page('edit-comments.php');

        remove_menu_page('themes.php');
    }
}

add_action('admin_menu', 'custom_menu_page_removing');



add_action('admin_head', 'custom_css');



function custom_css()

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        echo '<style>#toplevel_page_sphere-dash, #wp-admin-bar-wp-rocket, .notice.notice-info.is-dismissible, .warning,a[href="options-general.php?page=wprocket"], #rocket_post_exclude, #purge-action, a[href="edit.php?post_type=newsletter&page=mailster_addons"], #toplevel_page_sitepress-multilingual-cms-menu-languages, a[href="edit.php?post_type=newsletter&page=mailster_templates"] {display:none!important}

  </style>';
    }
}



//hide acf from the client. That the custom doesnt break :D

add_filter('all_plugins', 'acf_hide');

function acf_hide($plugins)

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        unset($plugins['acf/acf.php']);

        unset($plugins['acfml/wpml-acf.php']);

        unset($plugins['classic-editor/classic-editor.php']);

        unset($plugins['cookie-notice/cookie-notice.php']);

        unset($plugins['custom-post-type-ui/custom-post-type-ui.php']);

        unset($plugins['sierotki/sierotki.php']);

        unset($plugins['sitepress-multilingual-cms/sitepress.php']);

        unset($plugins['wpml-string-translation/plugin.php']);

        unset($plugins['mailster/mailster.php']);


        // unset($plugins['wp-rocket/wp-rocket.php']);

    }

    return $plugins;
}



function acfpage_removing()

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        remove_menu_page('edit.php?post_type=acf-field-group');
    }
}

add_action('admin_menu', 'acfpage_removing');



function remove_core_updates()

{

    global $login;

    if (wp_get_current_user()->user_login !== $login) {

        global $wp_version;

        return (object) array('last_checked' => time(), 'version_checked' => $wp_version,);
    }
}

add_filter('pre_site_transient_update_core', 'remove_core_updates'); //hide updates for WordPress itself

add_filter('pre_site_transient_update_plugins', 'remove_core_updates'); //hide updates for all plugins

add_filter('pre_site_transient_update_themes', 'remove_core_updates'); //hide updates for all themes






// function add_custom_menu_item()
// {
//     add_menu_page('Menu', 'Menu', 'manage_options', 'menu', 'function', 'dashicons-icon', 1);
// }
// add_action('admin_menu', 'add_custom_menu_item');

// function custom_menu_item_redirect()
// {

//     $menu_redirect = isset($_GET['page']) ? $_GET['page'] : false;

//     if ($menu_redirect == 'menu') {
//         wp_safe_redirect(admin_url() . 'nav-menus.php');
//         exit();
//     }
// }
// add_action('admin_init', 'custom_menu_item_redirect', 1);