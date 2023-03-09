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

  // global $wpdb;

  // $table_name = $wpdb->prefix . 'phones';

  // $phones = $wpdb->get_results("SELECT * FROM $table_name", OBJECT);

  // $table = "";

  // $table .= "<table width='100%' border='1px'>";
  // $table .= "<thead>";
  // $table .= "<th>Name</th>";
  // $table .= "<th>Price</th>";
  // $table .= "<th>Stock</th>";
  // $table .= "</thead>";
  // $table .= "<tbody>";

  // foreach ($phones as $phone) {
  //   $table .= "<tr>";
  //   $table .= "<td>$phone->name</td>";
  //   $table .= "<td>$phone->price</td>";
  //   $table .= "<td>$phone->stock</td>";
  //   $table .= "</tr>";
  // }

  // $table .= "</tbody>";
  // $table .= "</table>";

  // return $table;
}

add_shortcode('phone_add_view', 'shortcode_function');
