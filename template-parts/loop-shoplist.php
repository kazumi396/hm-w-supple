<div class="shoplist-item-img">
    <img src="img/pic-shoplist-kitasenju.jpg" alt="北千住店の外観の写真。〇〇な雰囲気の外観です。" width="648" height="410" loading="lazy" />
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