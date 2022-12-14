<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>

finished

<!-- <div class="main-container">

    <div class="place d-none"><?php echo $_REQUEST['loc'];?></div>

    <img class="img-top-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_cover_img.png" alt="">

    <a class="draw-btn-a" href="javascript:void(0);">
        <img class="draw-btn" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_draw_btn.png" alt="">
    </a>

    <div class="raffle-number">推廣生意的競賽牌照號碼：55986, 55987</div>
</div> -->

<form method="post" action="<?php echo get_site_url();?>/p2">
    <input type="hidden" name="loc" value="<?php echo $_REQUEST['loc'];?>">
</form>

<script type="text/javascript">
$(function() {

    $('.draw-btn-a').click(function() {

        $('form').submit();

    })
})
</script>
<?php

get_footer();