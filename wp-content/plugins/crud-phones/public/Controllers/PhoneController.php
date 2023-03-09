<?php
function createPhone()
{

  if (wp_verify_nonce($_REQUEST['_wpnonce'], 'create-phone') == 1 || wp_verify_nonce($_REQUEST['_wpnonce'], 'create-phone') == 2) {

    $phoneData = array(
      "name" => $_REQUEST['phone_name'],
      "price" => $_REQUEST['phone_price'],
      "stock" => $_REQUEST['phone_stock'],
    );

    $obj_phone = new Phone;
    $response = $obj_phone->save($phoneData);

    
    wp_send_json($response);
  }
}

add_action('wp_ajax_create-phone', 'createPhone');
