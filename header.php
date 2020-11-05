<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body>

  <header class="header">
    <div class="container">

      <div class="header-logo">
        <a href="<?php echo home_url( ); ?>">
          <h1><?php bloginfo( "name" ); ?></h1>
        </a>
      </div>
      <div class="header-menu-but">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="header-nav-mob">
        <nav>
        <?php wp_nav_menu(array(
          'theme_location'=>'top',
          'container'=> null,
          'menu_class'=> 'nav-menu-mob',
          'menu_id'=>'nav-menu-mob',
          'after'=>'<div class="toggle"></div>'
        ));?>
        </nav>
      </div>
      <div class="header-nav">
        <nav>
          <?php wp_nav_menu(array(
          'theme_location'=>'top',
          'container'=> null,
          'menu_class'=> 'nav-menu',
          'menu_id'=>'nav-menu'
        ));?>
        </nav>
      </div>

    </div>
  </header>





