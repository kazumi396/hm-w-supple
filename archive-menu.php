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
                    <section class="menu-item">
                        <?php get_template_part('template-parts/loop', 'menu'); ?>
                    </section>
                    <?php endwhile; ?>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee02.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee03.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee04.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee05.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee06.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>

                    <section class="menu-item">
                        <div class="menu-item-img">
                            <img width="560" height="560" src="img/pic-menu-coffee07.jpg" alt="エントランスブレンドのコーヒー豆の画像"
                                loading="lazy" />
                        </div>

                        <div class="menu-item-info">
                            <h2 class="menu-item-name">エントランスブレンド</h2>
                            <p class="menu-item-price">¥800</p>
                            <p class="menu-item-description">
                                親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
                            </p>
                        </div>
                    </section>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- end menu -->

    <?php get_footer(); ?>