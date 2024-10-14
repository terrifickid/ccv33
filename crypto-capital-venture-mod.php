<?php
/*
Plugin Name: Crypto Capital Venture Wordpress MOD
Description: A MOD script for CCV site by msplint.
Version: 1.0
Author: msplint
Author URI: https://www.terrifickid.net
*/

// Security check to prevent direct access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Example functionality: Add a custom admin notice
function crypto_capital_venture_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Crypto Capital Venture Wordpress MOD by msplint is active!', 'crypto-capital-venture'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'crypto_capital_venture_admin_notice');

// Example functionality: Enqueue a custom script (can be extended with actual scripts)
function crypto_capital_venture_enqueue_scripts() {
    wp_enqueue_script('crypto-capital-venture-script', plugins_url('/js/custom-script.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'crypto_capital_venture_enqueue_scripts');

?>
