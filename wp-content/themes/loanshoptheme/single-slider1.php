<?php get_header(); ?>
<?php
$terms = get_the_terms( $post->ID, 'loan' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    $firstCategory=$term->slug;
} 


if($firstCategory=='loan-services')
{

?>
 <?php $service = get_field('single_section');  ?>
<section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php echo the_post_thumbnail_url(); ?> )">
	<div class="container">
    	<div class="div_zindex">
        
            <h1><?php  the_title(); ?></h1>
            <div class="breadcrumb">
               	<ul><li><a class="bread-link bread-home" href="http://themes.webmasterdriver.net/loanshop">Home</a></li><li class="separator">/</li><li class="separator_extra"><li class="separator mid_sep">/</li><li class="separator"><?php  the_title(); ?></li></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- Inner-wrap -->
<div class="loan_top_menu nav nav-stacked" data-spy="affix" data-offset-top="350">
<div class="container">
	 <?php
                if(is_active_sidebar('Single page menu')){
                dynamic_sidebar('single-page-menu');
                }
                ?>
</div>
</div>
<section id="inner_wrap" class="services_info full_width_info section-padding">
  <div class="container">
    <div id="overview">	
        <div class="row">
             <div class="col-md-8">
            <h2><?php echo $service['leave_money'];?> </h2>
            <p><?php echo $service['leave_money_txt'];?></p>
          </div>
             <div class="col-md-4">
                <?php
                if(is_active_sidebar('Single page widget')){
                dynamic_sidebar('single-page-widget');
                }
                ?>
             </div>
        </div>
        <h4><?php echo $service['about'];?></h4>
<p><?php echo $service['about_txt'];?></p>
<h6><?php echo $service['small'];?></h6>
<div class="check_mark">
<?php echo $service['small_txt'];?>
</div>
<h6><?php echo $service['commercial'];?></h6>
<div class="check_mark">
<?php echo $service['commercial_txt'];?>
</div>
                <div class="divider double"></div>
            </div>
    
    <div id="eligibility">
        <h4><?php echo $service['business_loan'];?></h4>
        <p><?php echo $service['business_loan_txt'];?></p>
<div class="eligibility_table">
<?php echo $service['table'];?>
</div>
                    <div class="divider double"></div>
            </div>  
    <div id="documentation">  
        <h4><?php echo $service['documentation'];?></h4>
        <p><?php echo $service['documentation_txt'];?></p>
<div class="check_mark">
<?php echo $service['documentation_txt2'];?>
</div>
                    <div class="divider double"></div>
                    </div> 
    <div id="faq">	
      <?php echo do_shortcode('[WPSM_AC id=381]'); ?>
   
    </div>
    <div id="applynow">
        <h4><?php the_field('apply_now',264) ?></h4>
        <p><?php the_field('apply_now_txt',264) ?></p>
<div role="form" class="wpcf7" id="wpcf7-f266-p357-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>

<?php echo do_shortcode('[contact-form-7 id="382" title="Single Page form"]') ?>

</div>  
  </div> 
  </div>
</section>
  
