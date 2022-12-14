<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- <meta name="viewport" content="width=2000, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
    <?php wp_head(); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



    <!-- <link rel="manifest" href="https://linkc09luckydraw22.com/manifest/manifest-YIT.json"> -->
    <!-- <link rel="prefetch" href="https://linkc09luckydraw22.com/manifest/manifest-YIT.json"> -->

    <?php 
      global $post;
      $post_slug = $post->post_name;
    //   echo $post_slug;
    if($post_slug=='cs-check')
    {
        ?>
    <link rel="manifest" href="https://linkc09luckydraw22.com/manifest-cscheck.json" />

    <?php
    }
    else{
        ?>

    <link rel="manifest" href="https://linkc09luckydraw22.com/manifest-<?php echo $_REQUEST['loc'];?>.json" />

    <?php

    }
      
    ?>


    <script type="text/javascript">
    if ('serviceWorker' in navigator) {
        // register service worker
        navigator.serviceWorker.register('https://linkc09luckydraw22.com/service-worker.js');
    }

    window.ontouchstart = function(event) {
        if (event.touches.length > 1) { //If there is more than one touch
            event.preventDefault();
        }
    }
    </script>



</head>

<body <?php body_class(); ?> oncontextmenu="return true;">
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

        <?php //get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <?php $post_slug = get_post_field( 'post_name', get_post() );
                    
     //               echo $post_slug;?>


                    <?php



                    if(!$_REQUEST['loc'] && $_REQUEST['loc']!='-1' && ($post_slug !='cs-check' && $post_slug !='cs-check2'&& $post_slug !='list-data' && $post_slug !='result') )
                    {
                        wp_redirect(get_site_url().'/menu?loc=-1');
                    }

                    // if( !($_REQUEST['loc'] =='YIT' || $_REQUEST['loc'] =='HT' ||$_REQUEST['loc'] =='OT' ||$_REQUEST['loc'] =='WT' || $_REQUEST['loc'] =='YAT') && $_REQUEST['loc']!='-1'&& ($post_slug !='cs-check' && $post_slug !='cs-check2'&& $post_slug !='list-data'))
                    if( !($_REQUEST['loc'] =='AT' ||$_REQUEST['loc'] =='WT' || $_REQUEST['loc'] =='YAT') && $_REQUEST['loc']!='-1'&& ($post_slug !='cs-check' && $post_slug !='cs-check2'&& $post_slug !='list-data'&& $post_slug !='result'))
                    {
                        wp_redirect(get_site_url().'/menu?loc=-1');
                    }
                    
                    ?>