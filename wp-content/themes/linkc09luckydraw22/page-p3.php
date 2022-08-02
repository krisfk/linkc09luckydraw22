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

    <div class="text-center page3-form-outer">

        <div class="page3-form">
            <table>
                <tr>
                    <td class="text-end orange">
                        <label for="member-id">領展會員號碼：</label>
                    </td>
                    <td><input maxlength="8" id="member-id" type="text" class="form-control" placeholder="請輸入8位數會員號碼">
                        <div class="error">*請確定己輸入8位數會員號碼</div>
                    </td>
                </tr>
                <tr>
                    <td class="text-end orange">
                        <label for="tel-four-num">登記電話頭4位數字：</label>
                    </td>
                    <td><input maxlength="4" id="tel-four-num" type="text" class="form-control"
                            placeholder="如1234-5678，請填1234">
                        <div class="error">*請確定己輸入登記電話頭4位數宇</div>
                    </td>
                </tr>
            </table>
            <div class="mt-4">

                <a href="javascript:void(0);" class="next-btn-a"><img
                        src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_in_btn.png" alt=""></a>
            </div>
        </div>
    </div>




</div>

<script type="text/javascript">
$(function() {

    $('.next-btn-a').click(function() {

        var member_id = $('#member-id').val();
        var tel_four_num = $('#tel-four-num').val();
        var error = false;
        $('.error').css({
            'opacity': '0'
        });

        if (!(/^[0-9]{8}$/.test(member_id))) {
            $('.error').eq(0).css({
                'opacity': '1'
            });
            error = true;
        }

        if (!(/^[0-9]{4}$/.test(tel_four_num))) {
            $('.error').eq(1).css({
                'opacity': '1'
            });

            error = true;
        }

        if (!error) {

        }



    })




})
</script>
<?php

get_footer();