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


<div class="mobile-main-container mobile-main-container-2 text-center d-inline-block">

    <h1 class="mt-5">List Data</h1>

    <div class="mb-4">shown location: <?php  echo $_REQUEST['show'] ? $_REQUEST['show']:'All'?></div>
    <ul class="list-data-filter-ul p-0">
        <li>
            <a href="?show=ALL">ALL</a>
        </li>
        <li>
            <a href="?show=YIT">YIT</a>
        </li>
        <li>
            <a href="?show=YIT">HT</a>
        </li>
        <li>
            <a href="?show=YIT">OT</a>
        </li>
        <li>
            <a href="?show=YIT">WT</a>
        </li>
        <li>
            <a href="?show=YIT">YAT</a>
        </li>
    </ul>




    <div class="text-start mt-5">
        <a href="javascript:void(0);" class="btn btn-info getfile">EXPORT</a>
    </div>


    <?php
    
                    
// Get arguments for all posts
$args = array( 
    'post_type' => 'member_reward_record',
    'posts_per_page' => -1,
    // 'meta_query' => array(
    //      array(
    //         'key' => 'member_id',
    //         'value' => $_REQUEST['member_id'],
    //         'compare' => '=',
    //      ),
    // ),
);
$the_query = new WP_Query( $args );
$idx=0;
?>
    <table class="excel-table mt-5" id="excel-table">
        <tr>
            <th>會員號碼</th>
            <th>會員電話</th>
            <th>領取獎品</th>
            <th>領取時間</th>
            <th>領取地點</th>
        </tr>
        <?php
if ( $the_query->have_posts() ):

	while ( $the_query->have_posts() ): $the_query->the_post();

    ?>
        <tr>
            <td><?php echo get_field('member_id');?></td>
            <td><?php echo get_field('member_tel');?></td>
            <td></td>
            <td><?php echo get_field('reward_datetime');?></td>
            <td><?php echo get_field('reward_place');?></td>

        </tr>
        <?php

endwhile;
wp_reset_postdata();

endif;
?>
    </table>

    <?php
// $table='<table class="excel-table mt-5" id="excel-table">
//         <tr>';
//         // foreach($sorted_meta_data as $meta_data)
//         // {
//         //     $table.='<td class="fw-bold text-light bg-dark">'.$meta_data['label'].'</td>';
//         //     array_push( $table_th_arr,$meta_data['label']);
//         //     array_push( $field_key_arr,$meta_data['name']);
//         // }
//     $table .='</tr>';  
    ?>




</div>





<style type="text/css">
body {
    padding: 1rem;
}

table {
    width: max-content;
    border-spacing: 0;
    border-collapse: collapse;

}

table.excel-table th {
    padding: 1rem;
    border: 1px solid #000;
}

table.excel-table td {
    padding: 1rem;

    border: 1px solid #000;
}
</style>

<script type="text/javascript">
$(function() {
    $('.getfile').click(
        function() {
            exportTableToCSV.apply(this, [$('#excel-table'), 'tutor-list.csv']);
        });

})

function exportTableToCSV($table, filename) {

    var $rows = $table.find('tr:has(td)'),

        // Temporary delimiter characters unlikely to be typed by keyboard
        // This is to avoid accidentally splitting the actual contents
        tmpColDelim = String.fromCharCode(11), // vertical tab character
        tmpRowDelim = String.fromCharCode(0), // null character

        // actual delimiter characters for CSV format
        colDelim = '","',
        rowDelim = '"\r\n"',

        // Grab text from table into CSV formatted string
        csv = '"' + $rows.map(function(i, row) {
            var $row = $(row),
                $cols = $row.find('td');

            return $cols.map(function(j, col) {
                var $col = $(col),
                    text = $col.text();

                return text.replace('"', '""'); // escape double quotes

            }).get().join(tmpColDelim);

        }).get().join(tmpRowDelim)
        .split(tmpRowDelim).join(rowDelim)
        .split(tmpColDelim).join(colDelim) + '"',

        // Data URI
        csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

    $(this)
        .attr({
            'download': filename,
            'href': csvData,
            'target': '_blank'
        });
}
</script>

<?php

get_footer();