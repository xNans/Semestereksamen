<?php get_header()?>
<body>
    <header>
        <div class="logo"><a href="<?php echo site_url() ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/techhub_loge_skrå(3).svg" alt="logo" style="width: 130px; height: 130px;"></a></div>
        <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
        <div class="nbsp">&nbsp;</div>
    </header>
    <?php while(have_posts()): the_post() ?>

    <div class="eventsection1 container">
        <div class="events1 row">
            <div class="col-12 header eventsheaderimage" style="background-image: url(<?php the_field("events_header_image") ?>)">
            <div class="col-12 col-sm-12 eventheadertext"><?php the_field("event_header_text")?></div>
        </div>
        </div>
    </div>
    <div class="eventsection2 contain">
        <div class="events2 row">
            <h2 class="eventh2">Upcoming Events</h2>
            <div class="col-12 col-sm-12 eventimage" style="background-image: url(<?php the_field("event_image") ?>)"></div>
            <div class="col-12 col-sm-12 eventinformation">
                <p class="eventdato"><?php the_field("event_dato")?></p>
                <p class="eventheadertext2"><?php the_field("event_overskrift")?></p>
                <p class="eventtext"><?php the_field("event_beskrivelse")?></p>
            </div>

        </div>
    </div>
    <div class="eventsection3 container">
        <h2 class="eventcalenderh2">Event calender</h2>
        <div class="col-12 col-sm-12 eventcalender row">
            <p class="eventdato1"><?php the_field("event_dato1")?></p>
            <p class="eventheadertext3"><?php the_field("event_overskrift1")?></p>
            <p class="eventtext"><?php the_field("event_beskrivelse1")?></p>
        </div>
        <div class="col-12 col-sm-12 eventcalender1 row">
            <p class="eventdato1"><?php the_field("event_dato2")?></p>
            <p class="eventheadertext3"><?php the_field("event_overskrift2")?></p>
            <p class="eventtext1"><?php the_field("event_beskrivelse2")?></p>
        </div>
        <div class="col-12 col-sm-12 eventcalender row">
            <p class="eventdato1"><?php the_field("event_dato1")?></p>
            <p class="eventheadertext3"><?php the_field("event_overskrift1")?></p>
            <p class="eventtext"><?php the_field("event_beskrivelse1")?></p>
        </div>
        <div class="col-12 col-sm-12 eventcalender1 row">
            <p class="eventdato1"><?php the_field("event_dato2")?></p>
            <p class="eventheadertext3"><?php the_field("event_overskrift2")?></p>
            <p class="eventtext1"><?php the_field("event_beskrivelse2")?></p>
        </div>
    </div>
    <div class="eventsection4 container">

    </div>
    <?php endwhile ?>
</body>

<?php get_footer(); ?>