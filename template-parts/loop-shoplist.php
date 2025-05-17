<div class="shoplist-item-img">
    <?php if (has_post_thumbnail()): ?>
    <?php the_post_thumbnail(); ?>
    <?php else: ?>
    <img src='https://placehold.jp/600x400.png' width='600' height='400' alt='' decoding='async' />
    <?php endif; ?>
</div>

<div class="shoplist-item-info">
    <h2 class="shoplist-item-name"><?php the_title(); ?></h2>

    <p class="shoplist-item-adress"><?php the_field('address'); ?></p>
    <p class="shoplist-item-tel"><?php the_field('tel'); ?></p>

    <ul class="shoplist-item-detail">
        <li class="shoplist-item-detail-item">営業時間／<?php the_field('time'); ?></li>
        <li class="shoplist-item-detail-item">席数／<?php the_field('number'); ?>席</li>
        <li class="shoplist-item-detail-item">
            喫煙／<?php echo get_field('smoking') ? '可' : '不可'; ?>
        </li>
    </ul>
</div>