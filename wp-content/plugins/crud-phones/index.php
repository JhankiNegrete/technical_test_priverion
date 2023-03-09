<?php
/**
 * Plugin Name: lista de celulares
 */

 require "install.php";
 require "uninstall.php";

 register_activation_hook(__FILE__, 'create_table_phones');
 register_deactivation_hook(__FILE__, 'drop_table_phones');



 


