<?php 
/*
* Template Name: Home Page
*/ ?>

<?php get_header(); ?>

<div class="container">
	<article id="post-5" class="post-5 page type-page status-publish hentry">
		<div id="banner" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dark_mask vc_custom_1495014774042 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
			<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner vc_custom_1495014783374">
					<div class="wpb_wrapper">
						<div class="vc_row wpb_row vc_inner vc_row-fluid">
							<div class="intro_text wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
			          <?php $hero = get_field('hero_section');  ?>
	<h1 style="text-align: center" class="vc_custom_heading" ><?php echo $hero['hero_t1'];?>
	</h1>
			<h3 style="text-align: center" class="vc_custom_heading" ><?php echo $hero['hero_t2'];?>
			</h3>
			<div class="vc_btn3-container vc_btn3-center vc_custom_1495006928009" >
			<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-square vc_btn3-style-custom vc_btn3-color-grey" href="#" title=""><?php echo $hero['hero_btn'];?></a>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>
		<div id="aboutus" class="vc_row wpb_row vc_row-fluid">
			<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner vc_custom_1493623243392">
					<div class="wpb_wrapper">
					<div class="vc_row wpb_row vc_inner vc_row-fluid">
						<div class="section-header wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<h2 style="text-align: center" class="vc_custom_heading" ><?php echo the_field('oneshop_title'); ?>
										
									</h2>
			<div class="wpb_text_column wpb_content_element " >
				<div class="wpb_wrapper">
					<p>
						<?php echo the_field('oneshop_text'); ?>
						
					</p>

				</div>
			</div>
		</div>
	</div>
