<?php
/*
Plugin Name: WordPress Plugin Example
Plugin URI: http://sharklabs.com.br/em-5-minutos-voce-cria-um-plugin-para-wordpress
Description: This is plugin example for wordpress
Author: Gabriel Willemann
Version: 1.0
Author URI: http://sharklabs.com.br/
*/

add_filter('the_content', 'filterTheContent');
function filterTheContent($content)
{
    return $content . '<p>Hello Word - It is plugin example for wordpress</p>';
}

add_action('wp_footer', 'actionWpFooter');
function actionWpFooter()
{
    echo '<p style=\'background-color: yellow;\'>This text will be load after the footer. It may be dangerous!</p>';
}

add_action('admin_menu', 'actionAdminMenu');
function actionAdminMenu()
{
    add_menu_page(
        'WP Plugin Example - Admin Interface',
        'WP Plugin Example',
        'manage_options',
        'wp-plugin-example/wpe-admin-interface.php'
    );
}
