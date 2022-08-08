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