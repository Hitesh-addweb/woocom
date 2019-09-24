<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Free responsive business website template</title>
      

      <?php wp_head(); ?>    
   </head>
   <body class="size-1140">
      <!-- HEADER -->
      <header class="grid">
        <!-- Top Navigation -->
        <nav class="s-12 grid margin-bottom">
           <!-- logo -->
           <a href="index.html" class="m-12 l-3 padding">
              <img src="<?php echo get_bloginfo("template_url"); ?>/img/logo.svg">
           </a>
          <div class="top-nav s-12 l-9">
              <?php 
              $args = array(
              'menu' => 'primary_menu',
              'container' => 'ul',
              'menu_class' => 'top-ul right chevron',
              );
              wp_nav_menu($args); ?>
              <!-- <ul class="top-ul right chevron">
              <li><a href="<?php the_permalink(); ?>">Home</a></li>
              <li><a>About Us</a></li>
              <li><a>Services</a></li>
              <li><a>Gallery</a></li>
              <li><a>Contact</a></li>
              </ul> -->
              </div>
        </nav>
      </header>
