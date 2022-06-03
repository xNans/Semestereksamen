<?php get_header()?>
<body>
    <header>
        <div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/techhub_loge_skrå(3).svg" alt="logo" style="width: 130px; height: 130px;"></a></div>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
        <div class="nbsp">&nbsp;</div>
    </header>
    <?php while(have_posts()): the_post() ?>
    <div class="pageforstartups1 container">
        <div class="pageforstartups2 row">
            <div class="col-12 forstartupsimage1" style="background-image: url(<?php the_field("for_startups_image") ?>)">
            <p class="pageforstartupstext"><?php the_field("for_startups_headline")?></p>
        </div>
        </div>
    </div>
    <?php endwhile ?>
</body>
<?php get_footer(); ?>