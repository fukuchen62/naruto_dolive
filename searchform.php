<form class="search_box_wrap" action=" <?php echo home_url('/'); ?>" method="get" class="header_search">

    <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="検索" maxlength="10" autocomplete="off">
    <button type="submit">
        <i class="fas fa-search fa-fw" style="color: black;"></i>
    </button>

</form>




<!-- スマホ -->

<!-- <div class="search_box_wrap">
    <div class="search_box">
        <input type="text" placeholder="検索">
        <button type="submit">
            <i class="fas fa-search fa-fw" style="color: white;"></i>
        </button>
    </div>
</div> -->


<!-- PC -->

<!--
    <input type="text" placeholder="検索">
<button type="submit">
    <i class="fas fa-search fa-fw" style="color: black;"></i>
</button>
-->
