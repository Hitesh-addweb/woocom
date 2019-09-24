<?php 
/*
* Template Name: contact us Page
*/ ?>
<?php get_header(); ?>

<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php the_field('bgimg'); ?> )">
	<div class="container">
    	<div class="div_zindex">
            <h1><?php the_field('title'); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="http://themes.webmasterdriver.net/loanshop">Home</a></li><li class="separator">/</li><li><?php the_field('title'); ?></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<div id="inner_wrap" class="section-padding">
	<div class="container">
          <article id="post-93" class="post-93 page type-page status-publish hentry">
          		<div class="inner_pages_content">
			   		<div class="vc_row wpb_row vc_row-fluid">
			   			<div class="wpb_column vc_column_container vc_col-sm-12">
			   				<div class="vc_column-inner">
			   					<div class="wpb_wrapper">
			   						<div class="vc_row wpb_row vc_inner vc_row-fluid">
			   							<div class="wpb_column vc_column_container vc_col-sm-8">
			   								<div class="vc_column-inner">
			   									<div class="wpb_wrapper">
			   										<h2 style="text-align: left" class="vc_custom_heading" ><?php the_field('text1'); ?></h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: left;"><?php the_field('text2'); ?></p>

		</div>
	</div>
<div role="form" class="wpcf7" id="wpcf7-f248-p93-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
<?php echo do_shortcode('[contact-form-7 id="507" title="contact us"]'); ?>
</div>
</div>
</div>
</div>
<?php
                if(is_active_sidebar('contact page widget')){
                dynamic_sidebar('contact-page-widget');
                }
                ?>
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