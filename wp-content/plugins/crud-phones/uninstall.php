<?php

function drop_table_phones(){
  global $wpdb;

  $table_name = $wpdb->prefix . "phones";

  $sql = "DROP TABLE $table_name";

  $wpdb->query($sql);

 }