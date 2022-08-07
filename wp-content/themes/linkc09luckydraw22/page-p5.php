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


<div class="main-container position-relative">

    <div class="click-btn-div"></div>


    <!-- 
    <a href="<?php echo get_site_url();?>/p2" class="img-back-btn-a"><img
            src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_back_btn.png" alt=""></a> -->

    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">

    <div class="text-center page4-content-outer">
        <div class="text-center page4-content">




            <div class="text-center orange" style="font-size: 2.5rem;font-weight: bold;margin: 100px 0 0 0;">
                會員號碼：<?php echo $_REQUEST['member_id'];?> <br>
                多謝參與， <br>
                你已自動晉級「終極大抽獎」！
            </div>



            <table class="mx-auto mt-5 position-relative">
                <tr>
                    <td class="pe-4"><input class="form-control page45-form-input" id="staff-input" type="password"
                            placeholder="由工作人員輸入密碼">
                        <div class="error" style="    position: absolute;
    top: -5px;
    right: -145px;
    z-index: 100;
    opacity: 0;">密碼不正確</div>
                    </td>

                    <td>
                        <a href="javascript:void(0);" class="confirm-take">

                            <?php
                        
                        ?>
                            <img style="position:relative; top: -1px;height:62px"
                                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_confirm_btn.png"
                                alt="">
                        </a>
                    </td>
                </tr>
            </table>

        </div>
    </div>

    <div class="raffle-number">推廣生意的競賽牌照號碼：xxxxx</div>


</div>

<script type="text/javascript">
$(function() {



    $('.click-btn-div').click(function() {
        window.location =
            "<?php echo get_site_url();?>?loc=<?php echo $_REQUEST['loc'];?>"
    })

    $('.confirm-take').click(function() {

        $('.error').css({
            'opacity': '0'
        });

        var staff_input = $('#staff-input').val();

        if (staff_input == 'link1234') {




            $('table').html('<span class="orange" style="font-size:1.5rem;">多謝參與！</span>');



            $.post("<?php echo get_site_url();?>/wp-json/api/add-member-reward-record", {
                    member_id: '<?php echo $_REQUEST['member_id']; ?>',
                    member_tel: '<?php echo $_REQUEST['member_tel']; ?>',
                    prize_post_id: <?php echo '-1';?>,
                    reward_place: '<?php echo $_REQUEST['loc'];?>'
                })
                .done(function(data) {

                    $('.click-btn-div').fadeIn(0);

                    // setTimeout(() => {
                    //     window.location =
                    //         "<?php echo get_site_url();?>?loc=<?php echo $_REQUEST['loc'];?>"
                    // }, 3000);


                });





        } else {
            $('.error').css({
                'opacity': '1'
            });
        }

    })




})
</script>
<?php

get_footer();