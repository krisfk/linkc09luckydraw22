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

get_header();

// echo get_field('no_stock_count_ot',101);

?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
<header class="page-header alignwide">
    <h1 class="page-title"><?php single_post_title(); ?></h1>
</header><!-- .page-header -->
<?php endif; ?>


<div class="main-container position-relative">

    <div class="click-btn-div"></div>

    <?php
$query_args = array(
    'post_type' => 'prize',
	'order' => 'ASC',
	'orderby' => 'date',
	// 'meta_key' => 'prize_id',
    'posts_per_page'=>'-1'
);

$the_query = new WP_Query( $query_args );
// echo $_REQUEST['loc'];
if ( $the_query->have_posts() ) {
    $prize_count_arr=array();
    $price_id_arr=array();
      
    while ( $the_query->have_posts() ) {
		$the_query->the_post();
        // echo get_field('prize_id').'<br>';

        array_push($price_id_arr,get_the_ID());
       array_push($prize_count_arr,get_field('stock_'.strtolower($_REQUEST['loc'])));        
}

    array_push($prize_count_arr,get_field('no_stock_count_'.strtolower($_REQUEST['loc']),101));

    // print_r($prize_count_arr);
    // print_r($price_id_arr);

    // echo '<br>';

    $total_index = array_sum($prize_count_arr);
    $rand_result = rand(1,$total_index);
    // echo $total_index.'<br>';
   

    // echo 'result'.$rand_result.'<br>';
    $bingo_prize_idx=-1;
    $idx=0;

    
    for($i=0;$i<sizeof($prize_count_arr);$i++)
    {
        $idx+=$prize_count_arr[$i];

        if($rand_result<=$idx)
        {
            $bingo_prize_idx=$i+1;
            break;
        }
    }
    //   echo '$bingo_prize_idx'.$bingo_prize_idx.'<br>';
      $bingo_prize_post_id = $price_id_arr[$bingo_prize_idx-1];
    // echo 'bingo_prize_post_id'.$bingo_prize_post_id;

    
	wp_reset_postdata();



}



if(!get_field('prize_name',$bingo_prize_post_id))
{
    // $('form').submit();
    wp_redirect(get_site_url().'/p5?loc='.$_REQUEST['loc'].'&member_id='.$_REQUEST['member_id'].'&member_tel='.$_REQUEST['member_tel']);   
    // echo 'nonjo';
}

?>




    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">

    <div class="text-center page4-content-outer">
        <div class="text-center page4-content">


            <img src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_p5_img.png" alt="">

            <div class="text-center">
                <!--     $school_logo_url = wp_get_attachment_image_src(get_field('school_logo'),'full')[0];
 -->

                <img src="<?php echo wp_get_attachment_image_src(get_field('icon',$bingo_prize_post_id),'full')[0];?>"
                    alt="">
            </div>
            <div class="text-center orange" style="font-size:38px">
                <?php //echo $bingo_prize_post_id;?>
                <?php echo get_field('prize_name',$bingo_prize_post_id).' (1'.get_field('unit',$bingo_prize_post_id).')';?>
                <!-- Lowrarouge 水潤雙噴口負離子風筒CL-301（1部) -->
            </div>

            <table class="mx-auto mt-3 position-relative">
                <tr>
                    <td class="pe-4"><input class="form-control page45-form-input" id="staff-input" type="password"
                            placeholder="由工作人員輸入密碼">
                        <div class="error" style="    position: absolute;
    top: 10px;
    right: -170px;
    z-index: 100;">密碼不正確</div>
                    </td>

                    <td>
                        <a href="javascript:void(0);" class="confirm-take">

                            <?php
                        
                        ?>
                            <img style="position:relative; top: -1px;"
                                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_get_btn.png" alt="">
                        </a>
                    </td>
                </tr>
            </table>

            <div class="text-center orange mt-4" style="font-size:40px">
                會員號碼：<?php echo $_REQUEST['member_id'];?> <br>
                你已自動晋級「終極大抽獎」！<br>
                得獎結果將於2022年10月25日於領展網站公佈，敬請留意

            </div>
        </div>
    </div>



</div>

<form method="post" action="<?php echo get_site_url();?>/p5">
    <input type="hidden" name="loc" value="<?php echo $_REQUEST['loc'];?>">
    <input type="hidden" name="member_id" value="">
    <input type="hidden" name="member_tel" value="">
</form>

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




            $('table').html('<span class="orange" style="font-size:50px;">成功領取獎品！</span>');



            $.post("<?php echo get_site_url();?>/wp-json/api/add-member-reward-record", {
                    member_id: '<?php echo $_REQUEST['member_id']; ?>',
                    member_tel: '<?php echo $_REQUEST['member_tel']; ?>',
                    prize_post_id: <?php echo $bingo_prize_post_id;?>,
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