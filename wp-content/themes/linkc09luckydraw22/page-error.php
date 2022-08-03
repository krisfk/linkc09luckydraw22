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


<div class="mobile-main-container mobile-main-container-2 text-center d-inline-block error-container">



    <h1 class="mt-5">請在選擇地區：</h1>
    <ul class="mt-5 p-0 ms-0 d-inline-block">
        <li>
            <a href="<?php echo get_site_url();?>?loc=YIT">Yiu Tung</a>

        </li>
        <li>
            <a href="<?php echo get_site_url();?>?loc=HT">Hing Tung</a>
        </li>
        <li>
            <a href="<?php echo get_site_url();?>?loc=OT">Oi Tung</a>
        </li>
        <li>
            <a href="<?php echo get_site_url();?>?loc=WT">Wan Tsui</a>

        </li>
        <li>
            <a href="<?php echo get_site_url();?>?loc=YAT">Yat Tung</a>
        </li>

        <li>

            <a style="background:#7e3a3a;" href="<?php echo get_site_url();?>/cs-check">CS CHECK</a>


        </li>
    </ul>



</div>

<?php

get_footer();