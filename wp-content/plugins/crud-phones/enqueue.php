<?php


if(!function_exists('crud_phones_enqueue_css')){

  function crud_phones_enqueue_css(){
    wp_register_style('crud-phones',
    plugins_url('public/assets/css/style.css', __FILE__),
    null,
    '1.0',
    'all');

    wp_register_style('bootstrap',
    "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css",
    array('crud-phones'),
    '5.2.3',
    'all');

    wp_enqueue_style('crud-phones');
    wp_enqueue_style('bootstrap');
  }
}

add_action('wp_enqueue_scripts', 'crud_phones_enqueue_css');


if (!function_exists('crud_phones_enqueue_scripts')){
  function crud_phones_enqueue_scripts(){

    wp_register_script(
      'bootstrap-js',
      "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js",
      array('jquery'),
      '1.0',
      true
    );
    wp_enqueue_script('bootstrap-js');


    wp_register_script(
      'crud-phones-javascript',
      plugins_url('public/assets/js/main.js', __FILE__),
      array('jquery'),
      '1.0',
      true
    );
    wp_enqueue_script('crud-phones-javascript');

    wp_localize_script('crud-phones-javascript','ajax_var',array(
      'url' => admin_url('admin-ajax.php'),
      // 'nonce' => wp_create_nonce('my-ajax-nonce')
    ));
  }
}

add_action('wp_enqueue_scripts', 'crud_phones_enqueue_scripts');