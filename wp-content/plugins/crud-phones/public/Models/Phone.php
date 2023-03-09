<?php

class Phone{

  public function getAll(){
    global $wpdb;
    $table_name = $wpdb->prefix . "phones";
    $wpdb -> get_results('SELECT * FROM ' . $table_name, OBJECT);
    $response = $wpdb->last_result;
    return $response;
  }

  public function save($phoneData){
    global $wpdb;

    $table_name = $wpdb->prefix . "phones";

    $wpdb->insert($table_name, $phoneData);

    $response = $wpdb;
    return $this->show($response->insert_id);
  }

  public function update($phoneData, $id){
    global $wpdb;
    $table_name = $wpdb->prefix . "phones";
    $wpdb->update($table_name, $phoneData, array('id' => $id));
    $response = $wpdb;
    return $response;
  }

  public function show($id){
    global $wpdb;
    $table_name = $wpdb->prefix . "phones";
    $response = $wpdb->get_row("SELECT * FROM . $table_name WHERE id =  . $id", OBJECT, 0);
    return $response;
  }

  public function killer($id){
    global $wpdb;
    $table_name = $wpdb->prefix . "phones";
    $wpdb->delete($table_name, array('id'=>$id));
    $response = $wpdb->rows_affected == 1 ? $id : 0;
    return $response;
  }


}