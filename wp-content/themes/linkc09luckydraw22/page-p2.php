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


    <div class="tnc-txt-div-outer">
        <div class="tnc-txt-div text-start">

            <h1>「勁抽消費二重賞」抽獎活動條款與細則</h1>

            由2022年8月25日至2022年10月9日(「推廣期」)，顧客登記成為領展會員，並在5個指定商場於推廣期間任何連續三日內以電子貨幣*累積淨消費每滿$200元或以上，並出示該商場內不同商戶發出之正本機印發票最多3張，即可獲得「即抽即中獎」及「終極大抽獎」(統稱「活動」)
            機會各1次；如發票當中包括最多一張特選商戶更可獲得額外「即抽即中獎」及「終極大抽獎」機會各1次。
            *電子貨幣包括信用卡、易辦事、八達通、Apple Pay、Google Pay、Samsung Pay、Tap & Go拍住賞、AlipayHK、WeChat Pay、BoC Pay、PayMe from
            HSBC、或其他手機支付程式、或受《支付系統及儲值支付工具條例》（第584章）規管的其他儲值支付工具(包括但不限於八達通「好易畀」及TNG Wallet)
            <br>
            活動日期︰2022年8月25日至2022年10月9日活動時間︰上午11時至晚上8時
            活動地點：興東商場、愛東商場、環翠商場、逸東商場及耀東商場
            參加抽獎地點：領展上列5個指定商場之顧客服務台即抽即中獎會即時公佈抽獎結果，參加者有機會於「即抽即中獎」中獎。如中獎，參加者需即時領取獎品。終極大抽獎結果將於2022年10月25日起以登記領展會員時提供的流動電話號碼收到短訊通知及/或專人聯絡領獎事宜。詳情將稍後公佈。
            「終極大抽獎」抽獎日期︰2022年10月17日「終極大抽獎」結果公佈日期︰2022年10月25日「終極大抽獎」領獎日期︰2022年10月25日至11月30日
            特選商戶名單：


        </div>
    </div>
</div>
<?php

get_footer();