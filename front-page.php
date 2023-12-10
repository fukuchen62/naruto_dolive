<?php
get_header();

?>
<main>
    <div id="kv" class="section_kv">
        <div class="kv_img_wrap">
            <div class="kv_left sp_none">
                <div class="kv_img1">
                    <img id="mypic1" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                    <div class="logo poyoyon is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive">
                    </div>
                    <div class="halftone slideIn is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/halftone.png" alt="ハーフトーン" class="anim-box slidein is-animated">
                    </div>
                    <div class="catchcopy poyoyon2 is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                    </div>
                    <div class="kv_deco slide-skew is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                    </div>
                </div>
            </div>
            <div class="kv_main">
                <div class="kv_img2">
                    <img id="mypic2" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                    <div class="logo poyoyon is-animated">
                        <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive"></h1>
                    </div>
                    <div class="halftone slideIn is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/halftone.png" alt="ハーフトーン" class="anim-box slidein is-animated">
                    </div>
                    <div class="catchcopy poyoyon2 is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                    </div>
                    <div class="kv_deco slide-skew is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                    </div>
                </div>
            </div>
            <div class="kv_right sp_none">
                <div class="kv_img3">
                    <img id="mypic3" src="<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg" alt="キービジュアル">
                    <div class="logo poyoyon is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="鳴門DoLive">
                    </div>
                    <div class="halftone slideIn is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/halftone.png" alt="ハーフトーン" class="anim-box slidein is-animated">
                    </div>
                    <div class="catchcopy poyoyon2 is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/catchcopy.png" alt="愛車で四国の右上攻略！" class="anim-box slidein is-animated">
                    </div>
                    <div class="kv_deco slide-skew is-animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kv_deco.png" alt="車" class="anim-box slide-skew is-animated">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="teloparea marquee">
        <div class="marquee_container">
            <?php if (have_posts()) : $count = 0; ?>
                <?php while (have_posts()) : the_post();
                    $count++; ?>
                    <!-- 抜粋の出力 -->
                    <a href="<?php the_permalink(); ?>">
                        <div class="marquee_news <?php echo ($count % 2 === 0) ? 'even' : 'odd'; ?>">
                            <p><span class="news_tab"><?php echo get_the_category()[0]->name; ?></span> <?php echo get_the_time('m/d'); ?> <?php the_title(); ?></p>
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
            <img id="narutokaikyoumankitu" class="map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map_a.png" alt="鳴門海峡満喫旅">

            <!-- 歴史・文化の鳴門旅 -->
            <img id="rekishibunkanonaruto" class="map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map_b.png" alt="歴史・文化の鳴門旅">

            <!-- ぐるっと一周鳴門旅 -->
            <img id="guruttoissyuunaruto" class="map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map_c.png" alt="ぐるっと一周鳴門旅">

            <!-- 鳴門おおそと一周旅 -->
            <img id="narutooosotoissyuu" class="map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map_d.png" alt="鳴門おおそと一周旅">

            <!-- キッズが主役旅 -->
            <img id="kizzugasyuyaku" class="map" src="<?php echo get_template_directory_uri(); ?>/assets/img/map_e.png" alt="キッズが主役旅">

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
                                    <?php echo mb_substr(get_the_title(), 0, 15); ?>
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
        <div class="instagram_follow">
            <div class="instagram_follow_btn">
                <a href="https://www.instagram.com/narutodolive/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" rel="noopener" target="_blank">
                    <span>Follow me</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="ig_icon" viewBox="0 0 16 16">
                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                    </svg>
                </a>
            </div>
        </div>
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
        "<?php echo get_template_directory_uri(); ?>/assets/img/mypic1.jpg",
        "<?php echo get_template_directory_uri(); ?>/assets/img/mypic2.jpg",
        "<?php echo get_template_directory_uri(); ?>/assets/img/mypic3.jpg",
        "<?php echo get_template_directory_uri(); ?>/assets/img/mypic4.jpg",
        "<?php echo get_template_directory_uri(); ?>/assets/img/mypic5.jpg"
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
