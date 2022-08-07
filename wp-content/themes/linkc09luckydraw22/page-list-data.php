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


<div class="mobile-main-container mobile-main-container-2 text-center d-inline-block">

    <h1 class="mt-5">List Data</h1>

    <div class="mb-4">shown location: <?php  echo $_REQUEST['show'] ? $_REQUEST['show']:'All'?></div>
    <ul class="list-data-filter-ul p-0">
        <li>
            <a href="?show=ALL">ALL</a>
        </li>
        <li>
            <a href="?show=YIT">YIT</a>
        </li>
        <li>
            <a href="?show=YIT">HT</a>
        </li>
        <li>
            <a href="?show=YIT">OT</a>
        </li>
        <li>
            <a href="?show=YIT">WT</a>
        </li>
        <li>
            <a href="?show=YIT">YAT</a>
        </li>
    </ul>

</div>

<?php

get_footer();