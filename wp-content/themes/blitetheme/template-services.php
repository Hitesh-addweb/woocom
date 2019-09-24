<?php 
/*
* Template Name: Services Page
*/ ?>

<?php 
get_header();
 //echo do_shortcode('[service]'); ?>
<section class="grid margin">
  <div class="s-12 l-4 box margin-bottom">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>
 
  
 </section>
 <div id="pagination">
 	<?php
 	$args = array(
        'post_type' => 'services',
        'order_by' => 'title',
        'order' => 'ASC',
        'posts_per_page' => 1
    );
    $query = new WP_Query($args);
    while ( $query->have_posts() ) : 
        $query->the_post(); 
        ?>
            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <?php 
        endwhile; wp_reset_postdata(); 
        ?>
       
</div>
</section>

<?php 
		$page=$query->max_num_pages;
		for ($i=1; $i <= $page; $i++) {  ?>

			<a href="#" class="page_num" id="link" data-value="<?php echo $i; ?>"><?php echo $i ?></a>
			<?php
		} 
		

?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery('.page_num').click(function(){

			var link= this.getAttribute('data-value');
			var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";


			jQuery.ajax({
			url:ajaxurl,
			data:{
				'action':'my_pagination',
				'page':link
			}, 
			type:'post', 
			success:function(data){
				jQuery('#pagination').html(data); 
			}	
		}); 
		});
	});
</script>
 