<?php
namespace Elementor;

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class My_Custom_Elementor_Widget extends Widget_Base {

    // Widget slug (unique identifier)
    public function get_name() {
        return 'my_custom_widget';
    }

    // Widget title
    public function get_title() {
        return __( 'My Custom Widget', 'my-plugin' );
    }

    // Widget icon
    public function get_icon() {
        return 'eicon-post-list'; // Elementor icon class
    }

    // Widget categories
    public function get_categories() {
        return [ 'general' ]; // Use 'basic', 'general', or create custom categories
    }

    // Widget controls (fields for user input)
    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'my-plugin' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'my-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Default Title', 'my-plugin' ),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __( 'Description', 'my-plugin' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Default description text.', 'my-plugin' ),
            ]
        );

        $this->end_controls_section();
    }

    // Render the widget output on the frontend
    protected function render() {
        $settings = $this->get_settings_for_display();

        echo '<div class="custom-widget">';
        echo '<h2>' . $settings['title'] . '</h2>';
        echo '<p>' . $settings['description'] . '</p>';
        echo '</div>';
    }

    // Optional: Render the widget output in the editor
    protected function _content_template() {
        ?>
        <#
        var title = settings.title ? settings.title : 'Default Title';
        var description = settings.description ? settings.description : 'Default description text.';
        #>
        <div class="custom-widget">
            <h2>{{{ title }}}</h2>
            <p>{{{ description }}}</p>
        </div>
        <?php
    }
}
