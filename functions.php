<?php

/*  */

/******************************************************************************************************************************
 * Enqueue Scripts and Styles for Front-End
 *******************************************************************************************************************************/

// function foundation_scripts_and_styles()
{
  // System
  // wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), null); /* 1st priority */
  // wp_enqueue_style('wp', get_template_directory_uri() . '/css/style.css', );
  // wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
}

// Hook into the wp_enqueue_scripts action to run the function
// add_action('wp_enqueue_scripts', 'foundation_scripts_and_styles');


add_action('wp_enqueue_scripts', 'add_styles'); // подключаем функцию к правильному хуку
if (!function_exists('add_styles')) {
  function add_styles()
  {
    if (is_admin())
      return; // если мы в админке - ничего не делаем
    wp_enqueue_style('bs', get_template_directory_uri() . '/css/bootstrap.min.css'); // бутстрап
    wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css'); // основные стили шаблона
  }
}
