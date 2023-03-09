<?php

class Phone{
  public function save($phoneData){
    global $wpdb;

    $table_name = $wpdb->prefix . "phones";

    $wpdb->insert($table_name, $phoneData);

    $respose = $wpdb;
    $wpdb->close();
    return $wpdb;
  }
}