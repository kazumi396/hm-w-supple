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
            <?php if (have_posts()): ?>
            <div class="shoplist-list">
                <?php while (have_posts()) : the_post(); ?>
                <section class="shoplist-item">
                    <?php get_template_part('template-parts/loop', 'shoplist'); ?>
                </section>
                <?php endwhile; ?>

                <section class="shoplist-item">
                    <div class="shoplist-item-img">
                        <img src="img/pic-shoplist-daikanyama.jpg" alt="代官山店の外観の写真。〇〇な雰囲気の外観です。" width="648"
                            height="410" loading="lazy" />
                    </div>

                    <div class="shoplist-item-info">
                        <h2 class="shoplist-item-name">代官山店</h2>

                        <p class="shoplist-item-adress">〒123-4567 東京都渋谷区ABC</p>
                        <p class="shoplist-item-tel">TEL.03-000-0000</p>

                        <ul class="shoplist-item-detail">
                            <li class="shoplist-item-detail-item">営業時間／11：00 - 23：00</li>
                            <li class="shoplist-item-detail-item">席数／30席</li>
                            <li class="shoplist-item-detail-item">喫煙／可</li>
                        </ul>
                    </div>
                </section>

                <section class="shoplist-item">
                    <div class="shoplist-item-img">
                        <img src="img/pic-shoplist-shinjuku.jpg" alt="新宿店の外観の写真。〇〇な雰囲気の外観です。" width="648" height="410"
                            loading="lazy" />
                    </div>

                    <div class="shoplist-item-info">
                        <h2 class="shoplist-item-name">新宿店</h2>

                        <p class="shoplist-item-adress">〒123-4567 東京都渋谷区ABC</p>
                        <p class="shoplist-item-tel">TEL.03-000-0000</p>

                        <ul class="shoplist-item-detail">
                            <li class="shoplist-item-detail-item">営業時間／11：00 - 23：00</li>
                            <li class="shoplist-item-detail-item">席数／30席</li>
                            <li class="shoplist-item-detail-item">喫煙／可</li>
                        </ul>
                    </div>
                </section>

                <section class="shoplist-item">
                    <div class="shoplist-item-img">
                        <img src="img/pic-shoplist-hachioji.jpg" alt="八王子店の外観の写真。〇〇な雰囲気の外観です。" width="648" height="410"
                            loading="lazy" />
                    </div>

                    <div class="shoplist-item-info">
                        <h2 class="shoplist-item-name">八王子店</h2>

                        <p class="shoplist-item-adress">〒123-4567 東京都渋谷区ABC</p>
                        <p class="shoplist-item-tel">TEL.03-000-0000</p>

                        <ul class="shoplist-item-detail">
                            <li class="shoplist-item-detail-item">営業時間／11：00 - 23：00</li>
                            <li class="shoplist-item-detail-item">席数／30席</li>
                            <li class="shoplist-item-detail-item">喫煙／可</li>
                        </ul>
                    </div>
                </section>

                <section class="shoplist-item">
                    <div class="shoplist-item-img">
                        <img src="img/pic-shoplist-ginza.jpg" alt="銀座店の外観の写真。〇〇な雰囲気の外観です。" width="648" height="410"
                            loading="lazy" />
                    </div>

                    <div class="shoplist-item-info">
                        <h2 class="shoplist-item-name">銀座店</h2>

                        <p class="shoplist-item-adress">〒123-4567 東京都渋谷区ABC</p>
                        <p class="shoplist-item-tel">TEL.03-000-0000</p>

                        <ul class="shoplist-item-detail">
                            <li class="shoplist-item-detail-item">営業時間／11：00 - 23：00</li>
                            <li class="shoplist-item-detail-item">席数／30席</li>
                            <li class="shoplist-item-detail-item">喫煙／可</li>
                        </ul>
                    </div>
                </section>

                <section class="shoplist-item">
                    <div class="shoplist-item-img">
                        <img src="img/pic-shoplist-shibuya.jpg" alt="渋谷店の外観の写真。〇〇な雰囲気の外観です。" width="648" height="410"
                            loading="lazy" />
                    </div>

                    <div class="shoplist-item-info">
                        <h2 class="shoplist-item-name">渋谷店</h2>

                        <p class="shoplist-item-adress">〒123-4567 東京都渋谷区ABC</p>
                        <p class="shoplist-item-tel">TEL.03-000-0000</p>

                        <ul class="shoplist-item-detail">
                            <li class="shoplist-item-detail-item">営業時間／11：00 - 23：00</li>
                            <li class="shoplist-item-detail-item">席数／30席</li>
                            <li class="shoplist-item-detail-item">喫煙／可</li>
                        </ul>
                    </div>
                </section>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- end shoplist -->

    <?php get_footer(); ?>