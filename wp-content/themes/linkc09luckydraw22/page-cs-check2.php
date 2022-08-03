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
    margin: 205px 0 0 0;
    width: 100%;">
        <div class="orange" style="">取得獎品：</div>

        <div class="prize-record-div orange">

            <?php
$query_args = array(
    'post_type' => 'member_reward_record',
    'meta_query' => array(
         array(
            'key' => 'member_id',
            'value' => $_REQUEST['member_id'],
            'compare' => '=',
         ),
    ),
);

// The Query
$the_query = new WP_Query( $query_args );

// The Loop
if ( $the_query->have_posts() ) {
    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        ?>

            <table class="prize-record-table mt-3">
                <tr>
                    <td>會員號碼：</td>
                    <td><?php echo $_REQUEST['member_id']?> <br>
                        <?php 
                        $price_post_id = get_field('prize_post_id');

                        echo get_field('prize_name',$price_post_id);
                        
                        ?>

                        <br><br>

                        <?php echo get_field('reward_datetime')?> <?php echo get_field('reward_place');?>

                    </td>
                </tr>
            </table>
            <?php
    }
    wp_reset_postdata();
} 
?>

            <!-- <table class="prize-record-table mt-3">
                <tr>
                    <td>會員號碼：</td>
                    <td>9888 8888 <br>
                        Lowra rouge 水潤雙噴口負離子<br>
                        風筒CL-301（1部)<br><br>

                        2022-8-29 16:40 YIT
                    </td>
                </tr>
            </table>
            <table class="prize-record-table">
                <tr>
                    <td>會員號碼：</td>
                    <td>9888 8888 <br>
                        Lowra rouge 水潤雙噴口負離子<br>
                        風筒CL-301（1部)<br><br>

                        2022-8-29 16:40 YIT
                    </td>
                </tr>
            </table>
            <table class="prize-record-table">
                <tr>
                    <td>會員號碼：</td>
                    <td>9888 8888 <br>
                        Lowra rouge 水潤雙噴口負離子<br>
                        風筒CL-301（1部)<br><br>

                        2022-8-29 16:40 YIT
                    </td>
                </tr>
            </table> -->


        </div>




    </div>


    <div class="text-center" style="position: absolute;
    bottom: 1rem;
    width: 100%;">
        <!--  -->
        <a class="d-inline-block find-btn" href="<?php echo get_site_url();?>/cs-check"><img style="height:50px"
                src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_mobile_bk_btn.png" alt=""></a>

        <div class="mt-3" style="font-size:12px;color:#7d797b">推廣生意的競賽牌照號碼：xxxx</div>
    </div>


</div>

<script type="text/javascript">
$(function() {
    $('.find-btn').click(function() {

        // alert(5);
        $.post("<?php echo get_site_url();?>/wp-json/api/find-member", {
                member_id: $('#member-id').val(),
            })
            .done(function(data) {
                if (data.status == -1) {
                    $('.error').css({
                        'opacity': '1'
                    });
                }
                // alert(data.status);
                // alert("Data Loaded: " + data);
            });


    })

})
</script>

<?php

get_footer();