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

<?php //echo $_REQUEST['loc'];?>

<div class="main-container">

    <a href="<?php echo get_site_url();?>?loc=<?php echo $_REQUEST['loc'];?>" class="img-back-btn-a"><img
            src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_back_btn.png" alt=""></a>


    <img class="img-top-img-2" src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_top_img.png" alt="">


    <div class="tnc-txt-div-outer">
        <div class="tnc-txt-div text-start">

            <div class="tnc-txt-div-inner">
                <?php echo get_the_content();?>

                <!-- <h1 class="text-center">「勁抽消費二重賞」抽獎活動條款與細則</h1><br>

                <ol class="ps-3">
                    <li> 「勁抽消費二重賞」(「活動」)由領展資產管理有限公司(「主辦單位」)舉辦；</li>
                    <li> 透過參加活動，參加者被視為已同意此等條款及細則；</li>
                    <li> 活動包括「即抽即中獎」及「終極大抽獎」兩個部份；</li>
                    <li> 活動日期為2022年8月25日至2022年10月9日(「推廣期」)；</li>
                    <li> 活動時間為上午11時至晚上8時；</li>
                    <li> 參加者須先到此網頁https://www.linkhk.com/membership/ 登記成為領展會員方可參與活動；</li>
                    <li> 參加「即抽即中獎」之顧客須在推廣期內於指定商場任何連續三日內以電子貨幣累積淨消費滿$200或以上，並出示該商場內不同商戶發出之正本機印發票最多3張，連同相關之電子貨幣付款存根正本，即可參加「即抽即中獎」一次;以電子貨幣累積淨消費滿$400元或以上，並出示該商場內不同商戶發出之正本機印發票最多6張，連同相關之電子貨幣付款存根正本，即可獲得抽獎機會兩次，如此類推。
                        <div class="mt-3 mb-3">
                            參加者有機會獲得以下獎品： <br>
                            日本Yohome新煮意折疊萬用焗爐<br>
                            日本Yohome折疊加濕風扇 搖頭款Lowra rouge水潤雙噴口負離子風筒CL-301<br>
                            NOVELTI USB充電便攜攪拌機 NB7200<br>
                            Cottex®天然乳膠枕<br>
                            日本Yohome 智能觸屏不沾電煮鍋<br>
                            好棧桂圓八寶粥/黑米八寶粥 360克<br>
                            Dove多芬滋養柔膚沐浴乳(滋養柔嫩配方)1000克<br>
                            惠康$50禮券<br>
                            滴露經典松木殺菌潔手液500克<br>
                            威寶超濃縮透明洗潔精500毫升<br>
                            微力達強力百潔刷5片裝<br>
                            麥當勞$10現金券
                        </div>
                    </li>

                    <li>「即抽即中獎」登記抽獎地點為參與商場之顧客服務台，參與商場包括愛東商場、環翠商場及逸東商場； </li>
                    <li> 登記參加「即抽即中獎」之顧客須出示指定商場之發票方可參加是次活動； </li>
                    <li> 所有參加「即抽即中獎」的顧客，將會自動獲得「終極大抽獎」參加機會一次；如發票當中包括特選商戶(最多一張)則可以獲得額外「即抽即中獎」及「終極大抽獎」機會一次；


                        <div class="mt-3 mb-3">

                            特選商戶名單： <br>
                            <u> 愛東商場</u> <br>
                            滶星電腦 (107C號舖)<br>
                            智慧始教育集團 (112號舖)<br>
                            樂藝教育中心 (203號舖)<br>
                            1+1 文具禮品及玩具 (204號舖)<br>
                            現代小學士教育中心 (208號舖)<br>
                            好孩子成長坊 (209號舖)<br>
                            柏茵音樂院 (212號舖)<br><br>

                            <u>環翠商場</u><br>
                            美亞公司 (G14-G15號舖)<br>
                            學林式博文教育中心 (101號舖)<br>
                            崔藹璇芭蕾舞學校 (104-105號舖)<br>
                            柏茵音樂院 (106號舖)<br>
                            𤩷思教育 (107號舖)<br><br>

                            <u> 逸東商場</u><br>
                            源泰文具公司 (103A號舖)<br>
                            No.1 電訊 (112號舖)<br>
                            泰生 (210號舖)<br>
                            Cherry Tree English Education Centre (214號舖)<br>
                            香港電腦服務中心 (218號舖)<br>
                            嬰童之家 (220號舖)
                        </div>


                    </li>

                    </li>參與活動之發票必須由同一商場內不同商戶發出，並只適用於該商場之顧客服務台登記參加；</li>
                    </li>恕不接受任何分拆簽賬，參加者於同一商戶之消費簽賬不可分拆成多張發票或簽賬存根以參加推廣活動，並只接受由同一商戶於同日所發出之一張發票；</li>
                    </li>「即抽即中獎」會即時公佈抽獎結果，參加者有機會於「即抽即中獎」中獎。公佈結果後，獎品必須即時領取，逾期無效；</li>
                    </li>晚上8時後發出之發票，可於翌日同一活動時間內作參與活動用途(2022年10月9日除外)，逾期無效；</li>
                    </li>第三方協辦單位於2022年10月17日進行「終極大抽獎」，並由主辦單位代表監察下，透過電腦在已登記的合資格參加者中隨機抽出「終極大抽獎」共12名得獎者，每位得獎者將會獲得下列指定一項獎品︰
                    <table class="price-table mt-3 mb-3">

                        <tr>
                            <th></th>
                            <th>獎品</th>
                            <th>總值</th>
                        </tr>
                        <tr>
                            <td>頭獎 (1名)</td>
                            <td>13” MacBook Air</td>
                            <td>港幣$7,799</td>
                        </tr>
                        <tr>
                            <td>二獎 (1名)</td>
                            <td>10.9 吋iPad Air (64GB)</td>
                            <td>港幣$4,799</td>
                        </tr>
                        <tr>
                            <td>三獎 (1名)</td>
                            <td>DYSON V8 Slim™ Fluffy 無線吸塵機</td>
                            <td>港幣$3,680</td>
                        </tr>
                        <tr>
                            <td>四獎 (1名)</td>
                            <td>PANASONIC F-YZJ90H 9公升ECONAVI 智慧節能「熱石式」抗敏抽濕機</td>
                            <td>港幣$2,680</td>
                        </tr>
                        <tr>
                            <td>五獎 (8名)</td>
                            <td>香港迪士尼樂園1日門票2張</td>
                            <td>港幣$10,224</td>
                        </tr>
                    </table>
                    </li>

                    <li>所有「終極大抽獎」得獎者將由第三方協辦單位透過電腦隨機抽出，並由主辦單位代表見證下完成抽獎，該抽獎結果為最終結果及不可推翻；</li>
                    <li>「終極大抽獎」得獎名單將於2022年10月25日於主辦單位網站公布，並於英文虎報及星島日報刊登；</li>
                    <li>「終極大抽獎」得獎者將於2022年10月25日起以登記領展會員時提供的流動電話號碼收到短訊通知及/或專人聯絡領獎事宜。得獎者須於2022年10月31日至2022年11月30日期間，於得獎短訊列明的指定時間(「領獎期」)內親臨指定地點出示以下證明領獎：(i)領獎通知短訊、(ii)會員頁面內所顯示之有效會員號碼及(iii)已登記之消費發票正本。得獎者必須親自領獎，若未能出示所須證明，主辦單位有權取消其得獎資格，參加者不得異議；
                    </li>
                    <li>如未能聯絡得獎者或得獎者接獲中獎通知後未能於「領獎期」內親臨指定地點領獎或提供領獎之所需證明以作核實，得獎者將視作自願放棄其得獎資格；主辦單位保留權利收回領獎期過後仍未被領取的獎品，並有全權決定的方式處理；
                    </li>
                    <li>每名參加者最多只能於「終極大抽獎」內贏取一份獎品；</li>
                    <li>所有「即抽即中獎」及「終極大抽獎」活動中的獎品及禮券統稱「禮品」；</li>
                    <li>參加活動者必須為會員本人登記，如發現會員資料與登記活動參加者資料不符，該活動之登記將會被作廢並將不獲任何通知；</li>
                    <li>若參加者之個人資料/聯絡方法不實或不正確，導致參加者無法收到活動得獎通知，主辦單位概不負責及/或賠償；</li>
                    <li>電子貨幣包括信用卡、易辦事、八達通、Apple Pay、Google Pay、Samsung Pay、Tap & Go拍住賞、AlipayHK、WeChat Pay、BoC Pay、PayMe
                        from HSBC、或其他手機支付程式、或受《支付系統及儲值支付工具條例》(第584章)規管的其他儲值支付工具(包括但不限於八達通「好易畀」及TNG Wallet)；</li>
                    <li>恕不接受任何以(i)現金或現金券付款、訂金收據、手寫單、發票重印本、影印本或複印本或已損毀及/或塗改之發票；(ii)銀行、老人院、護老院、醫務中心、證券及投資公司、香港賽馬會、展銷攤位、展銷亭、購買美容中心套票、購買門票、八達通及手機支付程式增值、繳費靈、律師費、樓宇買賣佣金、租金、任何按金、向政府部門及電訊公司繳費、儲值卡或任何增值卡之付款收據；(iii)香港郵政局發出包括購買郵票之收據；(iv)購買或增值商戶會員卡、健身會籍/套票、遊戲中心代幣、購買任何金粒、金條、供金會、購買或使用任何商舖及餅券(月餅券除外)之收據；
                    </li>
                    <li>所有用作參與活動之正本發票必須清晰印有商戶名稱、消費日期、時間及金額之收銀機單據正本(機印發票)及出示相對應之電子貨幣付款存根正本或記錄；</li>
                    <li>計算消費總額須扣除任何信用卡、易辦事、商舖禮券、餅券、會員卡、八達通或其他手機支付程式等積分或優惠後之淨支付金額；</li>
                    <li>所有發票必須由主辦單位工作人員核對後方為有效，在核對過程中參加顧客必須提供消費所使用之電子貨幣等存根正本或記錄介面給主辦單位工作人員作核實及確認有關交易之資料之用。如對任何發票之真偽存有懷疑及參加者未能及/或拒絕提供上述確認有關交易之資料，主辦單位工作人員有絕對酌情權拒絕接受；
                    </li>
                    <li>所有發票將會被主辦單位工作人員拍照以作紀錄，發票照片只會用於是此活動紀錄之用，一切存檔將會於活動結束後兩個月內銷毀；</li>
                    <li>已用作換領之發票均被蓋印，以兹識別；已蓋印之發票不可重複使用參與商場內其他換領活動(包括商場泊車優惠)；</li>
                    <li>禮品會於核對發票及抽獎結果後派發，顧客必須收到禮品後即時檢查清楚，如發現有任何問題/損毀/遺漏情況，須即時進行更換，事後將不獲安排更換或其他補償；</li>
                    <li>禮品當中之所有禮券及/或現金券均受該條款及細則約束，詳情請參閱現金券背面的條款與細則；</li>
                    <li>主辦單位不會就禮券及/或現金券的商戶所提供的任何產品/服務之(包括但不限於)產品質量及/或服務質素承擔任何法律責任及/或賠償；</li>
                    <li>主辦單位並非禮品供應商，如對禮品之品質狀況或禮品上列明的任何規格上有任何疑問、查詢及/或跟進服務(包括保養及維修)均由相關的供應商及/或商戶負責，主辦單位對禮品任何事宜恕不承擔任何責任/或賠償；
                    </li>
                    <li>參加者須留意是否對禮品當中之某些食品食用後會出現敏感症狀。主辦單位不會因參加者食用任何食品後出現敏感不適而承擔任何責任及/或賠償；</li>
                    <li>供應商/商戶之營業時間或業務狀況因個別情況而有所變更，禮券及/或現金券使用將以商戶的調整作準，請於惠顧前致電商戶查詢；</li>
                    <li>倘參加者及參與商戶之間發生有關本條款及條件或任何優惠的爭議，雙方應自行解決爭議。在爭議不損害本條款及條件項下主辦單位的任何權利(包括就爭議行使作出最終決定性決策的權利)的前提下，主辦單位將有權不參與該爭議；
                    </li>
                    <li>為避免秩序混亂，參與者每人每次最多可憑兩組已核實及有效收據參加活動，每位排隊顧客只當一位計算，請勿代其他人士排隊輪候。如顧客於排隊期間離隊，則須重新排隊輪候；</li>
                    <li>主辦單位將會密切留意政府最新防疫措施，並保留酌情權在任何時間因應情況實施人流管制措施或管制參加人數，如政府實施的《預防及控制疾病規例》的條例有所變更，活動安排可能會因應法例而有所變更作出更改；
                    </li>
                    <li>所有禮品在任何情況下均不得兌換現金或其他禮品；</li>
                    <li>禮品分發由主辦單位之工作人員決定，顧客不得異議；</li>
                    <li>活動於香港舉行。此等條款及細則須受香港法院的專屬司法管轄權管轄；</li>
                    <li>參加者須同意主辦單位使用其參與此活動之照片/錄像作是次活動的宣傳及推廣用途；</li>
                    <li>主辦單位及旗下之外判公司、商戶、有關的合作伙伴及其僱員，均不可參加是次活動；</li>
                    <li>若任何駭客或非法行為嚴重破壞/影響指定網站運作之參加者，將會即時取消該參加者參加活動的資格，且主辦單位將保留法律追訴權；</li>
                    <li>主辦單位對有關活動網站/作業系統/程式的任何延誤、錯誤、遺漏、無法辨識、網絡中斷等情況而未能參與活動或使參加者所登記之資料有任何遺失或損毀概不承擔任何法律責任及/或賠償，參加者均不得異議；
                    </li>
                    <li>顧客於排隊時或參與活動期間請小心保管個人財物，如有任何損失，主辦單位概不負責；</li>
                    <li>如有任何爭議，主辦單位保留最終決定權；</li>
                    <li>查詢請與商場職員聯絡。</li>





                </ol> -->
                <!-- <ol class="ps-3">
                    <li> 「勁抽消費二重賞」(「活動」)由領展資產管理有限公司(「主辦單位」)舉辦 ；</li>
                    <li> 透過參加活動，參加者被視為已同意此等條款及細則；</li>
                    <li> 活動包括「即抽即中獎」及「終極大抽獎」兩個部份；</li>
                    <li> 活動日期為2022年8月25日至2022年10月9日 (「推廣期」)；</li>
                    <li> 活動時間為上午11時至晚上8時 ；</li>
                    <li> 參加者需先到此網頁https://www.linkhk.com/membership/ 登記成為領展會員方可參與活動；</li>
                    <li>
                        參加「即抽即中獎」之顧客須在推廣期內於指定商場任何連續三日內以電子貨幣累積淨消費每滿$200或以上，並出示該商場內不同商戶發出之正本機印發票最多3張，連同相關之電子貨幣付款存根正本，即可參加「即抽即中獎」一次;
                        以電子貨幣累積淨消費滿$400港元或以上，並出示該商場內不同商戶發出之正本機印發票最多6張，連同相關之電子貨幣付款存根正本，即可獲得抽獎機會二次,如此類推。參加者有機會獲得以下獎品:
                        <div class="mt-2">
                            日本Yohome新煮意折疊萬用焗爐 <br>
                            日本Yohome折疊加濕風扇 搖頭款<br>
                            Lowra rouge水潤雙噴口負離子風筒CL-301<br>
                            NOVELTI - USB充電便攜攪拌機 NB7200<br>
                            Cottex® - 天然乳膠枕<br>
                            日本Yohome 智能觸屏不沾電煮鍋<br>
                            好棧桂圓八寶粥/黑米八寶粥 360克<br>
                            Dove多芬滋養柔膚沐浴乳 (滋養柔嫩配方) 1000克<br>
                            惠康禮券 $50<br>
                            滴露經典松木殺菌潔手液500克<br>
                            威寶超濃縮透明洗潔精 500毫升<br>
                            微力達強力百潔刷5片裝<br>
                            麥當勞現金券 $10

                        </div>
                    </li>
                    <li>「即抽即中獎」地點為3個指定商場之顧客服務台，指定商場包括愛東商場、環翠商場及逸東商場；</li>
                    <li>登記參加「即抽即中獎」之顧客須出示以下指定商場之發票方可參加是次活動；</li>
                    <li> 所有參加「即抽即中獎」的顧客，將會自動獲得「終極大抽獎」一次；如發票當中包括特選商戶(最多一張)則可以獲得額外「即抽即中獎」及「終極大抽獎」機會一次；
                        <br>
                        <br>
                        <div>
                            <h2>特選商戶名單：</h2>
                            <u>愛東商場特選商戶：</u> <br>
                            1+1 文具禮品及玩具 <br>
                            博因教育中心<br>
                            好孩子成長坊<br>
                            智慧始教育集團<br>
                            滶星電腦<br>
                            小海豚教育<br>
                            現代小學士(愛東)<br>
                            樂藝教育中心<br>
                            柏茵音樂院<br>
                            <u>環翠商場特選商戶：</u> <br>
                            崔藹璇芭蕾舞學校<br>
                            美亞公司<br>
                            璿菁<br>
                            柏茵音樂院<br>
                            學林式博文教育中心<br>
                            𤩷思教育<br>
                            <u>逸東商場特選商戶：</u> <br>
                            Cherry Tree English Education Centre <br>
                            嬰童之家<br>
                            香港電腦服務中心<br>
                            藝影快速沖印公司<br>
                            翰軒語言教育中心<br>
                            碩士卓詣教室<br>
                            美華鞋業手袋服裝店<br>
                            No.1 電訊<br>
                            蒲公英教育<br>
                            源泰文具公司<br>
                            泰生
                        </div>
                    </li>

                    <li> 參與活動之發票必須由同一商場內不同商戶發出，並只適用於該商場之顧客服務台登記參加；</li>
                    <li> 恕不接受任何分拆簽賬，參加者於同一商戶之消費簽賬不可分拆成多張發票或簽賬存根以參加推廣活動，並只接受同一商戶同日一張發票；</li>
                    <li> 「即抽即中獎」會即時公佈抽獎結果，參加者有機會於「即抽即中獎」中獎。公佈結果後，獎品必須即時領取，逾期無效；</li>
                    <li> 晚上8時後發出之發票，可於翌日同一換領時間內作參與活動用途(2022年10月9日除外)，逾期無效；</li>
                    <li> 第三方協辦單位於2022年10月17日 進行「終極大抽獎」，並由主辦單位代表監察下，透過電腦在已登記的合資格參加者中隨機抽出「終極大抽獎」共12位得獎者，每位得獎者將會獲得下列指定一項獎品︰
                        <table class="price-table mt-3 mb-3">

                            <tr>
                                <th></th>
                                <th>獎品</th>
                                <th>總值</th>
                            </tr>
                            <tr>
                                <td>頭獎 (1名)</td>
                                <td>13” MacBook Air</td>
                                <td>港幣$7,799</td>
                            </tr>
                            <tr>
                                <td>二獎 (1名)</td>
                                <td>10.9 吋iPad Air (64GB)</td>
                                <td>港幣$4,799</td>
                            </tr>
                            <tr>
                                <td>三獎 (1名)</td>
                                <td>DYSON V8 Slim™ Fluffy 無線吸塵機</td>
                                <td>港幣$3,680</td>
                            </tr>
                            <tr>
                                <td>四獎 (1名)</td>
                                <td>PANASONIC F-YZJ90H 9公升ECONAVI 智慧節能「熱石式」抗敏抽濕機</td>
                                <td>港幣$2,680</td>
                            </tr>
                            <tr>
                                <td>五獎 (8名)</td>
                                <td>香港迪士尼樂園1日門票2張</td>
                                <td>港幣$10,224</td>
                            </tr>
                        </table>

                    </li>

                    <li> 所有「終極大抽獎」得獎者將由第三方協辦單位透過電腦隨機抽出，並由主辦單位代表見證下完成抽獎，該抽獎結果為最終結果及不可推翻；</li>
                    <li> 「終極大抽獎」得獎名單將於2022年10月25日於主辦單位網站公布，並於英文虎報及星島日報刊登；</li>
                    <li> 「終極大抽獎」得獎者將於2022年10月25日起以登記會員時提供的流動電話號碼收到短訊通知及/或專人聯絡領獎事宜。得獎者須於2022年10月31日至11月30日期間，於得獎短訊列明的指定時間(「領獎期」)內親臨指定地點出示以下證明領獎：(i)
                        領獎通知短訊、(ii)會員頁面內所顯示之有效會員號碼及(iii)已登記之消費發票正本。得獎者必須親自領獎，若未能出示所須證明，主辦單位有權取消其得獎資格，參加者不得異議；</li>
                    <li> 如未能聯絡得獎者或得獎者接獲中獎通知後未能於「領獎期」內親臨指定地點領獎或提供領獎之所需證明以作核實，得獎者將視作自願放棄其得獎資格；主辦單位保留權利收回領獎期過後仍未被領取的獎品，並有全權決定的方式處理；
                    </li>
                    <li> 每名參加者最多只能於「終極大抽獎」內贏取一份獎品；</li>
                    <li> 所有「即抽即中獎」及「終極大抽獎」活動中的獎品及禮券統稱「禮品」；</li>
                    <li> 參加者參加活動必須由本人登記，如發現會員資料與登記活動參加者資料不符，該活動之登記將會被作廢並將不獲任何通知；</li>
                    <li> 若參加者之個人資料/聯絡方法不實或不正確，導致參加者無法收到活動得獎通知，主辦單位概不負責及/或賠償；</li>
                    <li>電子貨幣包括信用卡、易辦事、八達通、Apple Pay、Google Pay、Samsung Pay、Tap & Go拍住賞、AlipayHK、WeChat Pay、BoC Pay、PayMe
                        from HSBC、或其他手機支付程式、或受《支付系統及儲值支付工具條例》（第584章）規管的其他儲值支付工具(包括但不限於八達通「好易畀」及TNG Wallet)；</li>
                    <li> 恕不接受任何以 (i) 現金或現金券付款、訂金收據、手寫單、發票重印本、影印本或複印本或已損毀及/或塗改之發票；(ii)
                        銀行、老人院、護老院、醫務中心、證券及投資公司、香港賽馬會、展銷攤位、展銷亭、購買美容中心套票、購買門票、八達通及手機支付程式增值、繳費靈、律師費、樓宇買賣佣金、租金、任何按金、向政府部門及電訊公司繳費、儲值卡或任何增值卡之付款收據；(iii)
                        香港郵政局發出包括購買郵票之收據；(iv) 購買或增值商戶會員卡、購買任何金粒、金條、供金會、購買或使用任何商舖及餅券之收據；</li>
                    <li> 所有用作參與活動之正本發票必須清晰印有商戶名稱、消費日期、時間及金額之收銀機單據正本 (機印發票)及出示相對應之電子貨幣付款存根正本或記錄；</li>
                    <li> 計算消費總額須扣除任何信用卡、易辦事、商舖禮券、餅券、會員卡、八達通或其他手機支付程式等積分或優惠後之淨支付金額；</li>
                    <li>所有發票必須由主辦單位工作人員核對後方為有效，在核對過程中參加顧客必須提供消費所使用之電子貨幣等存根正本或記錄介面給主辦單位工作人員作核實及確認有關交易之資料之用。如對任何發票之真偽存有懷疑及參加者未能及／或拒絕提供上述確認有關交易之資料，主辦單位工作人員有絕對酌情權拒絕接受；
                    </li>
                    <li> 所有發票將會被主辦單位工作人員拍照以作紀錄，發票照片只會用於是此活動紀錄之用，一切存檔將會於活動結束後兩個月內銷毀；</li>
                    <li> 已用作換領之發票均被蓋印，以兹識別；已蓋印之發票不可重複使用參與商場內其他換領活動 (包括商場泊車優惠)；</li>
                    <li> 禮品會於核對發票及抽獎結果後派發，顧客必須收到禮品後即時檢查清楚，如發現有任何問題/損毀/遺漏情況，須即時進行更換，事後將不獲安排更換或其他補償；</li>
                    <li> 禮品當中之所有禮券及/或現金券均受該條款及細則約束，詳情請參閱現金券背面的條款與細則；</li>
                    <li> 主辦單位不會就禮券及/或現金券的商戶所提供的任何產品/服務之 (包括但不限於) 產品質量及/或服務質素承擔任何法律責任及/或賠償；</li>
                    <li> 主辦單位並非禮品供應商，如對禮品之品質狀況或禮品上列明的任何規格上有任何疑問、查詢及/或跟進服務（包括保養及維修）均由相關的供應商及/或商戶負責，主辦單位對禮品任何事宜恕不承擔任何責任/或賠償；
                    </li>
                    <li> 參加者須留意是否對禮品當中之某些食品食用後會出現敏感症狀。主辦單位不會因參加顧客食用任何食品後出現敏感不適而承擔任何責任及/或賠償；(如禮品有食品) ;</li>
                    <li> 供應商/商戶之營業時間或業務狀況因個別情況而有所變更，禮券及/現金券使用將以商戶的調整作準，請於惠顧前致電商戶查詢；</li>
                    <li> 倘參加者及參與商戶之間發生有關本條款及條件或任何優惠的爭議，雙方應自行解決爭議。在爭議不損害本條款及條件項下主辦單位的任何權利（包括就爭議行使作出最終决定性决策的權利）的前提下，主辦單位將有權不參與該爭議；
                    </li>
                    <li> 為避免秩序混亂，參與者每人每次最多可憑2組已核實及有效收據參加活動，每位排隊顧客只當一位計算，請勿代其他人士排隊輪候。如顧客於排隊期間離隊，則須重新排隊輪候；</li>
                    <li> 主辦單位將會密切留意政府最新防疫措施，並保留酌情權在任何時間因應情況實施人流管制措施或管制參加人數，如政府實施的《預防及控制疾病規例》的條例有所變更，活動安排可能會因應法例而有所變更作出更改；
                    </li>
                    <li> 所有禮品在任何情況下均不得兌換現金或其他禮品；</li>
                    <li> 禮品分發由主辦單位之工作人員決定，顧客不得異議；</li>
                    <li> 活動於香港舉行。此等條款及細則須受香港法院的專屬司法管轄權管轄；</li>
                    <li> 參加者須同意主辦單位使用其參與此活動之照片/錄像作是次活動的宣傳及推廣用途；</li>
                    <li> 主辦單位及旗下之外判公司、商戶、有關的合作伙伴及其僱員，均不可參加是次活動；</li>
                    <li> 若任何駭客或非法行為嚴重破壞/ 影響指定網站運作之參加者，將會即時取消該參加者參加活動的資格，且主辦單位將保留法律追訴權；</li>
                    <li> 主辦單位對有關活動網站/作業系統/程式的任何延誤、錯誤、遺漏、無法辨識、網絡中斷等情況而未能參與活動或使參加者所登記之資料有任何遺失或損毀概不承擔任何法律責任及或賠償，參加者均不得異議；
                    </li>
                    <li> 顧客於排隊時或參與活動期間請小心保管個人財物，如有任何損失，主辦單位概不負責；</li>
                    <li> 如有任何爭議，主辦單位保留最終決定權；</li>
                    <li> 活動詳情請留意場內宣傳海報；查詢請與商場職員聯絡；</li>
                    <li> 推廣生意的競賽牌照號碼：xxxxx</li>




                </ol> -->







            </div>
        </div>
        <div class="mt-1">


            <input class="form-check-input agree-checkbox" type="checkbox" value="" id="flexCheckChecked" disabled>
            <label class="form-check-label orange" for="flexCheckChecked" style="font-size:1rem">
                我已閱讀條款與細則
            </label>
            <div class="error text-center mt-1" style="font-size:1rem">
                <!-- 前往下一步必須同意條款及細則 -->
                請確認已詳閲及明白上述所有條款與細則
            </div>



        </div>
        <div class="mt-2">

            <a href="javascript:void(0);" class="agree-btn-a"><img style="height:70px"
                    src="https://linkc09luckydraw22.com/wp-content/uploads/2022/07/img_ok_btn.png" alt=""></a>
        </div>
    </div>
    <img class="d-none" src="url(https://linkc09luckydraw22.com/wp-content/uploads/2022/07/tick-icon.png) !important"
        alt="">

    <div class="raffle-number">推廣生意的競賽牌照號碼：55986, 55987</div>


</div>

<form method="post" action="<?php echo get_site_url();?>/p3">
    <input type="hidden" name="loc" value="<?php echo $_REQUEST['loc'];?>">
</form>


<script type="text/javascript">
$(function() {

    $('.tnc-txt-div-inner').scroll(function() {

        // console.log(5);
        if ($('.tnc-txt-div-inner').scrollTop() > $('.tnc-txt-div-inner').prop("scrollHeight") - 300) {

            $('.agree-checkbox').removeAttr('disabled');
            //enaable
        }
        // console.log(area.scrollTop + area.offsetHeight)
    })
    //    return ((area.scrollTop + area.offsetHeight) > area.scrollHeight);


    $('.agree-btn-a').click(function() {

        if ($('.agree-checkbox').is(':checked')) {

            $('form').submit();
            // window.location = "<?php echo get_site_url();?>/p3";
        } else {
            $('.error').css({
                'opacity': '1'
            });
            // alert('not check');
        }
    })

})
</script>
<?php

get_footer();