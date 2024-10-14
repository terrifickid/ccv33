<?php

function check_forced_update_param() {
    // Check if the 'fupdate=1' parameter is set in the URL
    if (isset($_GET['fupdate']) && $_GET['fupdate'] == '1') {
        if (class_exists('Fragen\GitHub_Updater\Base')) {
            // Trigger the update check for GitHub Updater
            $github_updater = Fragen\GitHub_Updater\Base::instance();
            $github_updater->load_options();
            $github_updater->forced_check();

            // Notify user that the update check has been triggered
            add_action('admin_notices', function() {
                echo '<div class="notice notice-success is-dismissible">
                        <p>GitHub Updater: Update check triggered successfully!</p>
                      </div>';
            });
        }
    }
}

// Hook into WordPress admin initialization
add_action('admin_init', 'check_forced_update_param');