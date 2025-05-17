<section class="menu-item">
    <div class="menu-item-img">
        <?php if (has_post_thumbnail()): ?>
        <?php the_post_thumbnail(); ?>
        <?php else: ?>
        <img src='https://placehold.jp/600x400.png' width='600' height='400' alt='' decoding='async' />
        <?php endif; ?>
    </div>

    <div class="menu-item-info">
        <h2 class="menu-item-name"><?php the_title(); ?></h2>
        <p class="menu-item-price">¥800</p>
        <p class="menu-item-description">
            親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。なぜそんな無闇をしたと聞く人があるかも知れぬ。別段深い理由でもない。
        </p>
    </div>
</section>