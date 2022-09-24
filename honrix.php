<?php

/**
 * Plugin Name: Honrix Addons
 * Author: Honar Systems
 * Version: 1.0.0
 * Description: Honrix addons is a plugin to add more functionalities to the WordPress themes.
 * Plugin URI: https://honarsystems.com/honrix-addons
 * Text Domain: honrix-addon
 */

if (!defined('ABSPATH')) {
    exit;
}

function honrix_elementor_widget_categories($elements_manager)
{

    $elements_manager->add_category(
        'honrix-addon',
        [
            'title' => esc_html__('Honrix Addon', 'honrix-addon'),
            'icon' => 'fa fa-plug',
        ]
    );
}
add_action('elementor/elements/categories_registered', 'honrix_elementor_widget_categories');

add_action('elementor/widgets/widgets_registered', function () {
    include_once('widgets/team_member/member.php');
});
