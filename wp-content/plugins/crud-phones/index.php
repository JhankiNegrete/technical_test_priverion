<?php

/**
 * Plugin Name: lista de celulares
 */

require "install.php";
require "uninstall.php";
require "enqueue.php";
require "public/Controllers/PhoneController.php";
require "public/Models/Phone.php";

register_activation_hook(__FILE__, 'create_table_phones');
register_deactivation_hook(__FILE__, 'drop_table_phones');




function shortcode_function()
{
  require plugin_dir_path(__FILE__) . "/public/assets/views/phone/crud.php";
  return $view_crud_phone;
}

add_shortcode('phone_add_view', 'shortcode_function');
