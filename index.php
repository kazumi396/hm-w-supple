<?php get_header(); ?>
<!-- page-kv -->
<div class="c-page-kv c-page-kv--blog">
    <div class="l-container-l">
        <h1 class="c-title-level1 c-title-level1--white">blog & news</h1>
    </div>
</div>
<!-- end page-kv -->

<!-- blog -->
<div class="u-ptb">
    <div class="l-container">
        <?php if (have_posts()): ?>
        <div class="c-posts c-posts--col3">
            <?php while (have_posts()) : the_post(); ?>
            <article class="c-post">
                <a href="<?php the_permalink(); ?>" class="c-post-thumbnail">
                    <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                    <img src='https://placehold.jp/600x400.png' width='600' height='400' alt='' decoding='async' />
                    <?php endif; ?>
                </a>
                <div class="c-post-date">
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="c-date"><?php the_time('Y/n/j'); ?></time>
                </div>
                <h2 class="c-post-title">
                    <a href="<?php the_permalink(); ?>"><?php echo esc_html(get_the_title()); ?></a>
                </h2>
            </article>
            <?php endwhile; ?>

        </div>
        <?php endif; ?>

        <!-- pagination -->
        <?php
				the_posts_pagination(
					array(
						'mid_size'           => 1,
						'prev_text'          => '',
						'next_text'          => '',
						'screen_reader_text' => '…',
					)
				);
			?>
        <!-- end pagination -->
    </div>
</div>
<!-- end blog -->
<?php get_footer(); ?>