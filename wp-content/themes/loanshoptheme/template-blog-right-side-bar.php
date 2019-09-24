<?php 
/*
* Template Name: Blog Right Sidebar Page
*/ ?>
<?php get_header(); ?>

<?php echo  do_shortcode('[header-section]'); ?>
<section id="inner_wrap" class="section-padding">
			<div class="container">
    			<div class="row">
                   <div class="col-md-8">
                                                    <!-- article-1 -->
                          	<?php $currentpg= get_query_var('paged');
    $args = array(
        'post_type' => 'blog',
        'posts_per_page'=> 1,
        'paged' => $currentpg,
    );

    $query = new WP_Query($args);
    while ( $query->have_posts() ) : 
        $query->the_post();?>


            <?php echo do_shortcode('[header_query]');
            ?> 
<?php endwhile; wp_reset_postdata(); ?>
                                              
  <div class="pagination">
   <ul class='page-numbers'>
	<li><a href="http://localhost/html/loanshop/blog-right-side-bar/"><span aria-current='page' class='page-numbers current'>  <?php echo paginate_links(array(
    'total' => $query->max_num_pages
  )); ?></span></a>
	</li>
	
  </ul>
     </div>
                         <!-- /pagination -->
  </div>
                    <!-- Sidebar -->
 <div class="col-md-4 sidebar">
   <aside class="sidebar">
     <div class="sidebar_widgets">
	    <?php echo do_shortcode('[contact-form-7 id="534" title="blog left form"]'); ?>

		</div>
		  <div class="sidebar_widgets">	
		   <div class="widget_heading">
			 <h5>Recent Posts</h5>
			 </div>		
	<ul>
	 <?php
				
	  $args = array(
	     'post_type' => 'blog',
		 'order'=> 'ASC'
					       
	    );

		$query = new WP_Query($args);
		 while ( $query->have_posts() ) : 
		  $query->the_post(); 
        ?>				
	   <li>
		<a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/"><?php the_title(); ?></a>
			<span class="post-date"><?php echo get_the_date( 'd/m/Y' ); ?></span>
		</li>
	    <?php 
			endwhile; wp_reset_postdata(); 
		?> 

									
		</ul>
		</div>
		<div class="sidebar_widgets">
			<div class="widget_heading">
			</div>
			<ul id="recentcomments">
				<li class="recentcomments">
						<?php
                if(is_active_sidebar('left sidebar recentcm widget')){
                dynamic_sidebar('left-sidebar-recentcm-widget');
                }
                ?>
                	
                </li>

				</ul>
			</div>
			<div class="sidebar_widgets">
				<ul>
				<li>
						<?php
                if(is_active_sidebar('left sidebar archive widget')){
                dynamic_sidebar('left-sidebar-archive-widget');
                }
                ?>
                	
                </li>
		      </ul>
			</div>
			<div class="sidebar_widgets"><div class="widget_heading"><h5>Categories</h5></div>		<ul>
<?php
   $args = array(
               'taxonomy' => 'blogtype',
               'orderby' => 'name',
               'order'   => 'ASC'
           );

   $cats = get_categories($args);

   foreach($cats as $cat) {
?>
				
	<li class="cat-item cat-item-11">
		<a href="<?php echo get_category_link( $cat->term_id ) ?>">
           <?php echo $cat->name; ?>
       </a>
   </li>
 <?php
   }
  ?>
	       </ul>
			</div>
    <div class="sidebar_widgets">

	<ul>
		<li>
			<?php
                if(is_active_sidebar('left sidebar meta widget')){
                dynamic_sidebar('left-sidebar-meta-widget');
                }
            ?>
		</li>
			

	</ul>
	</div>



	<div class="sidebar_widgets">
	  <div class="tagcloud">
		<?php
                if(is_active_sidebar('left sidebar tags widget')){
                dynamic_sidebar('left-sidebar-tags-widget');
            }
        ?>

</div>
</div>
</aside> 
</div>
</div>
</div>
</section>

<?php  get_footer(); ?>