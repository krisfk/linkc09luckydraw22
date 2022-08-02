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


    <div class="pop-up-box">



        <div class="text-center"
            style="font-size: 50px;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width: max-content;">
            你輸入的領展會員號碼為：<span class="confirm-member-id"></span> <br><br>
            你輸入的登記電話頭4位數字為：<span class="confirm-tel-four-num"></span> <br><br>
            請檢查是否正確，日後將會以此會員號碼登記之<br>電話號碼聯絡領獎事宜。

            <div> <a href="javascript:void(0);" class="pop-up-box-close-btn"><img
                        src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_close_btn.png" alt=""></a>
            </div>


        </div>

        <a href="javascript:void(0);" class="confirm-btn"><img
                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_confirm_btn.png" alt=""></a>

    </div>

    <a href="<?php echo get_site_url();?>/p2" class="img-back-btn-a"><img
            src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_back_btn.png" alt=""></a>

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

    $('.confirm-btn').click(function() {

        window.location = "<?php echo get_site_url();?>/p4";
    });

    $('.pop-up-box-close-btn').click(function() {

        $('.pop-up-box').fadeOut(200)
    })

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
            $('.pop-up-box').fadeIn(200);
            $('.confirm-member-id').html(member_id);
            $('.confirm-tel-four-num').html(tel_four_num);
        }



    })




})
</script>
<?php

get_footer();