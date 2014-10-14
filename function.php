<?
define('TEMPPATH',get_bloginfo('stylesheet_directory'));
define('IMAGEN', TEMPPATH. "/img");

if ( function_exists( 'register_nav_menus' ) )
   {
      register_nav_menus(
        array(
              'MenuPrincipal' => __( 'Menu Principal' ),
             )
      );
   }?>