<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title('|',true,'right');  bloginfo( 'name' )?></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <?php wp_head(); ?>

  </head>

  <body>
        
        <?php

          global $sb_theme_options;

         ?>

        <div class="headers">
              <!-- Top Header -->
            <header class="top_header">
                    <p class="d-none d-md-inline-block"><?php echo $sb_theme_options['txt_left_top_bar'] ?></p>

                    <?php 
                 //Creating Main Menu (Nav Menu)
                      $defaults = array(
                        'container' => false,
                        'theme_location' => 'top-rigth-menu',
                        'menu_class' => 'top_rigth_menu'
                      );

                      wp_nav_menu($defaults);    
                    ?>
            </header>
          
              <!-- Start Navbar -->
              <nav id="wr_navbar" class=" navbar navbar-expand-md navbar-light" role="navigation">
              <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="header-wrapper">
                            <?php 
                              //Load Custom Logo
                              $custom_logo_id = get_theme_mod( 'custom_logo' );
                                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                  if ( has_custom_logo() ) {
                                          echo '<img id="header-logo" src="'. esc_url( $logo[0] ) .'"">';
                                  } else {
                                          echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                  }
                ?></div>
                <?php
                wp_nav_menu( array(
                  'theme_location'    => 'primary-menu',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav  ml-auto',
                  'menu_id'           => 'wr_main_menu',   
                  //'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
              </div>
            </nav>
         
 
        </div>

        
      

