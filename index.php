<?php get_header(); ?>
<main>
    <!-- top-kv -->
    <?php if (is_home()): ?>
    <div class="top-kv"></div>
    <?php endif; ?>
    <!-- end top-kv -->

    <!-- top-consept -->
    <section class="top-consept u-ptb">
        <div class="l-container-s">
            <h2 class="c-title-level2 c-title-level2--center">concept</h2>

            <div class="u-mt">
                <div class="top-consept-img">
                    <img width="1920" height="954"
                        src="<?php echo esc_url( get_template_directory_uri() . '/img/pic-top-consept.jpg' ); ?>" alt=""
                        loading="lazy" />
                </div>

                <p class="top-consept-text u-mt">一杯一杯まごころをこめて調製し、新鮮な香りと豊かな 風味のコーヒーを提供します。</p>

                <p class="top-consept-text02">
                    <span>親譲りの無鉄砲で小供の時から損ばかりしている。</span><span>小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</span><span>なぜそんな無闇をしたと聞く人があるかも知れぬ。</span>
                </p>

                <div class="u-mt">
                    <a href="<?php echo get_permalink(8); ?>" class="c-button c-button--center">more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end top-consept -->

    <!-- top-menu -->
    <section class="top-menu u-ptb">
        <div class="l-container">
            <div class="top-menu-inner">
                <h2 class="c-title-level2 c-title-level2--white c-title-level2--center">menu</h2>
                <div class="top-menu-body u-mt">
                    <section class="top-menu-block">
                        <h3 class="top-menu-list-title">drip</h3>

                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'method',
                                    'field' => 'slug',
                                    'terms' => array('drip'),
                                ),
                            ),
                        );
                        $menu_query = new WP_Query($args);
                        if ($menu_query->have_posts()): ?>
                        <ul class="top-menu-list">
                            <?php while ($menu_query->have_posts()) : $menu_query->the_post(); ?>
                            <li class="top-menu-item">
                                <span class="top-menu-item-name"><?php the_title(); ?></span>
                                <span class="top-menu-item-price">¥<?php echo esc_html(get_field('price')); ?></span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </section>

                    <section class="top-menu-block">
                        <h3 class="top-menu-list-title">espresso</h3>

                        <?php
                        $args = array(
                            'post_type' => 'menu',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'method',
                                    'field' => 'slug',
                                    'terms' => array('espresso'),
                                ),
                            ),
                        );
                        $menu_query = new WP_Query($args);
                        if ($menu_query->have_posts()): ?>
                        <ul class="top-menu-list">
                            <?php while ($menu_query->have_posts()) : $menu_query->the_post(); ?>
                            <li class="top-menu-item">
                                <span class="top-menu-item-name"><?php the_title(); ?></span>
                                <span class="top-menu-item-price">¥<?php echo esc_html(get_field('price')); ?></span>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </section>
                </div>

                <div class="u-mt">
                    <a href="<?php echo esc_url(get_post_type_archive_link('menu')); ?>"
                        class="c-button c-button--white c-button--center">more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end top-menu -->

    <!-- top-shoplist -->
    <section class="top-shoplist u-ptb">
        <div class="l-container-s">
            <h2 class="c-title-level2 c-title-level2--center">shop list</h2>
            <p class="top-shoplist-copy"><span>首都圏を中心に6店舗展開しています。</span><span>お近くの店舗でお待ちしています。</span></p>

            <div class="u-mt">
                <ul class="top-shoplist-list">
                    <li class="top-shoplist-item">北千住店</li>
                    <li class="top-shoplist-item">代官山店</li>
                    <li class="top-shoplist-item">新宿店</li>
                    <li class="top-shoplist-item">八王子店</li>
                    <li class="top-shoplist-item">銀座店</li>
                    <li class="top-shoplist-item">渋谷店</li>
                </ul>
            </div>

            <div class="u-mt">
                <a href="<?php echo esc_url(get_post_type_archive_link('shoplist')); ?>"
                    class="c-button c-button--center">more</a>
            </div>
        </div>
    </section>
    <!-- end top-shoplist -->

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