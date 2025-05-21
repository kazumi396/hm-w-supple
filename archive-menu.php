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

            <?php
            $method_terms = get_terms([
                'taxonomy' => 'method',
                'orderby' => 'id',
                'order' => 'ASC',
             ]);
            if ( !empty($method_terms)):
            ?>
            <div class="u-mt menu-block-wrap">
                <?php foreach ($method_terms as $method): ?>
                <div class="menu-block">
                    <h2 class="menu-title">
                        <span><?php echo strtoupper($method->slug); ?></span>
                    </h2>
                    <div class="menu-list">
                        <?php
                        $args = [
                            'post_type' => 'menu',
                            'posts_per_page' => -1,
                        ];
                        $taxquerysp = ['relation' => 'AND'];
                        $taxquerysp[] = [
                            'taxonomy' => 'method',
                            'terms' => $method->slug,
                            'field' => 'slug',
                        ];
                        $args['tax_query'] = $taxquerysp;
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <section class="tax-menu-item">
                            <?php get_template_part('template-parts/loop', 'menu'); ?>
                        </section>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php  endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- end menu -->

    <?php get_footer(); ?>