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


<div class="result-header text-center">

    <a href="http://www.linkhk.com/" target="_blank" class="list-logo-a">
        <img src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_logo.png" alt="">
    </a>
</div>

<div class="container text-center">

    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3 ">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_img.png" alt="">
    </div>

    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3 ">
        <img class="list-img list-img-w1" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_w1.png"
            alt="">
        <img class="list-img list-img-w2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_w2.png"
            alt="">

    </div>
    <div class="mt-lg-5 mt-md-5 mt-sm-5 mt-4 ">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_1.png" alt="">
    </div>
    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3 ">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_2.png" alt="">
    </div>
    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3 ">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_3.png" alt="">
    </div>
    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3 ">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_4.png" alt="">
    </div>
    <div class="mt-lg-4 mt-md-4 mt-sm-4 mt-3  mb-5">
        <img class="list-img" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/10/list_5.png" alt="">
    </div>
</div>


<script type="text/javascript">
$(function() {


    adjust();

    // $(window).resize(function() {
    //     adjust();

    // })


})

function adjust() {
    if ($(window).width() >= 480) {
        for (i = 0; i < $('.list-img').length; i++) {
            $('.list-img').eq(i).width($('.list-img').eq(i).width() * 0.7)
        }
    } else {
        for (i = 0; i < $('.list-img').length; i++) {
            $('.list-img').eq(i).removeAttr('style');
        }
    }
}
</script>
<?php

get_footer();