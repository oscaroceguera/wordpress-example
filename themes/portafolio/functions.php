<?php
  /* Activar las imagenes en el theme de wordpress */
  add_theme_support('post-thumbnails');

  /* Registrar un menu de navegación */
  // function register_my_menu(){
  //   register_nav_menu('top-menu',__('Menú superior'));
  // }

  function register_my_menus(){
    register_nav_menus(
      array(
        'top-menu' => __('Menú superior'),
        'bottom-menu' => __('Menú del footer')
      )
    );
  }
  add_action('init', 'register_my_menus');
