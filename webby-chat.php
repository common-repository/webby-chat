<?php
/**
 * Webby Chat
 *
 * @package           WebbyChat
 * @author            Carbo
 * @copyright         2020 Carbo
 *
 * @wordpress-plugin
 * Plugin Name:       Webby Chat
 * Plugin URI:        https://www.webby.chat
 * Description:       Build a community on your site. Increase the lifetime of your visits and get more page loads improving internal navigation.
 * Version:           0.3.015
 * Requires at least: 2.6.0
 * Author:            Carbo
 * Author URI:        https://www.webby.chat
 * Text Domain:       webby-chat
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function webby_chat_enqueue() 
{        
    wp_enqueue_style( 'webby-chat-style', 'https://app.webby.chat/styles/WordPress-plugin.css', array(), '0.3.015', 'all');
    wp_enqueue_script( 'webby-chat-script', 'https://app.webby.chat/scripts/WordPress-plugin.js', array(), '0.3.015', true);
}

add_action('wp_enqueue_scripts', 'webby_chat_enqueue' );
