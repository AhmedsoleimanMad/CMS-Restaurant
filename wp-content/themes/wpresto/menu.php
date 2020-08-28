<?php

/**
 * Template Name: menu
 *
 * 
 */
?>

<?php

/*Variable champs*/

$image = get_field("image_showcas");
$subtitle = get_field("subtitle");
$main_title = get_field("main_title");
$menu = get_field("add_menu_category");
$subtitle_menu = get_field("subtitle-menu");
$title_menu = get_field("title-menu");

?>

<?php get_header(); ?>
<div class="show_case_menu" style="background-image: url(<?php echo $image["url"] ?>)">

    <div class="heading">
        <div class="container">

            <h3><?php echo $subtitle ?></h3>
            <h1><?php echo $main_title ?></h1>
        </div>

    </div>

</div>
<section class="menu">

    <div class="menu_container">

        <div class="container">
            <div class="menu_wrap"> <?php if (have_rows('add_menu_category')) { ?>

                    <div class="sm_heading">
                        <h3><?php echo $subtitle_menu;  ?></h3>
                        <h2><?php echo $title_menu;  ?></h2>
                    </div>

                    <!--<pre> <?php echo print_r($menu) ?></pre>-->

                    <?php while (have_rows('add_menu_category')) : the_row(); ?>

                        <h2 class="title_cat"> <?php the_sub_field('title') ?></h2>
                        <?php if (have_rows('add_item')) {

                                                while (have_rows('add_item')) : the_row(); ?>
                                <ul class="menu_item">
                                    <li class="price_title_menu restaurant_menu__row">

                                        <div class="restaurant_menu__meal">
                                            <span class="title_menu_item"><?php the_sub_field('title_item') ?> </span>
                                        </div>
                                        <span class="restaurant_menu__price"> <?php the_sub_field('price') ?></span>
                                    </li>

                                    <li class="menu_text"><?php the_sub_field('descitem') ?></li>
                                </ul>



                <?php endwhile;
                                            }
                                        endwhile;
                                    }  ?>
            </div>
        </div>

    </div>

</section>



</div>


<?php get_footer(); ?>