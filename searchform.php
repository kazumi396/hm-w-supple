<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="hidden" name="post_type" value="shoplist">
    <div class="c-search-form-inner">
        <div class="c-search-form-text">
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="検索" />
        </div>
        <div class="c-search-form-select">
            <?php
            $taxonomy = 'area';
            $selected =get_query_var($taxonomy, 0);
            $args = array(
                'show_option_all' => '---',
                'taxonomy' => $taxonomy,
                'name' => $taxonomy,
                'value_field' => 'slug',
                'hide_empty' => 0,
                'selected' => $selected,
                'echo' => true
            );
            wp_dropdown_categories($args);
            ?>
        </div>
        <div class="c-search-button">
            <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        </div>
    </div>
</form>