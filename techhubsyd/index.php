
<?php get_header()?>

<body>
    <header>
        <div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/techhub_loge_skrå(3).svg" alt="logo" style="width: 130px; height: 130px;"></a></div>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
        <div class="nbsp">&nbsp;</div>
    </header>
    <?php while(have_posts()): the_post() ?>
    <div class="backgroundimage">
    <div class="sektion1">
        <div class="forside1 row">
            <div class="col-12 header backgroundgif" style="background-image: url(<?php the_field("background_image") ?>)">
            <div class="col-12 col-sm-6 headertext"><?php the_field("forside_overskrift")?></div>
            <div class="col-12 col-sm-6 subtext"><?php the_field("forside_brodtekst")?></div>
            <div class="col-12 forside1btns">
                <div class="col-12 col-sm-4 forside1btn1"><p><a class="buttonlink" href="/contact.php">Contact</a></p></div>
                <div class="col-12 col-sm-4 forside1btn2"><p><a href="#subscribeh2" class="buttonlink">Subscribe</a></p></div>
            </div>
            </div>
        </div>
    </div>
    <div class="forside2h2">
                <h2>What we do</h2>
            </div>
    <div class="section2 container">
        <div class="forside2 row">
            <div class="col-12 col-sm-4 whatwedo1">
                <div class="col-12 col-sm-12 icon1"></div>
                <div class="col-12 col-sm-12 headertext1"><?php the_field("what_we_do_1_header")?></div>
                <div class="col-12 col-sm-12 subtext1"><?php the_field("what_we_do_1_text")?></div>
            </div>
            <div class="col-12 col-sm-4 whatwedo2">
                <div class="col-12 col-sm-12 icon2"></div>
                <div class="col-12 col-sm-12 headertext2"><?php the_field("what_we_do_2_header")?></div>
                <div class="col-12 col-sm-12 subtext2"><?php the_field("what_we_do_2_text")?></div>
            </div>
            <div class="col-12 col-sm-4 whatwedo3">
                <div class="col-12 col-sm-12 icon3"></div>
                <div class="col-12 col-sm-12 headertext3"><?php the_field("what_we_do_3_header")?></div>
                <div class="col-12 col-sm-12 subtext3"><?php the_field("what_we_do_3_text")?></div>
            </div>
            </div>
            <div class="col-12 col-sm-12 whatwedobtn">
                <div class="btn1"><p><a class="buttonlink" href="/what-we-do.php">Learn more</a></p></div>
        </div>
    </div>
    <div class="section3 container">
        <div class="promovideoboks row">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/qKHVSIiekYw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="col-12 col-sm-6 textboks">
                <h2 class="eventsh2">Events</h2>
                <p class="eventstext2"><?php the_field("eventstext")?></p>
                <p class="eventbtn"><a class="buttonlink" href="/events">See calender</a></p>
            </div>
        </div>
    </div>
    <section class="section4">
        <div class="startup row">
            <div class="col-12 col-sm-6 startuptextboks">
                <h2 class="h2startup">For Start ups</h2>
                <p class="forstartupstext"><?php the_field("for_start_ups_tekst")?></p>
                <p class="forstartupsbtn"><a class="buttonlink" href="nmcdesign.dk/for-startups.php">Learn more</a></p>
            </div>
            <div class="col-12 col-sm-6 startupimg"></div>
        </div>
    </section>
    <section class="subscribe">
        <h2 class="subscribeh2">Subscribe</h2>

        <?php the_content() ?>

    </section>



    </div>


    <?php endwhile ?>

    <?php get_footer(); ?>
</body>
</html>