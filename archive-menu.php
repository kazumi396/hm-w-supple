<?php get_header(); ?>

<main>
    <!-- page-kv -->
    <div class="c-page-kv c-page-kv--menu">
        <div class="l-container-l">
            <h1 class="c-title-level1 c-title-level1--white">menu</h1>
        </div>
    </div>
    <!-- end page-kv -->

    <!-- menu -->
    <div class="u-ptb">
        <div class="l-container-s">
            <p class="menu-head-text">使用しているコーヒー豆を紹介します</p>
            <p class="menu-head-text02"><span>SUPPLEでは上質なコーヒー豆を</span><span>世界中から直接輸入しています。</span></p>

            <?php if (have_posts()): ?>
            <div class="u-mt">
                <div class="menu-list">
                    <?php while (have_posts()) : the_post(); ?>
                    <section class="top-menu-block archive-menu-style menu-item">
                        <?php get_template_part('template-parts/loop', 'menu'); ?>
                    </section>
                    <?php endwhile; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </div>
    <!-- end menu -->

    <?php get_footer(); ?>