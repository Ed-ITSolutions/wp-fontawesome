<?php
function wp_fontawesome_get_base_url(){
  $base = get_template_directory_uri();

  $parts = explode(get_template(), dirname(__FILE__));

  $url = str_replace('\\', '/', $base . $parts[1]);

  return $url;
}

function wp_fontawesome_get_base_path(){
  $base = get_template_directory();


  return $base . '/vendor/ed-itsolutions/wp-fontawesome';
}

function wp_fontawesome_register_font_awesome(){
  $basePath = apply_filters('wp_fontawesome_base_url', wp_fontawesome_get_base_url());

  wp_register_script(
    'font-awesome',
    dirname(dirname($basePath)) . '/fortawesome/font-awesome/js/all.js',
    array(),
    '5.15.2',
		true
  );
}

function wp_fontawesome_get_icons(){
  $basePath = apply_filters('wp_fontawesome_base_path', wp_fontawesome_get_base_path());
  $fontAwesomePath = dirname(dirname($basePath)) . '/fortawesome/font-awesome';

  $json = file_get_contents($fontAwesomePath . '/metadata/icons.json');
  $icons = json_decode($json, true);

  return $icons;
}

if(function_exists('add_action')){
  add_action('init', 'wp_fontawesome_register_font_awesome');
}