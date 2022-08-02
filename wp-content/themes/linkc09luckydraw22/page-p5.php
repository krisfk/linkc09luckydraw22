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

    <!-- 
    <a href="<?php echo get_site_url();?>/p2" class="img-back-btn-a"><img
            src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_back_btn.png" alt=""></a> -->

    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">

    <div class="text-center page4-content-outer">
        <div class="text-center page4-content">




            <div class="text-center orange mt-4" style="font-size: 70px;font-weight: bold;">
                會員號碼：12345678 <br>
                多謝參與， <br>
                你已自動晉級「終極大抽獎」！
            </div>



            <table class="mx-auto mt-5">
                <tr>
                    <td class="pe-4"><input class="form-control page45-form-input" id="staff-input" type="text"
                            placeholder="由工作人員輸入密碼">
                    </td>

                    <td>
                        <a href="javascript:void(0);">
                            <img style="height:90px"
                                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_confirm_btn.png"
                                alt="">
                        </a>
                    </td>
                </tr>
            </table>

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