<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
   
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <div class="blur-background"></div>
  <header id="header-id" class="header-content sticky">
    <nav role="navigation" aria-label="Main menu" id="hamburger-menu">
      <button aria-expanded="false" aria-label="Main menu toggle button"  aria-controls="main-menu" href="#menu" id="menu-toggle" class="menu-toggle" onclick="toggleMenu()">
        <svg aria-hidden="true" focusable="false" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" stroke="currentColor" d="M4 6h16M4 12h16M4 18h16"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
      </button>
    </nav>
    <?php
      wp_nav_menu( array(
        'theme_location' 	=> 'primary',
        'menu_id' 		 	  => 'main-menu',
        'menu_class' 		  => '',
        'container' 	 	  => 'nav',
        'container_id'    => 'menu-nav',
        'container_class'	=> 'header-menu-container',
        'depth'				    => 2,
        'fallback_cb' 		=> false
      ) );
    ?>
    <div id="shopping-cart-menu">
      <button aria-expanded="false" aria-label="shopping cart toggle button" aria-controls="shopping-cart" id="shopping-toggle" onclick="toggleCart()">
        <svg class="w-6 h-6" fill="currentColor" stroke="" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path clip-rule="evenodd" fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"></path>
          <path clip-rule="evenodd" fill-rule="evenodd" d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 004.25 22.5h15.5a1.875 1.875 0 001.865-2.071l-1.263-12a1.875 1.875 0 00-1.865-1.679H16.5V6a4.5 4.5 0 10-9 0zM12 3a3 3 0 00-3 3v.75h6V6a3 3 0 00-3-3zm-3 8.25a3 3 0 106 0v-.75a.75.75 0 011.5 0v.75a4.5 4.5 0 11-9 0v-.75a.75.75 0 011.5 0v.75z"></path>
        </svg>
      </button>
    </div>
    
    <nav id="shopping-cart-id" class="woocommerce">
      <div class="widget_shopping_cart_content"><?php woocommerce_mini_cart(); ?></div>
    </nav>
  </header>
