<?php
function wp_fontawesome_get_base_url(){
  $base = get_template_directory_uri();

  $parts = explode(get_template(), dirname(__FILE__));

  $url = str_replace('\\', '/', $base . $parts[1]);

  return $url;
}

function wp_fontawesome_register_font_awesome(){
  $basePath = apply_filters('wp_fontawesome_base_url', wp_fontawesome_get_base_url());

  wp_register_script(
    'font-awesome',
    $basePath . '/vendor/fortawesome/font-awesome/js/all.js',
    array(),
    '5.15.2',
		true
  );
}

add_action('init', 'wp_fontawesome_register_font_awesome');