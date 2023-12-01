<body>
    <div id="stkr" class="sp_none"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/maincar_icon.png" alt="" class="car_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/exhaust_fumes.gif" alt="" class="gas"></div>
    <?php get_header(); ?>
    <section id="toparea" class="toparea">
        <h2>404NotFound</h2>
    </section>
    <div class="main_wrap">
        <div class="breadcrumb">HOME > 404</div>
        <div class="content_wrap">
            <div class="center_title">
                <p class="middle_title">お探しのページが見つかりません...</p>
                <p>お探しのページが見つかりませんでした。<br>お手数ですが、<a href="<?= home_url(); ?>"><u>こちらのリンク</u></a>からTOPページにお戻りください。</p>
            </div>
            <div class="image-container">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/not-found.png" alt="ページが見つからなかったときの画像">
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
</body>

</html>
