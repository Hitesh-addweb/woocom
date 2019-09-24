<?php   

get_header();



?>

<div>
		<?php  
			if(have_posts()){ // cheaks the post(ralated to the slug of page) related to the cursponding page
				while (have_posts()) {

					the_post();
					?>
					<h1><a href="<?php echo get_the_permalink();//redirect to this page ?>"><?php the_title(); //also= echo get_the_title();?></a></h1> 
					<p><?php the_content(); //also=  echo get_the_content();?></p> 



					<?php

					
				}
			}


		?>



</div>

<?php  
	
get_footer();


?>