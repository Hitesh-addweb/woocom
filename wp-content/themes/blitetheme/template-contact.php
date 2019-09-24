<?php 
/*
* Template Name: Contact Page
*/ ?>

<?php get_header(); ?>
<section class="grid margin">
  <div class="s-12 l-4 box margin-bottom">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>
 
  
 </section>


<section class="grid margin">
	
<?php
  echo do_shortcode( '[contact-form-7 id="21" title="Contact form 1"]' );
?>
</section>







<?php get_footer(); ?>