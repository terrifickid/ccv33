<?php
/*
Plugin Name: Crypto Capital Venture Wordpress MOD
Description: A MOD script for CCV site by msplint.
Plugin URI: https://github.com/terrifickid/crypto-capital-venture-mod
Version: 1.0
Author: msplint
Author URI: https://www.terrifickid.net
*/

// Security check to prevent direct access
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

//reqs
require plugin_dir_path(__FILE__) . 'tailwind.php';
require plugin_dir_path(__FILE__) . '/elementor/members-menu.php';

// Example functionality: Add a custom admin notice
function crypto_capital_venture_admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e('Crypto Capital Venture Wordpress MOD by msplint is mactive!', 'crypto-capital-venture'); ?></p>
    </div>
    <?php
}
add_action('admin_notices', 'crypto_capital_venture_admin_notice');
