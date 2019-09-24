<?php get_header(); ?>

<?php echo do_shortcode('[header-section]'); ?>
<section id="inner_wrap" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4">
                                    <!-- article-1 -->
             <?php $currentpg= get_query_var('paged');
    $args = array(
        'post_type' => 'blog',
        'posts_per_page'=> 2,
        'paged' => $currentpg,
    );

    $query = new WP_Query($args);
    while ( $query->have_posts() ) : 
        $query->the_post();?>


            <article id="post-870" class="post_wrap post_listing">
              <h2>
                <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/"> <?php the_title(); ?>
                </a>
              </h2>
              <div class="post_elements">
                <ul>
                  <li>
                    <i class="fa fa-user" aria-hidden="true">
                      
                    </i>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php  the_author(); ?>
                      
                    </a>
                  </li>
                  <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                    <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/"><?php the_date( 'd/m/Y' ); ?></a>
                  </li>
                  <li><i class="fa fa-tags" aria-hidden="true"></i><a href="<?php the_permalink(); ?>" rel="category tag"><?php

    $terms = get_the_terms( $post->ID , 'blogtype' );
    foreach ( $terms as $term ) {
        echo $term->name;
    }
?>
  </a></li>
  <li><i class="fa fa-comment" aria-hidden="true"></i>
    <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/#respond">0 Comments
    </a></li></ul>
  </div>
  <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/">
    <div class="post_img">
      <img width="800" height="580" src="<?php the_post_thumbnail_url(); ?>" class="img-responsive center-block wp-post-image" alt="" />
    </div>
  </a>
  <p><?php get_the_excerpt(); ?></p><a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/" class="btn-link">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
</article>
<?php endwhile; wp_reset_postdata();
    //next_posts_link('NEXT PAGE',$query->max_num_pages);
 ?>


                                                 
   <div class="pagination">
        <ul class='page-numbers'>
	     <li>
	     	<a href="http://localhost/html/loanshop/blog-left-side-bar/"><span aria-current='page' class='page-numbers current'>
  </span>
          <?php echo paginate_links(array(
    'total' => $query->max_num_pages
  )); ?>
    
	     	</a>
	     </li>
</ul>
    </div>
                 <!-- /pagination -->
    </div>
             <!-- Sidebar -->
<div class="col-md-4 col-md-pull-8 sidebar">
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
	  <a href="http://themes.webmasterdriver.net/loanshop/how-to-reduce-your-home-loan-rate/"><?php the_title(); ?>
	  	
	  </a>
	  <span class="post-date"><?php echo get_the_date( 'd/m/Y' ); ?></span>
    </li>
		<?php 
			endwhile; wp_reset_postdata(); 
		 ?> 
	</ul>
		</div>
		<div class="sidebar_widgets">
			<ul id="recentcomments">
				<li class="recentcomments">
							<?php
                if(is_active_sidebar('left sidebar recentcm widget')){
                dynamic_sidebar('left-sidebar-recentcm-widget');
                }
                ?>
	            </li>
	        </li>
				</ul>
			</div>
			<div class="sidebar_widgets">
				<div class="widget_heading">
				
				</div>		
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
			<div class="sidebar_widgets">
				<div class="widget_heading"><h5>Categories</h5>
				</div>
			<ul>
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
				<div class="widget_heading">
			</div>
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
