<?php
/**
 * @package Hono Plugin
 * @version 1.7.2
 */
/*
Plugin Name: Hono Plugin
Plugin URI: http://wordpress.org/plugins/hono-plugin/
Description: Ceci est un plugin pour l'entreprise Hono.
Version: 1.7.2
Author URI: http://offline.ovh/
*/

add_shortcode('show_social_network', 'social_network');

function social_network(){
    echo("
    <div>
        <ul>
            <li>Facebook : https://facebook.com</li>
            <li>Instagram.com : https://instagram.com</li>
            <li>Linkedin : https://www.linkedin.com</li>
            <li>GitHub : https://github.com/honoagency</li>
        </ul>
    </div>
    ");
}

?>