</div>
</div>
		<div class="vc_row wpb_row vc_inner vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-6">
				<div class="vc_column-inner">
					<div class="wpb_wrapper">
			<div class="wpb_video_widget wpb_content_element vc_clearfix   vc_video-aspect-ratio-169 vc_video-el-width-100 vc_video-align-center" >
				<div class="wpb_wrapper">
					
					<div class="wpb_video_wrapper">
						<?php echo the_field('ifrm'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
		<div class="features_list wpb_column vc_column_container vc_col-sm-6">
			<div class="vc_column-inner vc_custom_1493472183641">
				<div class="wpb_wrapper">
					<div class="vc_icon_element vc_icon_element-outer icon_div vc_icon_element-align-center vc_icon_element-have-style">
						<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-lg vc_icon_element-style-rounded vc_icon_element-background vc_icon_element-background-color-custom"  style="background-color:"><span class="vc_icon_element-icon fa fa-line-chart" style="color: !important"></span>
						</div>
					</div>

		<div class="wpb_text_column wpb_content_element  info_box" >
			<div class="wpb_wrapper">
				<h6><?php echo the_field('grow_your_business'); ?></h6>
				<p><?php echo the_field('grow_your_business_text'); ?></p>

			</div>
		</div>
		<div class="vc_icon_element vc_icon_element-outer icon_div vc_icon_element-align-center vc_icon_element-have-style">
			<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-lg vc_icon_element-style-rounded vc_icon_element-background vc_icon_element-background-color-custom"  style="background-color:">
				<span class="vc_icon_element-icon fa fa-money" style="color: !important"></span></div>
		</div>

		<div class="wpb_text_column wpb_content_element  info_box" >
			<div class="wpb_wrapper">
				<h6><?php echo the_field('start_a_good_plan_title'); ?></h6>
				<p><?php echo the_field('start_a_good_plan_text'); ?></p>

			</div>
		</div>
		<div class="vc_icon_element vc_icon_element-outer icon_div vc_icon_element-align-center vc_icon_element-have-style">
			<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-lg vc_icon_element-style-rounded vc_icon_element-background vc_icon_element-background-color-custom"  style="background-color:"><span class="vc_icon_element-icon fa fa-user" style="color: !important"></span>
			</div>
		</div>

		<div class="wpb_text_column wpb_content_element  vc_custom_1493472194233 info_box" >
			<div class="wpb_wrapper">
				<h6><?php echo the_field('experienced_title'); ?></h6>
				<p><?php echo the_field('experienced_text'); ?></p>

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

	
<div id="achievements" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid parallex-bg dark_mask vc_custom_1495024695463 vc_row-has-fill">
		<div class="section-padding wpb_column vc_column_container vc_col-sm-12" id="loanshop_achievment">
			<div class="vc_column-inner vc_custom_1493623233683">
				<div class="wpb_wrapper">
					<div class="vc_row wpb_row vc_inner vc_row-fluid">

						
					<?php
					 	$args = array(
					        'post_type' => 'Bank',
					    );
					    $query = new WP_Query($args);
					    while ( $query->have_posts() ) : 
					        $query->the_post(); 
        			?>

	<div class="achievements_info wpb_column vc_column_container vc_col-sm-4">
							
	  <div class="vc_column-inner">
	    <div class="wpb_wrapper">
		  <div class="vc_icon_element vc_icon_element-outer vc_custom_1493465750012 vc_icon_element-align-left">
			<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-size-xl vc_icon_element-style- vc_icon_element-background-color-grey" ><span class="vc_icon_element-icon fa fa-usd" style="color: !important"></span></div>
		</div>

	

	<div class="wpb_text_column wpb_content_element  vc_custom_1493465510852 achievements_des" >
		
		<div class="wpb_wrapper">
		
			<p><?php  the_title(); ?><span style="color: #555;"><?php the_excerpt(); ?></span></p>

		
		
        </div>
	</div>
	
</div>
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

<div class="vc_row-full-width vc_clearfix">
	
</div>
<div id="loans" class="vc_row wpb_row vc_row-fluid">
	<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1493289048882">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="section-header wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('financial'); ?></h2>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p style="text-align: center;"><?php the_field('financial_txt'); ?></p>

		</div>
	</div>
</div>
</div>
</div>
</div>
<div id="loan_slider">
	<div class="owl-carousel owl-theme">
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
		<div class="item">
			<div class="image"> 
				<a href="http://themes.webmasterdriver.net/loanshop/loan/business-loan/">
						<a id="uniii" href="http://themes.webmasterdriver.net/loanshop/loan/car-loan/">
							<img width="800" height="580" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt=""  sizes="(max-width: 800px) 100vw, 800px" /> 
				       </a>
						</div>
		<div class="loan_info">
		  <h5><a href="<?php the_permalink();?>"><?php  the_title(); ?></a></h5>
			<p> <?php the_excerpt(); ?></p>
			 <a href="<?php the_field('url') ?>" class="btn btn-link"><?php the_field('url_tag') ?><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a> 
			</div>
		</div>

						<?php 
						        endwhile; wp_reset_postdata(); 
						        ?>
									</div>
								</div>

								<div class="wpb_text_column wpb_content_element " >
									<div class="wpb_wrapper">
										

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="call_back" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid parallex-bg dark_mask vc_custom_1491397322776 vc_row-has-fill">
					<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner vc_custom_1493623255595">
							<div class="wpb_wrapper">
								<div class="vc_row wpb_row vc_inner vc_row-fluid">
									<div class="wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper"><h2 style="text-align: center" class="vc_custom_heading" >Request a Call Back</h2>
												<div role="form" class="wpcf7" id="wpcf7-f144-p5-o1" lang="en-US" dir="ltr">
								<div class="screen-reader-response">
									
								</div>
			<?php
 				 echo do_shortcode( '[contact-form-7 id="173" title="my form"]' );
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

			<div class="vc_row-full-width vc_clearfix">
		    </div>
			  <div id="why_choose" class="vc_row wpb_row vc_row-fluid">
				<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
				  <div class="vc_column-inner vc_custom_1493623264686">
					<div class="wpb_wrapper">
					  <div class="vc_row wpb_row vc_inner vc_row-fluid">
						<div class="section-header wpb_column vc_column_container vc_col-sm-12">
						  <div class="vc_column-inner">
							<div class="wpb_wrapper">
							<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('why_choose') ?>
								
							</h2>
								<div class="wpb_text_column wpb_content_element " >
									<div class="wpb_wrapper">
										<p><?php the_field('why_choose_us_txt') ?></p>

									</div>
								</div>
									</div>
								</div>
							</div>
						</div>
						<div class="vc_row wpb_row vc_inner vc_row-fluid">
							<?php
							 	$args = array(
							        'post_type' => 'facility',
							    );
							    $query = new WP_Query($args);
							    while ( $query->have_posts() ) : 
							        $query->the_post(); 
		        				?>
							<div class="features_list wpb_column vc_column_container vc_col-sm-4">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class="vc_icon_element vc_icon_element-outer icon_div vc_icon_element-align-center vc_icon_element-have-style">
											<div class="vc_icon_element-inner vc_icon_element-color-custom vc_icon_element-have-style-inner vc_icon_element-size-lg vc_icon_element-style-rounded vc_icon_element-background vc_icon_element-background-color-custom"  style="background-color:"><span class="vc_icon_element-icon fa fa-file-text-o" style="color: !important"></span></div>
										</div>

									<div class="wpb_text_column wpb_content_element " >
										<div class="wpb_wrapper">
											<h6><?php  the_title(); ?></h6>
											<p><?php the_excerpt(); ?></p>

										</div>
									</div>
									
								</div>
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
<div id="interest_rate" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid gray_bg">
	<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1493623277643">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-4">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<h4 style="text-align: left" class="vc_custom_heading heading_bg secondary-bg" ><?php the_field('log_on'); ?>
								</h4>
							</div>
						</div>
					</div>
					<div class="wpb_column vc_column_container vc_col-sm-8">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<div id="interest_rate_slider">
							<div class="owl-carousel owl-theme">

								<?php
									 	$args = array(
									        'post_type' => 'slider2',

									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>
								<div class="item">
									<div class="loan_icon"> 
										<img src="<?php echo the_post_thumbnail_url(); ?>" alt=""> </div>
									<div class="interest_info">
										<h3><?php the_excerpt(); ?></h3>
										<p><a href="http://themes.webmasterdriver.net/loanshop/loan/business-loan/"><?php the_title();?></a></p>
									</div>
								</div>
								<?php 
						        endwhile; wp_reset_postdata(); 
						        ?> 
								
							</div>
						</div>

							<div class="wpb_text_column wpb_content_element " >
								<div class="wpb_wrapper">
								

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
<div class="vc_row-full-width vc_clearfix">
	
</div>
<div id="testimonials" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid dark_mask parallex-bg vc_custom_1495027675039 vc_row-has-fill">
	<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1493623290008">
			<div class="wpb_wrapper">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
				<div class="wpb_column vc_column_container vc_col-sm-12">
					<div class="vc_column-inner">
						<div class="wpb_wrapper">
							<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('slider3_title'); ?>
								
							</h2>
						</div>
					</div>
				</div>
			</div>
			<div id="testimonial_slider">
						<div class="owl-carousel owl-theme">
							<?php
									 	$args = array(
									        'post_type' => 'slider3',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>
							<div class="item">
								<p><?php the_excerpt(); ?></p>
								<p><?php the_title(); ?></p>
							</div>
							<?php 
						        endwhile; wp_reset_postdata(); 
						        ?> 
							
						</div>
					</div>

					<div class="wpb_text_column wpb_content_element " >
						<div class="wpb_wrapper">
							

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="vc_row-full-width vc_clearfix">
		
	</div>
	<div id="our_team" class="vc_row wpb_row vc_row-fluid">
		<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
			<div class="vc_column-inner vc_custom_1493623299607">
				<div class="wpb_wrapper">
					<div class="vc_row wpb_row vc_inner vc_row-fluid">
						<div class="section-header wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner">
								<div class="wpb_wrapper">
									<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('experienced_title') ?></h2>
					<div class="wpb_text_column wpb_content_element " >
						<div class="wpb_wrapper">
							<p style="text-align: center;"><?php the_field('experienced_txt') ?></p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
					<p><a href="tel:+61-1234-567-7890"><?php the_field('contact_no') ?></a>
					</p>
				<p><a href="mailto:david@yourweburl.com"><?php the_field('email_id') ?></a></p> 
				 </div>
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
</div>
</div>
</div>
</div>
<div id="latest_blog" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid gray_bg">
	<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner vc_custom_1493623308759">
			<div class="wpb_wrapper">
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="section-header wpb_column vc_column_container vc_col-sm-12">
						<div class="vc_column-inner">
							<div class="wpb_wrapper">
								<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('finance_title') ?></h2>
												<div class="wpb_text_column wpb_content_element " >
													<div class="wpb_wrapper">
														<p style="text-align: center;"><?php the_field('finance_txt') ?></p>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- vc_grid start -->
	<div class="vc_grid-container-wrapper vc_clearfix">
	  <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:5,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1495088663282-9613b826-88dd-5&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}" data-vc-request="http://themes.webmasterdriver.net/loanshop/wp-admin/admin-ajax.php" data-vc-post-id="5" data-vc-public-nonce="043237f1f4">
		<div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover" data-vc-pageable-content="true">
			<div class="vc_pageable-slide-wrapper vc_clearfix" data-vc-grid-content="true">
					              


		<div class="vc_grid-item vc_clearfix vc_col-sm-4 vc_grid-item-zone-c-bottom" style="display: inline-flex;
    width: 100%;
">
					                 <?php
									 	$args = array(
									        'post_type' => 'slider5',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>
					<div class="vc_grid-item-mini vc_clearfix " style="margin-right: 30px;">
						<div class="vc_gitem-animated-block  vc_gitem-animate vc_gitem-animate-scaleRotateIn" data-vc-animation="scaleRotateIn">
						<div class="vc_gitem-zone vc_gitem-zone-a vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 vc_gitem-is-link" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>') !important;">
						<a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" title="How to Reduce Your Home Loan Rate" class="vc_gitem-link vc-zone-link">
							
						</a>
						<img src="<?php echo the_post_thumbnail_url(); ?>" class="vc_gitem-zone-img" alt="">	
						<div class="vc_gitem-zone-mini">
						</div>
						</div>
			<div class="vc_gitem-zone vc_gitem-zone-b vc_custom_1419240793832 vc-gitem-zone-height-mode-auto vc_gitem-is-link"
													>
		   <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" title="How to Reduce Your Home Loan Rate" class="vc_gitem-link vc-zone-link"></a>	

		  <div class="vc_gitem-zone-mini">
													</div>
												</div>
											</div>
		<div class="vc_gitem-zone vc_gitem-zone-c box-wrap post_info vc_custom_1491462413764">
			<div class="vc_gitem-zone-mini">
				<div class="vc_gitem_row vc_row vc_gitem-row-position-top">
					<div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align- vc_custom_1491463293170">
						<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title" >
							<h5 style="text-align: left" >
								<a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" class="vc_gitem-link" title="How to Reduce Your Home Loan Rate"><?php the_title(); ?></a></h5>
							</div>
						</div>
					</div>
					<div class="vc_gitem_row vc_row vc_gitem-row-position-top">
						<div class="vc_col-sm-6 post_meta vc_gitem-col vc_gitem-col-align- vc_custom_1491463358621">
							<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_author" >
								<p style="text-align: left" ><a href="http://themes.webmasterdriver.net/loanshop/author/admin/" class="vc_gitem-link" title="admin"><?php the_author(); ?></a></p>
							</div>
						</div>
						<div class="vc_col-sm-6 post_meta vc_gitem-col vc_gitem-col-align- vc_custom_1491463368595">
							<div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_date" >
								<p style="text-align: left" >
									<a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" class="vc_gitem-link" title="How to Reduce Your Home Loan Rate"><?php the_date(); ?></a>
								</p>
							</div>
						</div>
					</div>	
				</div>
				</div>
				</div>

				<div class="vc_clearfix"></div>
					<?php 
					endwhile; wp_reset_postdata(); 
				    ?> 
				</div>
											




						</div> 



					</div>	</div>
						</div><!-- vc_grid end -->
					</div></div></div></div>
					<div class="vc_row-full-width vc_clearfix"></div>
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid">
						<div class="section-padding wpb_column vc_column_container vc_col-sm-12">
							<div class="vc_column-inner vc_custom_1493623317391">
								<div class="wpb_wrapper">
									<div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="section-header wpb_column vc_column_container vc_col-sm-12">
										<div class="vc_column-inner">
											<div class="wpb_wrapper">
												<h2 style="text-align: center" class="vc_custom_heading" ><?php the_field('our_partners_title'); ?></h2>
						<div class="wpb_text_column wpb_content_element " >
							<div class="wpb_wrapper">
								<p style="text-align: center;"><?php the_field('our_partners_txt'); ?></p>

							</div>
						</div>
					</div></div></div></div>  
					  <ul class="partners_logo">
					  	<?php
									 	$args = array(
									        'post_type' => 'post2',
									    );
									    $query = new WP_Query($args);
									    while ( $query->have_posts() ) : 
									        $query->the_post(); 
				        				?>
						<li>
							<a href="https://themeforest.net/user/webmasterdriver" target="_blank">
								<img width="150" height="39" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt="" />
							</a>
						</li>
						
						<?php 
					endwhile; wp_reset_postdata(); 
				    ?> 
						
					</ul>
					
					<div class="wpb_text_column wpb_content_element " >
						<div class="wpb_wrapper">
							

						</div>
					</div>
				</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
			</article>
		</div>
		
		<?php get_footer(); ?>