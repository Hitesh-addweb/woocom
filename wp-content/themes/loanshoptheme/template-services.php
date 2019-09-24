<?php 
/*
* Template Name: Services Page
*/ ?>
<?php get_header(); ?>

<?php     

		$slug=$post->post_name;
		if($slug=='loan-services-2'){
			?>
			<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('imgbg') ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title') ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title') ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-801" class="post-801 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner vc_custom_1493291034197">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid">
			   							<div class="section-header wpb_column vc_column_container vc_col-sm-12">
			   								<div class="vc_column-inner">
			   									<div class="wpb_wrapper"><h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('financial',7) ?> </h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><?php the_field('financial_txt',7) ?> </p>

		</div>
	</div>
</div></div></div></div> 
   	
   		<?php
			   $args = array(
               'post_type' => 'slider1',
               'tax_query' => array(
                             array(
                              'taxonomy' => 'loan',
                              'field' => 'slug',
                              'terms' => 'loan-services'
                                  )
                                 )
                             );
                       $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				?>
        <div class="col-md-4">
          <div class="service_wrap">
          	<div class="image"> 
          	<a href="http://themes.webmasterdriver.net/loanshop/loan/business-loan/">
            	<img width="800" height="580" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt="" sizes="(max-width: 800px) 100vw, 800px" />            </a>
          </div>
          	<div class="loan_info">
            <h5><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></h5>
            <p>  <?php the_excerpt(); ?></p>
            <a href="<?php the_field('url') ?>"><?php the_field('url_tag') ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> </div>
          </div> 
          </div> 
	   
	    <?php 
						        endwhile; wp_reset_postdata(); 
						        ?>

						         

	
    
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			

		</div>
	</div>
</div></div></div></div>
            	</div>    
           </article>
			<div id="comments" class="comments-area">
      </div>
<!-- .comments-area -->               
         </div>  
 </div>
<?php
		}
		else {
			?>

			<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('adbgimg') ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title') ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="<?php the_field('link1',9) ?>">Home</a></li><li class="separator">/</li><li><?php the_field('title') ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-687" class="post-687 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner vc_custom_1493291034197">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="section-header wpb_column vc_column_container vc_col-sm-12">
			   							<div class="vc_column-inner">
			   								<div class="wpb_wrapper">
			   									<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('we_love') ?></h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><?php the_field('we_love_txt') ?></p>

		</div>
	</div>
</div></div></div></div><div class="row">
	<?php
			   $args = array(
               'post_type' => 'slider1',
               'tax_query' => array(
                             array(
                              'taxonomy' => 'loan',
                              'field' => 'slug',
                              'terms' => 'advisor-services'
                                  )
                                 )
                             );
                       $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        				?>
        
      <div class="col-md-3 services_wrap">
        <div class="services_image">
        	<a href="http://themes.webmasterdriver.net/loanshop/service/insurance-consulting/"><img width="800" height="580" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive center-block wp-post-image" alt="" /></a>
        </div>
        <h5><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></h5>
            <p> <?php the_excerpt(); ?></p>
    </div>

    <?php 
						        endwhile; wp_reset_postdata(); 
						        ?>    
					       
  </div>      
 
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			

		</div>
	</div>
</div></div></div></div>
            	</div>    
           </article>
			<div id="comments" class="comments-area">
      </div>
<!-- .comments-area -->               
         </div>  
 </div>


			<?php
		}


?>

<?php get_footer(); ?>