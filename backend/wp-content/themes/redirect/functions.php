<?php
// Update CSS within in Admin
function admin_style()
{
    wp_enqueue_style('admin-styles', get_template_directory_uri() . '/style.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

?>
