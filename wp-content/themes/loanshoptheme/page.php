<?php get_header(); ?>

<?php

$the_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
$slug = $the_page->post_name;

if($slug=='emi-calculator-2')
{
	?><section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('bgimg'); ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-269" class="post-269 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12">
			   							<div class="vc_column-inner">
			   								<div class="wpb_wrapper">
			   									<h2 style="text-align: left" class="vc_custom_heading" ><?php the_field('text1'); ?></h2>
	<div class="row">
      	<div class="col-md-8">
      		<div class="form_wrap calculator_form">

      		<?php

      			echo do_shortcode('[contact-form-7 id="419" title="EMI contact form"]');

      		  ?> 
                               
           </div>  
        </div>
        <?php
                if(is_active_sidebar('EMI widget')){
                dynamic_sidebar('emi-widget');
                }
                ?>
      </div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			

		</div>
	</div>

	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><a class="btn btn-block btn-lg" href="<?php the_field('url'); ?>"><i class="fa fa-paper-plane"></i> <?php the_field('apply_for_loan'); ?></a></p>

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
 <?php 


}

elseif($slug=='apply-now'){
	?>


	<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('bgimg'); ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-264" class="post-264 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid">
			   							<div class="wpb_column vc_column_container vc_col-sm-12">
			   							<div class="vc_column-inner">
			   								<div class="wpb_wrapper">
			   									<h2 style="text-align: left" class="vc_custom_heading" ><?php the_field('text'); ?></h2>
			   									<div role="form" class="wpcf7" id="wpcf7-f874-p264-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<?php echo do_shortcode('[contact-form-7 id="430" title="apply now form"]'); ?>
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
 <?php
}

elseif($slug=='our-team')
{
	?><section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('bgimg'); ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-417" class="post-417 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('post_title'); ?></h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper" style="text-align: center;">
				<?php the_field('post_txt'); ?>
		</div>
	</div>
</div></div></div></div></div></div></div></div>
<div id="our_team" class="vc_row wpb_row vc_row-fluid parallex-bg">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner"><div class="wpb_wrapper">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
					<div class="wpb_wrapper">  
					<?php
									 	$args = array(
									        'post_type' => 'slider4',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>  
	  <div class="col-md-3 col-sm-6">
		<div class="box-wrap">
			<div class="team_img">
			  <img width="400" height="400" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt=""  sizes="(max-width: 400px) 100vw, 400px" />                   
				<div class="team_contact">
					<p><a href="tel:+61-1234-567-7890"><?php the_field('contact_no') ?></a></p><p><a href="mailto:david@yourweburl.com"><?php the_field('email_id') ?></a></p>     </div>
			</div>
			<div class="team_info">
								<h6><?php the_title(); ?></h6>
								<p><?php the_excerpt(); ?></p> 
	        </div>
		</div>
	</div>
             <?php 
						        endwhile; wp_reset_postdata(); 
						        ?> 

		<?php
									 	$args = array(
									        'post_type' => 'slider4',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>  
	  <div class="col-md-3 col-sm-6">
		<div class="box-wrap">
			<div class="team_img">
			  <img width="400" height="400" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt=""  sizes="(max-width: 400px) 100vw, 400px" />                   
				<div class="team_contact">
					<p><a href="tel:+61-1234-567-7890"><?php the_field('contact_no') ?></a></p><p><a href="mailto:david@yourweburl.com"><?php the_field('email_id') ?></a></p>     </div>
			</div>
			<div class="team_info">
								<h6><?php the_title(); ?></h6>
								<p><?php the_excerpt(); ?></p> 
	        </div>
		</div>
	</div>
             <?php 
						        endwhile; wp_reset_postdata(); 
						        ?> 

      
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			

		</div>
	</div>
</div></div></div></div></div></div></div></div>
            	</div>    
           </article>
			<div id="comments" class="comments-area">
      </div>
<!-- .comments-area -->               
         </div>  
 </div>
 <?php
}

elseif($slug=='pricing-table')
{
	?>
		<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(http://themes.webmasterdriver.net/loanshop/wp-content/uploads/2017/04/calculator_bg.jpg )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>
               	">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-463" class="post-463 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid">
			   							<div class="section-header wpb_column vc_column_container vc_col-sm-12">
			   								<div class="vc_column-inner">
			   									<div class="wpb_wrapper">
			   										<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('txt1'); ?></h2>
	<div class="wpb_text_column wpb_content_element" >
		<div class="wpb_wrapper">
			<p style="text-align: center;"><?php the_field('txt2'); ?></p>

		</div>
	</div>
</div></div></div>
</div>
<div class="vc_row wpb_row vc_inner vc_row-fluid">
	<?php
									 	$args = array(
									        'post_type' => 'pricing',
									        'posts_per_page' => 4,
									        'order_by' => 'id',
									        'order' => 'ASC',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?> 
	<div class="pricing_wrap wpb_column vc_column_container vc_col-sm-3">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
				<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			 
			<div class="pricing_table">
<div class="table_header">
<h6><?php the_title(); ?></h6>
<div class="price_m">
<p><?php the_excerpt(); ?></p>
<p><span class="month"><?php the_field('per_month'); ?></span></p>
</div>
</div>
<div class="package_info">
<?php the_field('text'); ?>
</div>
<p><a class="btn outline" href="#"><?php the_field('btn'); ?></a></p>
</div>
 
		</div>
	</div>
</div></div></div>
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
<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			
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

	<?php

}
	elseif($slug=='faq')
	{
		?>

		<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('bgimg'); ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
 <div class="container">
   <article id="post-271" class="post-271 page type-page status-publish hentry">
     <div class="inner_pages_content">
	   <div class="vc_row wpb_row vc_row-fluid">
	     <div class="wpb_column vc_column_container vc_col-sm-12">
		  <div class="vc_column-inner">
			<div class="wpb_wrapper">
			 <div class="vc_row wpb_row vc_inner vc_row-fluid faq">
	          <div class="wpb_column vc_column_container vc_col-sm-12">
	          	<div class="vc_column-inner">
	             <div class="wpb_wrapper">

	             	<?php echo do_shortcode('[WPSM_AC id=482]'); ?>
	  
</div>
</div>
</div>
</div>
<div id="inner_wrap" class="vc_row wpb_row vc_inner vc_row-fluid padding_top faq">
	<div class="apply_loan wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
			<div class="wpb_wrapper">

				<?php echo do_shortcode('[WPSM_AC id=483]'); ?>
	
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
		<?php
		
	}
	

	elseif($slug=='404-page')
	{
		?>
		<section id="inner_header" class="section-padding parallex-bg error_bg" style=" background-image:url(<?php the_field('bgimg',227) ?>)">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 
<!--Error-404-->
<section id="inner_wrap" class="section-padding">
	<div class="container">
    	<div class="error_msg">
            <h2><?php the_field('title2'); ?></h2>
            <h3><?php the_field('txt1'); ?></h3>
			<p> <?php the_field('txt2'); ?></p>
            <a href="<?php the_field('link1',9) ?>" class="btn"><?php the_field('button'); ?></a>
        </div>
    </div>
</section>
		<?php
	}
else
{
	echo 'no match';
}

?>

<?php get_footer(); ?>