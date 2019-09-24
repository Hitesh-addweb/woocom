<?php get_header(); ?>

<?php
 if(have_posts()){
 	while(have_posts()){
 		the_post();
 	}
 }
?>

<section class="grid box margin-bottom">
          <div class="m-12 l-7 center text-center">
            
             <h2><?php the_title(); ?></h2>
             <p><?php the_content(); ?></p>
          </div>
         </section>

 



<?php get_footer(); ?>