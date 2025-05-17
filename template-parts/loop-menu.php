<div class="menu-item-img">
    <?php
    $pic = get_field('pic');
    $pic_url = $pic['sizes']['thumbnail'];
    ?>
    <img src='<?php echo $pic_url; ?>' width='300' height='300' alt='' decoding='async' />
</div>

<div class="menu-item-info">
    <h2 class="menu-item-name"><?php the_title(); ?></h2>
    <p class="menu-item-price">¥<?php the_field('price'); ?></p>
    <p class="menu-item-description">
        <?php the_content(); ?>
    </p>
</div>