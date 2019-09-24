<?php 
/*
* Template Name: Home Page
*/ ?>

<?php get_header(); ?>


      
      <!-- MAIN -->
      <main role="main">
        <!-- TOP SECTION -->
        <section class="grid">
          <!-- Main Carousel -->
          
          <div id="header-carousel" class="s-12 owl-carousel owl-theme margin-bottom">
            <?php $args = array(
            'post_type' => 'slider',
              );
                $slider_posts = get_posts($args);
           ?>
            <?php foreach ($slider_posts as $slider_post) { 
              $id =  $slider_post->ID;  ?>
              <?php $url = wp_get_attachment_url( get_post_thumbnail_id($id), 'thumbnail' );
             ?>
          	<div class="item"><img src="<?php echo $url;?>" alt="">
          </div>
       
      <?php } ?>
       </div>
            
        </section>
        
        
        <!-- SECTION 2 -->
         <?php while ( have_posts() ) : 
			  the_post(); ?>
			 <section class="grid box margin-bottom">
			    <div class="m-12 l-7 center text-center">
			       <i class="icon-sli-heart icon3x margin-bottom"></i>
			       <h1><?php the_field('main_title'); ?></h1>
			       <p><?php the_field('description');?></p>
			    </div>
			 </section>
		<?php endwhile; wp_reset_postdata(); ?>
        <!-- SECTION 1 --> 
        <section class="grid margin">
          <img class="s-12 l-4 l-row-3 margin-bottom" src="<?php echo get_bloginfo("template_url"); ?>/img/sample-image-1.svg">
          <div class="s-12 l-8 box margin-bottom">
    <?php $post_object = get_field('services');

    if( $post_object ): 

      // override $post
      $post = $post_object;
      setup_postdata( $post ); 

      ?>
    <div>
      <h3><?php $serviceId = get_the_ID(); ?>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
     <h2><?php 
     $post_7 = get_post($serviceId); 
      $title = $post_7->post_title;
      $excerpt = $post_7->post_content;
     ?><?php echo $title;?></h2>
     <p><?php echo $excerpt;?></p>
  </div>
<?php //endwhile;  wp_reset_postdata(); ?>

<?php
  $args = array(
    'post_type' => 'services',
    'order_by' => 'title',
    'order' => 'DESC',
    'post_per_page' => 4
  );
  $query = new WP_Query($args);
  while ( $query->have_posts() ) : 
  $query->the_post(); 
?>
  <div class="s-12 l-4 box margin-bottom">
     <i class="icon-sli-user-following icon3x margin-bottom"></i>
     <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
     <p><?php the_excerpt(); ?></p>
  </div>
<?php endwhile; wp_reset_postdata(); ?>
        <!--  <div class="s-12 l-4 box margin-bottom">
             <i class="icon-sli-user-following icon3x margin-bottom"></i>
             <h2>First Service</h2>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
          </div>
          <div class="s-12 l-4 box margin-bottom">
             <i class="icon-sli-layers icon3x margin-bottom"></i>
             <h2>Second Service</h2>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
          </div>
          <div class="s-12 l-8 box margin-bottom">
             <h2>Our Services</h2>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat. Con nonummy sem integer interdum volutpat dis eget.</p>
          </div>
          <div class="s-12 l-4 box margin-bottom">
             <i class="icon-sli-shield icon3x margin-bottom"></i>
             <h2>Third Service</h2>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
          </div>
          <div class="s-12 l-4 box margin-bottom">
             <i class="icon-sli-diamond icon3x margin-bottom"></i>
             <h2>Fourth Service</h2>
             <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
          </div>  -->
         </section>
             
         
         <!-- SECTION 2 -->
         <?php $about = get_field('about');  ?>
 <section class="grid margin">
  <div class="s-12 l-4 box margin-bottom">
     <h2><?php echo $about['about_title'];?></h2>
     <p><?php echo $about['about_content'];?></p>
  </div>
  <img class="s-12 l-8 margin-bottom" src="<?php echo get_bloginfo("template_url"); ?>/img/sample-image-2.svg">
         
 </section>
         
         
         <!-- SECTION 3 -->
         <section class="grid margin">
  <?php
  $args = array(
    'post_type' => 'post',
    'order_by' => 'title',
    'order' => 'ASC',
    'post_per_page' => 4
  );
  $query = new WP_Query($args);
  while ( $query->have_posts() ) : 
  $query->the_post(); 
