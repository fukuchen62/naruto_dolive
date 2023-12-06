<?php
get_header();

?>
<main>
    <div id="kv" class="section_kv">
        <div class="kv_img_wrap">
            <div class="kv_left sp_none">
                <div class="kv_img1">
                    <div class="logo poyoyon is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive">
                    </div>
                    <div class="kv_img1">
                        <img id="mypic1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                    </div>
                    <div class="catchcopy">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                    </div>
                    <div class="kv_deco">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                    </div>
                </div>
            </div>
            <div class="kv_main">
                <div class="logo poyoyon is-animated">
                    <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive"></h1>
                </div>
                <div class="kv_img2">
                    <img id="mypic2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                </div>
                <div class="catchcopy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                </div>
                <div class="kv_deco">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                </div>
            </div>
            <div class="kv_right sp_none">
                <div class="logo poyoyon is-animated">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive">
                </div>
                <div class="kv_img3">
                    <img id="mypic3" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                </div>
                <div class="catchcopy">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                </div>
                <div class="kv_deco">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                </div>
            </div>
        </div>
    </div>

    <div class="teloparea marquee">
        <div class="marquee_container">
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
            <!-- 抜粋の出力 -->
            <a href="<?php the_permalink(); ?>">
                <div class="marquee_news <?php echo ($count % 2 === 0) ? 'even' : 'odd'; ?>">
                    <p><?php echo the_excerpt(); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="more_btn">
            <a href="<?php echo home_url('/category/news/') ?>" class="more_link"><span class="more">more</span></a>
        </div>
    </div>

    <section id="map" class="section_map">
        <h2 class="title_drivecourse">ドライブコース</h2>
        <ul class="container courses pc_none">
            <li class="course1 course_button btn btn_course1 sp_button" data-link="<?php echo get_permalink(324); ?>"><span>A</span></li>
            <li class="course2 course_button btn btn_course2 sp_button" data-link="<?php echo get_permalink(329); ?>/"><span>B</span></li>
            <li class="course3 course_button btn btn_course3 sp_button" data-link="<?php echo get_permalink(812); ?>"><span>C</span></li>
            <li class="course4 course_button btn btn_course4 sp_button" data-link="<?php echo get_permalink(817); ?>"><span>D</span></li>
            <li class="course5 course_button btn btn_course5 sp_button" data-link="<?php echo get_permalink(822); ?>"><span>E</span></li>
        </ul>
        <ul class="container courses sp_none">
            <li class="course1 course_button btn btn_course1 pc_button" data-link="<?php echo get_permalink(324); ?>"><span>鳴門海峡満喫旅</span></li>
            <li class="course2 course_button btn btn_course2 pc_button" data-link="<?php echo get_permalink(329); ?>"><span>歴史・文化の鳴門旅</span></li>
            <li class="course3 course_button btn btn_course3 pc_button" data-link="<?php echo get_permalink(812); ?>"><span>ぐるっと一周鳴門旅</span></li>
            <li class="course4 course_button btn btn_course4 pc_button" data-link="<?php echo get_permalink(817); ?>"><span>鳴門おおそと一周旅</span></li>
            <li class="course5 course_button btn btn_course5 pc_button" data-link="<?php echo get_permalink(822); ?>"><span>キッズが主役旅</span></li>
        </ul>
        <div class="map_container">
            <!-- 2023/12/06 fukushima start
            コースの切り替えをSVGからpngに変更修正 -->

            <!-- 鳴門海峡満喫旅 -->
            <img id="narutokaikyoumankitu" class="map" src="<?php echo get_template_directory_uri();?>/assets/img/map_a.png" alt="鳴門海峡満喫旅">

            <!-- 歴史・文化の鳴門旅 -->
            <img id="guruttoissyuunaruto" class="map" src="<?php echo get_template_directory_uri();?>/assets/img/map_b.png" alt="歴史・文化の鳴門旅">

            <!-- ぐるっと一周鳴門旅 -->
            <img id="rekishibunkanonaruto" class="map" src="<?php echo get_template_directory_uri();?>/assets/img/map_c.png" alt="ぐるっと一周鳴門旅">

            <!-- 鳴門おおそと一周旅 -->
            <img id="narutooosotoissyuu" class="map" src="<?php echo get_template_directory_uri();?>/assets/img/map_d.png" alt="鳴門おおそと一周旅">

            <!-- キッズが主役旅 -->
            <img id="kizzugasyuyaku" class="map" src="<?php echo get_template_directory_uri();?>/assets/img/map_e.png" alt="キッズが主役旅">

            <!-- 2023/12/06 fukushima end -->
        </div>
        <div class="more_btn_container">
            <div class="more_btn">
                <a href="#" class="more_link" id="detailButton"><span class="more">詳細</span></a>
            </div>
        </div>

    </section>

    <div class="teloparea purpose_delay">
        <div class="slider-container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_bike.gif" alt="バイク" class="slider-image slider-image1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider_text.png" alt="目的別ボタン" class="slider-image slider-image2">
        </div>
        <div class="purpose_delaywrap">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/traffic_light.png" alt="信号機">
            </div>
            <div class="purpose_delaywrap_flex delayScroll">
                <div class="purpose_delaywrap_box"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delaywrap_car.png" alt="車"></div>
                <div class="purpose_delaywrap_box"><a href="<?php echo home_url('eat/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delaywrap_eat.png" alt="食べる"></a></div>
                <div class="purpose_delaywrap_box"><a href="<?php echo home_url('enjoy/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delaywrap_enjoy.png" alt="遊ぶ"></a></div>
                <div class="purpose_delaywrap_box"><a href="<?php echo home_url('tour/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delaywrap_tourism.png" alt="観光"></a></div>
                <div class="purpose_delaywrap_box"><a href="<?php echo home_url('stay/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delaywrap_lodging.png" alt="宿泊"></a></div>
            </div>
        </div>
    </div>
    <section id="column" class="section_column">
        <h2 class="title_pickupcolumn">ピックアップコラム</h2>
        <div class="column-flexbox">

            <?php $args = array(
        'post_type' => 'column', // カスタム投稿タイプを指定


    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>">

                <div class="column-container">
                    <div class="column_imgbox">

                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium'); ?>
                        <?php endif; ?>

                    </div><!-- column_imgbox -->

                    <div class="column-text">
                        <h3>
                            <?php echo mb_substr(get_the_title(), 0, 15) ; ?>
                        </h3>

                        <p>
                            <?php echo mb_substr(get_the_excerpt(), 0, 20) . '･･･'; ?>
                        </p>
                    </div><!-- column-text -->
                </div><!-- column-container -->
            </a><!--  -->
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div><!-- column-flexbox -->


        <div class="more_btn_container">
            <div class="more_btn">
                <a href="<?php echo home_url('/column') ?>" class="more_link"><span class="more">more</span></a>
            </div>
        </div>
    </section>

    <!-- おすすめキーワードを出す関数、第一引数にulを囲むタグ、第二引数に閉じタグ、第さん引数に表示数 -->

    <?php sm_list_popular_searches('<div id="recommended_keywords" class="teloparea recommended_keywords">', '</div>', 5); ?>


    <section id="instagram" class="section_instagram">
        <h2 class="toparea">インスタグラム</h2>

        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>
    <div class="teloparea scroll_car">
        <div class="scroll-infinity">
            <div class="scroll-infinity__wrap">
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                    <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_1.png" class="car" alt="車"></li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_2.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_3.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                </ul>
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                    <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_1.png" class="car" alt="車"></li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_2.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_3.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                </ul>
                <ul class="scroll-infinity__list scroll-infinity__list--left">
                    <li class="scroll-infinity__item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_1.png" class="car" alt="車"></li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_2.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car_3.png" class="car" alt="車">
                    </li>
                    <li class="scroll-infinity__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" class="gas_index" alt="ガス">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section id="pdf" class="section_pdf">
        <h2 class="toparea">PDF</h2>
        <div class="pdf_wrap_sp pc_none">
            <div class="card1_wrap">
                <div class="card1_content">
                    <div class="card1_img">
                        <img class="pdf_anim" src="<?php echo get_template_directory_uri(); ?>/assets/img/sp_guruttonarutodedorive.jpg" alt="ぐるっと鳴門deドライブモデルコース">
                    </div>
                    <div class="card1_text">
                        <a href="<?php echo get_template_directory_uri(); ?>/assets/img/guruttonarutodedorive.pdf" class="card1" rel="noopener" target="_blank"><i class="far fa-file-pdf"></i>&ensp;PDFはこちらをタップ</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="pdf_wrap_pc sp_none">
            <div class="pdf_page2">
                <a href="<?php echo get_template_directory_uri(); ?>/assets/img/guruttonarutodedorive.pdf" rel="noopener" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guruttonarutodedorive-2.jpg" alt="ぐるっと鳴門deドライブモデルコース-2">
                </a>
                <div class="pdf_page1">

                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/guruttonarutodedorive.jpg" alt="ぐるっと鳴門deドライブモデルコース-1">
                </div>
            </div>
        </div>
    </section>
</main>

<script>
// ▼TOP-kvのフラッシュ画像表示▼
var pics_src = [
    "<?php echo get_template_directory_uri();?>/assets/img/mypic1.jpg",
    "<?php echo get_template_directory_uri();?>/assets/img/mypic2.jpg",
    "<?php echo get_template_directory_uri();?>/assets/img/mypic3.jpg",
    "<?php echo get_template_directory_uri();?>/assets/img/mypic4.jpg",
    "<?php echo get_template_directory_uri();?>/assets/img/mypic5.jpg"
];
var num = 0;

slideshow_timer();

function slideshow_timer() {

    if (num >= pics_src.length) {
        num = 0;
    }
    document.getElementById("mypic1").src = pics_src[num];
    document.getElementById("mypic2").src = pics_src[num];
    document.getElementById("mypic3").src = pics_src[num];
    num++;
    setTimeout(slideshow_timer, 600);
}
// ▲TOP-kvのフラッシュ画像表示▲

const lis = document.querySelector('.recommended_keywords');
const liElements = lis.querySelectorAll('a');
liElements.forEach((li, index) => {
    li.classList.add("moving_text");
});
</script>
<?php
get_footer();
?>
