<?php get_header(); ?>
<main>
    <!-- page-kv -->
    <div class="c-page-kv c-page-kv--blog">
        <div class="l-container-l">
            <p class="c-title-level1 c-title-level1--white">blog & news</p>
        </div>
    </div>
    <!-- end page-kv -->

    <!-- single -->
    <div class="u-ptb">
        <div class="l-container-s">
            <article class="single-article">
                <div class="single-thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img src='https://placehold.jp/600x400.png' width='600' height='400' alt='' decoding='async' />
                    <?php endif; ?>
                </div>

                <div class="single-date">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="c-date"><?php the_time('Y/n/j'); ?></time>
                </div>

                <h1 class="single-title"><?php echo esc_html(get_the_title()); ?></h1>

                <div class="single-contents">
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
    </div>
    <!-- end single -->

    <?php get_footer(); ?>