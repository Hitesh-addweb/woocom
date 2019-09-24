<?php 
/*
* Template Name: EXPERTS Page
*/ ?>

<?php get_header(); ?>
<div>
	<input type="radio" name="order" value="ASC" />  Ascending
	<input type="radio" name="order" value="DESC" />  Descending

</div>
<div id="response">
<?php 
	// $order = $_POST['order'];   
            $args = array(
                'post_type' => 'experts',
                'order_by' => 'title',
                'posts_per_page' => 5,
                'order' => 'ASC'
            );
        
        $query = new WP_Query( $args );
        while( $query->have_posts() ) { 
            $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <h2 style="color: green"><?php the_title(); ?></h2>
            </a>
            <div>    
            <p><?php the_content(); ?></p>
            </div>
            <?php
        }
        ?>
</div>
<?php 
$page_num = $query->max_num_pages;
for ($i=1; $i <= $page_num ; $i++) { ?>
	<a href="#" class="pagenum" id="link" data-value="<?php echo $i; ?>"><?php echo $i; ?></a>
	<?php 
} ?>
<input type="hidden" name="current-page" value="1" id="currentPage">
<?php 

 wp_reset_postdata();
 ?>        
<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery('.pagenum').click(function(){
		var link = this.getAttribute('data-value');
		var sortOrder = jQuery('input[name="order"]:checked').val();
		var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>"; 
		jQuery.ajax({
			url:ajaxurl,
			data:{
				'action':'myfilter',
				'order':sortOrder,
				'page':link
			}, 
			type:'post', 
			success:function(data){
				jQuery('#response').html(data); 
			}	
		}); 
	});

	jQuery("input[type='radio']").click(function(){
		var currpage = jQuery('#currentPage').val();
		var sortOrder = jQuery('input[name="order"]:checked').val();
		var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>"; 
		jQuery.ajax({
			url:ajaxurl,
			data:{
				'order':sortOrder,
				'action':'myfilter',
				'page': currpage
			}, 
			type:'post', 
			success:function(data){
				jQuery('#response').html(data); 
			}	
		}); 
	});
});
	
</script>

<?php get_footer(); ?>