?>
    <a href="<?php the_permalink();?>" class="s-12 l-4 box margin-bottom">
      <h2><?php the_title(); ?></h2>
       <?php the_excerpt(); ?>
    </a>
<?php endwhile; wp_reset_postdata(); ?>

<!--
         <section class="grid margin">
            <a href="/" class="s-12 l-4 box margin-bottom">
               <h2>First Post</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </a>
            <a href="/" class="s-12 l-4 box margin-bottom">
               <h2>Second Post</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </a>
            <a href="/" class="s-12 l-4 l-row-2 box margin-bottom">
               <h2>Our Blog</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Con nonummy sem integer interdum volutpat dis eget eligendi aliquip dolorum magnam. Lorem ipsum dolor si amet taciti sunt torquent ipsam proin montes quia netus quo minima sint. </p>
            </a>
            <a href="/" class="s-12 l-4 box margin-bottom">
               <h2>Third Post</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </a>
            <a href="/" class="s-12 l-4 box margin-bottom">
               <h2>Fourth Post</h2>
               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
            </a>  -->
         </section>
         
         
         <!-- SECTION 4 -->
         <div class="grid text-center">
    <?php $args = array(
      'post_type' => 'gallery',
    );
    $gallery_posts = get_posts($args); ?>
    <div id="gallery-carousel" class="s-12 owl-carousel owl-theme margin-bottom">
      <?php foreach ($gallery_posts as $gallery_post) { 
        $id =  $gallery_post->ID;  ?>
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($id), 'thumbnail' ); ?>
        <div class="item"><img src="<?php echo $url;?>" alt=""><?php echo get_the_title($id); ?></div>
      <?php } ?>

      <!--
         <div class="grid text-center">
            <div id="gallery-carousel" class="s-12 owl-carousel owl-theme margin-bottom">
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-1.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-2.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-3.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-4.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-1.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-2.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-3.svg" alt=""></div>
               <div class="item"><img src="<?php echo get_bloginfo("template_url"); ?>/img/gallery-4.svg" alt=""></div>-->
            </div>
         </div>  
         
         
         <!-- SECTION 5 -->
         <section class="grid margin">
          <div class="s-12 l-3 box margin-bottom">
             <h2><?php the_field('our_story_title'); ?></h2>
     		 <p><?php the_field('our_story_description'); ?></p>
          </div>
          <img class="s-12 l-3 l-row-2 margin-bottom" src="<?php echo get_bloginfo("template_url"); ?>/img/sample-image-1.svg">
          <div class="s-12 l-3 box margin-bottom">
             <h2><?php the_field('contact_us_title'); ?></h2>
     		 <p><?php the_field('contact_us_desc'); ?></p>
          </div>
          <div class="s-12 l-3 box margin-bottom">
             <h4><?php the_field('where_we_find_us_title'); ?></h4>
     		 <p><?php the_field('where_we_find_us_desc'); ?></p>
          </div>
          <div class="s-12 l-3 box margin-bottom">
             <h2><?php the_field('our_mision_title'); ?></h2>
     		 <p><?php the_field('our_mision_desc'); ?></p>
          </div>
          <div class="s-12 l-6 grid margin box margin-bottom">
             <div class="m-12 l-6 box">
               	<h4><?php the_field('write_us_title'); ?></h4>                
      			 <p><a href="mailto:contact@sampledomain.com"><?php the_field('write_us_desc'); ?></a></p>               
             </div>
             <div class="m-12 l-6 box">
               <h4><?php the_field('call_us_title'); ?></h4>                
       			<p><?php the_field('call_us_desc'); ?></p>
             </div>   
          </div>
         </section>
                
     
  <?php wp_footer(); ?>
  <?php get_footer(); ?>