<?php get_header(); ?>
    <!-- top-blog -->
    <div class="top-blog">
        <section class="u-ptb">
            <div class="l-container-s">
                <h2 class="c-title-level2 c-title-level2--center">blog & news</h2>
                <?php if (have_posts()): ?>
                <div class="u-mt">
                    <div class="c-posts c-posts--col3">
                        <?php while (have_posts()) : the_post(); ?>
                        <article class="c-post">
                            <a href="<?php the_permalink(); ?>" class="c-post-thumbnail">
                                <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                <img src='https://placehold.jp/600x400.png' width='600' height='400' alt=''
                                    decoding='async' />
                                <?php endif; ?>
                            </a>
                            <div class="c-post-date">
                                <time datetime="<?php the_time('Y-m-d'); ?>"
                                    class="c-date"><?php the_time('Y/n/j'); ?></time>
                            </div>
                            <h3 class="c-post-title">
                                <a href="single.html"><?php echo esc_html(get_the_title()); ?></a>
                            </h3>
                        </article>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php endif; ?>
                <div class="u-mt">
                    <a href="blog.html" class="c-button c-button--center">more</a>
                </div>
            </div>
        </section>
    </div>
    <!-- end top-blog -->

    <?php get_footer(); ?>