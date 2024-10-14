<?php

// Function to enqueue Tailwind CSS CDN script
function enqueue_tailwind_cdn() {
    echo '<script src="https://cdn.tailwindcss.com"></script>';
}

// Hook into WordPress to load the Tailwind CDN in the header
add_action('wp_head', 'enqueue_tailwind_cdn');