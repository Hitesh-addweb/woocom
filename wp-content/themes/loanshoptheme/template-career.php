<?php 
/*
* Template Name: Career Page
*/ ?>

<?php get_header(); ?>
<?php
// $terms = get_terms( array(
//     'taxonomy' => 'types',
//     'hide_empty' => false,
// ) );  
//  echo "<pre>";
// 			print_r($terms);
// 			 foreach($terms as $item):
//       echo '<span>'.$item->name.'</span><br>';
     
      
//  endforeach;


// 			 exit();

?>
	<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/banner_img.jpg )">
	<div class="container">
    	<div class="div_zindex">
            <h1>Career</h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="http://themes.webmasterdriver.net/loanshop">Home</a></li><li class="separator">/</li><li>Career</li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-160" class="post-160 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid">
			   							<div class="wpb_column vc_column_container vc_col-sm-12">
			   								<div class="vc_column-inner">
			   									<div class="wpb_wrapper">
			   										<h2 style="text-align: left" class="vc_custom_heading" >Join the team</h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
<h6><span style="text-decoration: underline;">Open Positions</span></h6>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

		</div>
	</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
	<div class="loanshop-tabs wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="vc_tta-container" data-vc-action="collapse">
					<div class="vc_general vc_tta vc_tta-tabs vc_tta-color-grey vc_tta-style-modern vc_tta-shape-square vc_tta-spacing-15 vc_tta-gap-30 vc_tta-tabs-position-top vc_tta-controls-align-left">
         <div class="vc_tta-tabs-container">
           <ul class="vc_tta-tabs-list" style="display: inline-flex;">
	        <li class="vc_tta-tab vc_active" data-vc-tab>
			 <a href="#product" data-vc-tabs data-vc-container=".vc_tta">
			  <i class="vc_tta-icon vc-oi vc-oi-resize-full"></i><span class="vc_tta-title-text" id="hide">Product</span></a></li>
				<li class="vc_tta-tab" data-vc-tab><a href="#uxdesign" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">UX Design </span></a></li>
				<li class="vc_tta-tab" data-vc-tab><a href="#technology" data-vc-tabs data-vc-container=".vc_tta"><i class="vc_tta-icon vc-oi vc-oi-resize-full-alt"></i><span class="vc_tta-title-text">Technology</span></a></li><li class="vc_tta-tab" data-vc-tab><a href="#sales" data-vc-tabs data-vc-container=".vc_tta"><span class="vc_tta-title-text">Sales</span></a>
				</li>
			</ul>
		</div>
		<div class="vc_tta-panels-container">
		 <div class="vc_tta-panels">
		  <div class="vc_tta-panel vc_active" id="product" data-vc-content=".vc_tta-panel-body">
			<div class="vc_tta-panel-heading">
			 <h4 class="vc_tta-panel-title">
			  <i class="vc_tta-icon vc-oi vc-oi-resize-full"></i><span class="vc_tta-title-text">Product</span>
			  
			</h4>
		</div>
		<div class="vc_tta-panel-body">
			<?php 

?>
		<?php
			$args = array(
    'post_type' => 'career',
    'tax_query' => array(
        array(
            'taxonomy' => 'types',
            'field' => 'slug',
            'terms' => 'product'
        )
    )
);

$query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				

        				$date= get_field('expire_date',448); 
$datec= date("d/m/y");
if ($datec <= $date)
	
{
	?>
	
		<div id="1491473369703-5c62c9f9-ccab" class="vc_toggle vc_toggle_default vc_toggle_color_default  vc_toggle_size_md">
	  <div class="vc_toggle_title">
		<h4><?php the_title(); ?></h4>	
			<i class="vc_toggle_icon"></i></div>
	<div class="vc_toggle_content">
		<p><?php the_excerpt(); ?></p>
	</div> 
</div>
	

<?php 
}
else
{
  
}		
 endwhile; wp_reset_postdata(); 
 ?>
 <script>
jQuery(document).ready(function(){
  jQuery("#hide").click(function(){
    jQuery(".vc_toggle_title").toggle();

  });
});
</script>

</div>
</div>
<div class="vc_tta-panel" id="uxdesign" data-vc-content=".vc_tta-panel-body">
	<div class="vc_tta-panel-heading">
		<h4 class="vc_tta-panel-title">
			<a href="#uxdesign" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">UX Design </span></a></h4></div>
			<div class="vc_tta-panel-body">
				<?php
			   $args = array(
               'post_type' => 'career',
               'tax_query' => array(
                             array(
                              'taxonomy' => 'types',
                              'field' => 'slug',
                              'terms' => 'ux-design	'
                                  )
                                 )
                             );
                       $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				?>
