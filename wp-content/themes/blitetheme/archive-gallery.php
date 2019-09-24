
<?php get_header(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function () {
    "use strict";
    
    $(".popup img").click(function () {
        var $src = $(this).attr("src");
        $(".show").fadeIn();
        $(".img-show img").attr("src", $src);
    });
    
    $("span, .overlay").click(function () {
        $(".show").fadeOut();
    });
    
});
</script>
<style type="text/css">
	.popup{
    width: 900px;
    margin: auto;
    text-align: center
}
.popup img{
    width: 200px;
    height: 200px;
    cursor: pointer
}
.show{
    z-index: 999;
    display: none;
}
.show .overlay{
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,.66);
    position: absolute;
    top: 0;
    left: 0;
}
.show .img-show{
    width: 600px;
    height: 400px;
    background: #FFF;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    overflow: hidden
}
.img-show span{
    position: absolute;
    top: 10px;
    right: 10px;
    z-index: 99;
    cursor: pointer;
}
.img-show img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
}
/*End style*/

</style>
<section class="grid margin">
<?php
// $args = array(
// 'post_type' => 'gallery',
// 'order_by' => 'title',
// 'order' => 'DESC',
// 'post_per_page' => 5
// );
//$query = new WP_Query($args);
while (have_posts() ) : 
the_post(); 
?>

<div class="popup">
<a class="fancybox" rel="group" href="<?php echo get_the_post_thumbnail_url(); ?>" data-fancybox-group="gallery" >

<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="img" />
</a>
</div>

<?php endwhile; wp_reset_postdata(); ?>
</section>
<?php get_footer(); ?>