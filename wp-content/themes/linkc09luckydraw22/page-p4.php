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


<div class="main-container">

    <?php
$query_args = array(
    'post_type' => 'prize',
	'order' => 'ASC',
	'orderby' => 'meta_value',
	'meta_key' => 'prize_id',
    'posts_per_page'=>'-1'
);

$the_query = new WP_Query( $query_args );

if ( $the_query->have_posts() ) {
    $prize_count_arr=array();
      
    while ( $the_query->have_posts() ) {
		$the_query->the_post();
       array_push($prize_count_arr,get_field('stock_'.strtolower($_REQUEST['loc'])));        
}

    array_push($prize_count_arr,get_field('no_stock_count_'.strtolower($_REQUEST['loc']),101));

    $total_index = array_sum($prize_count_arr);
    $rand_result = rand(1,$total_index);
    echo $rand_result.'<br>';
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
    echo $bingo_prize_idx;
    // $price_idx = 
    
	wp_reset_postdata();
}



?>
    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">

    <div class="text-center page4-content-outer">
        <div class="text-center page4-content">


            <img src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_p5_img.png" alt="">

            <div class="text-center">
                <img src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/icon-06.png" alt="">
            </div>
            <div class="text-center orange" style="font-size:38px">Lowrarouge 水潤雙噴口負離子風筒CL-301（1部)</div>

            <table class="mx-auto mt-3">
                <tr>
                    <td class="pe-4"><input class="form-control page45-form-input" id="staff-input" type="text"
                            placeholder="由工作人員輸入密碼">
                    </td>

                    <td>
                        <a href="javascript:void(0);">
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