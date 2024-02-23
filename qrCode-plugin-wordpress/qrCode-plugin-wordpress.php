<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php

/*
* Plugin Name: qrCode-plugin-wordpress
* Plugin URI: https://qrCode-plugin-wordpress.local
* Description: The qrCode-plugin-wordpress plugin facilitates basic functionalities within WordPress, allowing users to generate QR codes seamlessly.
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Lorenzo Fornara
* Author URI: https://h4shell.github.io/Portfolio-Template-Web/
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: https://example.com/my-plugin/
* Text Domain: qrCode-plugin-wordpress
* Domain Path: /languages
*/

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

function myplugin_banner()
{
  echo "\
    <div class=\"myplugin-banner-container myplugin-hidden\">
      <p class=\"myplugin-banner-text\">QRCODE</p>
      <div id=\"qrcode\"></div>
      <div class=\"myplugin-banner-button\">
        <svg
          xmlns=\"http://www.w3.org/2000/svg\"
          width=\"36\"
          height=\"36\"
          fill=\"currentColor\"
          class=\"bi bi-caret-right-fill\"
          viewBox=\"0 0 16 16\"
        >
          <path
            d=\"m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z\"
          />
        </svg>
      </div>
    </div>
    ";
}

function myplugin_enqueue_scripts()
{
  wp_enqueue_script('myplugin-script', plugins_url('public/js/script.js', __FILE__), array(), '1.0.0', true);
  wp_enqueue_style('myplugin-style', plugins_url('public/css/myplugin.css', __FILE__), array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'myplugin_enqueue_scripts');
add_action('wp_body_open', 'myplugin_banner');