<!-- /Inner-wrap -->
<section id="contact_info" class="section-padding parallex-bg" style="background-image:url(<?php the_field('footerbg_img',7); ?>)">
	<div class="container div_zindex">
    	<div class="row">
                	<div class="col-sm-4">
            	<div class="icon_div"><i class="fa fa-phone" aria-hidden="true"></i></div>
            	<p><a href="tel:+123-456-7890"><?php the_field('cont',7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
            	<div class="icon_div"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
            	<p><a href="mailto: info@example.com"> <?php the_field('emil',7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
            	<div class="icon_div"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
            	<p><a href="tel:+123-456-7890"><?php the_field('cont',7); ?></a> </p>
            </div>
                 </div>
    </div>
    <div class="dark-overlay"></div>
</section>

<?php    

}
elseif($firstCategory=='advisor-services')
{
  ?>

  <section id="inner_header" class="section-padding parallex-bg" style="background-image:url(<?php echo the_post_thumbnail_url(); ?> )">
  <div class="container">
      <div class="div_zindex">
            <h1><?php  the_title(); ?></h1>
            <div class="breadcrumb">
                <ul>
                  <li>
                    <a class="bread-link bread-home" href="http://themes.webmasterdriver.net/loanshop">Home</a></li><li class="separator">/</li><li class="separator_extra"><li class="separator mid_sep">/</li><li class="separator"><?php  the_title(); ?></li></li></ul>            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<section id="inner_wrap" class="services_info section-padding">
  <div class="container">
      <div class="row">
                         <div class="col-md-4">
                <div class="sidebar_menu" id="loan-service">
                    <ul class="navbar-nav-loan">
                      <div class="menu-advisor-menu-container">
                        <ul id="menu-advisor-menu" class="navbar-nav-loan">
                          <?php
                           $args = array(
                          'post_type' => 'slider1',
                             //'category_name' => 'loan-services',
                         'category_name' => 'adviser-categories',
                          );
                        $query = new WP_Query($args);
                       while ( $query->have_posts() ) : 
                       $query->the_post(); 
                          ?>
                          <li id="menu-item-793" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-793">
                            <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                          </li>

                           <?php 
                    endwhile; wp_reset_postdata(); 
                    ?>  <!--  
<li id="menu-item-798" class="menu-item menu-item-type-post_type menu-item-object-service current-menu-item menu-item-798"><a href="http://themes.webmasterdriver.net/loanshop/service/business-plannning/" aria-current="page">Business Plannning</a></li>
<li id="menu-item-800" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-800"><a href="http://themes.webmasterdriver.net/loanshop/service/financial-planning/">Financial Planning</a></li>
<li id="menu-item-799" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-799"><a href="http://themes.webmasterdriver.net/loanshop/service/strategic-planning/">Strategic Planning</a></li>
<li id="menu-item-794" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-794"><a href="http://themes.webmasterdriver.net/loanshop/service/retairement-planning/">Retairement Planning</a></li>
<li id="menu-item-795" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-795"><a href="http://themes.webmasterdriver.net/loanshop/service/taxes-planning/">Taxes Planning</a></li>
<li id="menu-item-796" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-796"><a href="http://themes.webmasterdriver.net/loanshop/service/audit-assurance/">Audit &#038; Assurance</a></li>
<li id="menu-item-797" class="menu-item menu-item-type-post_type menu-item-object-service menu-item-797"><a href="http://themes.webmasterdriver.net/loanshop/service/trades-stocks/">Trades &#038; Stocks</a></li> -->
</ul></div>                    </ul>
                </div>
            </div>
             <div class="col-md-8">
                <div class="advisor_service_detail">
                                                <div class="post_full_img"> 
                                <img width="900" height="600" src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive wp-post-image" alt="" sizes="(max-width: 900px) 100vw, 900px" />  
   </div>
 <?php the_field('single_t1'); ?>
<div>
<h2><?php the_field('single_h1'); ?></h2>
<?php the_field('single_t2'); ?>
<?php the_field('single_t4'); ?>
<?php the_field('single_t5'); ?>
</div>
           
                </div>
             </div>
                    </div>
     </div>
</section>            
<div class="widget-share">
  <p>Share</p>
    <ul class="listnone">
    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://themes.webmasterdriver.net/loanshop/service/business-plannning/" class="btn-share btn-facebook" title="Share on Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
    <li><a href="https://twitter.com/home?status=http://themes.webmasterdriver.net/loanshop/service/business-plannning/" class="btn-share btn-twitter" title="Share on Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
    <li><a href="https://plus.google.com/share?url=http://themes.webmasterdriver.net/loanshop/service/business-plannning/" class="btn-share btn-google" title="Share on Google" target="_blank"> <i class="fa fa-google"></i></a></li>
    <li><a href="https://www.linkedin.com/cws/share?url=http://themes.webmasterdriver.net/loanshop/service/business-plannning/" class="btn-share btn-linkedin" title="Share on Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
  </ul>
</div>
<section id="contact_info" class="section-padding parallex-bg" style="background-image:url(<?php the_field('footerbg_img',7); ?>)">
  <div class="container div_zindex">
      <div class="row">
                  <div class="col-sm-4">
              <div class="icon_div"><i class="fa fa-phone" aria-hidden="true"></i></div>
              <p><a href="tel:+123-456-7890"><?php the_field('cont',7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
              <div class="icon_div"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
              <p><a href="mailto: info@example.com"><?php the_field('cont',7); ?></a> </p>
            </div>
                             <div class="col-sm-4">
              <div class="icon_div"><i class="fa fa-whatsapp" aria-hidden="true"></i></div>
              <p><a href="tel:+123-456-7890"><?php the_field('cont',7); ?></a> </p>
            </div>
                 </div>
    </div>
    <div class="dark-overlay"></div>
</section>

<?php 
}
else
{
  echo("error");
}

?>
  




<?php get_footer(); ?>