<?php /* 最低限必要な検索フォームの要素 */ ?>
<form role="search" method="get" class="my-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="searchform.phpのフォーム" />
    <input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
</form>