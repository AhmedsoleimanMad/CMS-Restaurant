<div class="footer">


    <div class="container">
        <div class="wrap_footer">
            <div class="text_footer">
                <h3>Dev restaurant</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, similique. Libero itaque neque cupiditate in quia maiores culpa repudiandae quibusdam?</p>
            </div>
            <div class="open_hours">
                <h3>Opining hours</h3>
                <ul class="list_opening_hours">
                    <?php

                    if (have_rows('open-hours', "options")) :

                        while (have_rows('open-hours', "options")) : the_row();

                            $day = get_sub_field('day', "options");
                            $hour = get_sub_field('hour', "options"); ?>

                            <li class="single_day">
                                <span class="icon_footer"></span>
                                <?php echo $day . "---" . $hour;

                                ?>
                            </li>


                    <?php

                        endwhile;

                    // No value.
                    else :
                    // Do something...
                    endif; ?>
                </ul>


            </div>
            <div class="info_footer">
                <h3>Contact us</h3>
                <ul class="contact_list">
                    <li><?php echo get_field("tele", "options"); ?></li>
                    <li><?php echo get_field("adresse", "options"); ?></li>
                    <li><?php echo get_field("email", "options"); ?></li>
                </ul>
            </div>

        </div>


        <hr>

        <p class="footer_copyright">2019 All Rights Reserverd Designed by </p>
    </div>

</div>


<?php wp_footer(); ?>
</body>

</html>