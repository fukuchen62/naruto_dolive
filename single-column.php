<?php get_header(); ?>

<h2 class="pageTitle">コラム記事個別ページ</h2>

<?php get_template_part('template-parts/breadcrumb'); ?>


<main class="main">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>
                            <div class="news_pic">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium'); ?>
                                    <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage_600x400.png" alt="">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <header class="article_header">
                                <h2 class="article_title"><?php the_title(); ?></h2>
                                <div class="article_meta">
                                    <?php the_category(); ?>
                                    <!-- <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time> -->
                                </div>
                            </header>
                            <div class="article_body">
                                <div class="content">
                                    <?php the_field('text'); ?>
                                </div>
                            </div>
                            <div class="postLinks">
                                <div class="postLink postLink-prev"><?php previous_post_link('<i class="fas fa-chevron-left"></i>%link'); ?></div>
                                <div class="postLink postLink-next"><?php next_post_link('%link<i class="fas fa-chevron-right"></i>'); ?></div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-3">
                <div class="content">
                    <div class="main-column">
                        <?php
                        while (have_posts()) :
                            the_post();
                        ?>
                            <article>
                                <!-- カスタム投稿のコンテンツを表示 -->
                                <h1><?php the_title(); ?></h1>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <aside class="sidebar-column">
                        <?php dynamic_sidebar('custom_category_sidebar'); ?>
                    </aside>
                </div>
                <?php get_sidebar('archives'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
