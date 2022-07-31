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


<div class="main-container">

    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">



    <table>
        <tr>
            <td>領展會員號碼：</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>登記電話頭4位數字：</td>
            <td><input type="text" class="form-control"></td>
        </tr>
    </table>
    <div class="mt-4">

        <a href="javascript:void(0);" class="agree-btn-a"><img
                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_ok_btn.png" alt=""></a>
    </div>



</div>

<script type="text/javascript">
$(function() {


})
</script>
<?php

get_footer();