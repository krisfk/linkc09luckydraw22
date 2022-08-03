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


<div class="mobile-main-container">

    <div style="font-size: 30px;
    text-align: center;
    display: inline-block;
    margin: 300px 0 0 0;
    width: 100%;">
        <div class="orange" style="">領展會員號碼</div>

        <input maxlength="8" id="member-id" type="text" class="form-control" placeholder="請輸入8位數會員號碼">
        <div class="error">*請確定己輸入8位數會員號碼</div>



    </div>


    <div class="text-center" style="position: absolute;
    bottom: 2rem;
    width: 100%;">
        <a href="javascript:void(0);"><img style="height:50px"
                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_mobile_check_btn.png" alt=""></a>

        <div class="mt-5" style="font-size:12px;color:#7d797b">推廣生意的競賽牌照號碼：xxxx</div>
    </div>


</div>


<?php

get_footer();