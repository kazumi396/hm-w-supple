<?php get_header(); ?>

<main>
    <!-- page-kv -->
    <div class="c-page-kv c-page-kv--shoplist">
        <div class="l-container-l">
            <h1 class="c-title-level1 c-title-level1--white">shoplist</h1>
        </div>
    </div>
    <!-- end page-kv -->

    <!-- shoplist -->
    <div class="u-ptb">
        <div class="l-container-l">
            <div class="c-search">
                <p class="c-search-title">店舗検索</p>
                <?php get_search_form(); ?>
            </div>
            <?php if (have_posts()): ?>
            <div class="shoplist-list">
                <?php while (have_posts()) : the_post(); ?>
                <section class="shoplist-item">
                    <?php get_template_part('template-parts/loop', 'shoplist'); ?>
                </section>
                <?php endwhile; ?>
            </div>
            <?php else: ?>
            <p class="c-search-noresult">検索結果にヒットする店舗はありません。</p>
            <?php endif; ?>
        </div>
    </div>
    <!-- end shoplist -->

    <?php get_footer(); ?>