<?php get_header()?>
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() ?>/style.css'/>
<body>
    <header class="headertilstyle">
        <div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/techhub_loge_skrå(3).svg" alt="logo" style="width: 130px; height: 130px;"></a></div>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
        <div class="nbsp">&nbsp;</div>
    </header>

    <?php while(have_posts()): the_post() ?>
    <section class="contactsection1">
        <div class="col-12 header contactimg" style="background-image: url(<?php the_field("contact_header_image") ?>)">
        <h2 class="h2contactheader">Contact</h2>
    </section>
    <section class="contactsection2">
        <div class="contactus row">
            <div class="col-12 col-sm-4 contactinfo">
                <div class="col-12 col-sm-12 contactnavn"><?php the_field("contact_info_navn")?></div>
                <div class="col-12 col-sm-12 contactmobil"><?php the_field("contact_info_mobil")?></div>
                <div class="col-12 col-sm-12 contactmail"><?php the_field("contact_info_mail")?></div>
            </div>

            <div class="col-12 col-sm-8 contactform">
                <?php the_content() ?>
            </div>
        </div>
        
    </section>
    <?php endwhile ?>
</body>
<!--<?php the_content() ?> sættes i en sektion -->
<?php get_footer(); ?>