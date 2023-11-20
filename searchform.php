<form action="<?php echo home_url('/'); ?>" method="get" class="header_search">
    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="文字列検索">
    <input type="submit" value="検索">
    <i class="fas fa-search"></i>
</form>