<div id="1491473928902-e19f7611-2bb8" class="vc_toggle vc_toggle_square vc_toggle_color_default vc_toggle_color_inverted vc_toggle_size_sm">
	<div class="vc_toggle_title">
		<h4><?php the_title(); ?></h4>
		<i class="vc_toggle_icon"></i></div>
	<div class="vc_toggle_content">
		<p><?php the_excerpt(); ?></p>
	</div>
</div>
<?php 
	 endwhile; wp_reset_postdata(); 
?>

</div></div>
<div class="vc_tta-panel" id="technology" data-vc-content=".vc_tta-panel-body">
	<div class="vc_tta-panel-heading">
		<h4 class="vc_tta-panel-title">
			<a href="#technology" data-vc-accordion data-vc-container=".vc_tta-container"><i class="vc_tta-icon vc-oi vc-oi-resize-full-alt"></i><span class="vc_tta-title-text">Technology</span>
			</a>
		</h4>
	</div>
		<div class="vc_tta-panel-body">

			<?php
			   $args = array(
               'post_type' => 'career',
               'tax_query' => array(
                             array(
                              'taxonomy' => 'types',
                              'field' => 'slug',
                              'terms' => 'ux-design	'
                                  )
                                 )
                             );
                       $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				?>
<div id="1491480454457-6e79bf03-4c32" class="vc_toggle vc_toggle_square vc_toggle_color_default vc_toggle_color_inverted vc_toggle_size_md">
	<div class="vc_toggle_title">
		<h4><?php the_title(); ?></h4>	
		<i class="vc_toggle_icon"></i></div>
	<div class="vc_toggle_content">
		<?php the_excerpt(); ?>
	</div>
</div>
<?php 
	endwhile; wp_reset_postdata(); 
?>

</div></div>
<div class="vc_tta-panel" id="sales" data-vc-content=".vc_tta-panel-body">
	<div class="vc_tta-panel-heading">
		<h4 class="vc_tta-panel-title"><a href="#sales" data-vc-accordion data-vc-container=".vc_tta-container"><span class="vc_tta-title-text">Sales</span></a></h4>
	</div>
		<div class="vc_tta-panel-body">

			<?php
			
			   $args = array(
               'post_type' => 'career',
               'tax_query' => array(
                             array(
                              'taxonomy' => 'types',
                              'field' => 'slug',
                              'terms' => 'sales'
                                  )
                                 )
                             );
                       $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				?>
			<div id="1491476761042-f65540e3-747b" class="vc_toggle vc_toggle_square vc_toggle_color_default vc_toggle_color_inverted vc_toggle_size_sm">
	<div class="vc_toggle_title">
		<h4><?php the_title(); ?></h4>		<i class="vc_toggle_icon"></i></div>
	<div class="vc_toggle_content">
		<?php the_excerpt(); ?>
	</div>
</div>
<?php 
	endwhile; wp_reset_postdata(); 
?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="loanshop-gallery wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
							<div class="wpb_gallery wpb_content_element vc_clearfix" >
								<div class="wpb_wrapper">
									<h2 class="wpb_heading wpb_gallery_heading">View Our Gallery</h2>
									<div class="wpb_gallery_slides wpb_image_grid" data-interval="3">
										<ul class="wpb_image_grid_ul">
											<li class="isotope-item">
												<a class="prettyphoto" href="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg-2.jpg" data-rel="prettyPhoto[rel-160-1424656070]"><img width="300" height="182" src="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg-2-300x182.jpg" class="attachment-medium" alt="" srcset="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg-2-300x182.jpg 300w, http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg-2-768x465.jpg 768w, http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg-2.jpg 960w" sizes="(max-width: 300px) 100vw, 300px" />
												</a>
											</li>
											<li class="isotope-item">
												<a class="prettyphoto" href="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg1.jpg" data-rel="prettyPhoto[rel-160-1424656070]"><img width="300" height="182" src="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg1-300x182.jpg" class="attachment-medium" alt="" srcset="http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg1-300x182.jpg 300w, http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg1-768x465.jpg 768w, http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/abt_bg1.jpg 960w" sizes="(max-width: 300px) 100vw, 300px" />
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>    
           </article>
			<div id="comments" class="comments-area">
      </div>
<!-- .comments-area -->               
         </div>  
 </div>
<?php get_footer(); ?>