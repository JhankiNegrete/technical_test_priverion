<?php

function create_table_phones(){

  global $wpdb;

  $table_name = $wpdb->prefix . "phones";

  $sql = "CREATE TABLE $table_name (
    id int(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre varchar(55) NOT NULL,
    precio decimal(9,2) NOT NULL,
    cantidad int(4) NOT NULL,
    PRIMARY KEY (id)
  );";
  
  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );
 }