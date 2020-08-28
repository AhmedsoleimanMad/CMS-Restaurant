<?php /*Template Name: front-page*/ ?>

<?php get_header(); ?>
<section class="principal">
    <div class="image_principale">
        <div class="row">
            <div class="title col-6 col-sm-6">
                <h2>For happy day</h2>
                <h1>ENJOY</h1>
                <h1>HAPPY MEAL</h1>
            </div>
        </div>
    </div>
    <div class="hachures_blanches2"></div>
    <div class="row square justify-content-center">
        <div class="col-3 banner_square services">
            <ul>
                <li><div class="icon1"></div></li>
                <li><h3>QUALITY FOODS</h3></li>
                <li>Sit amet consectetur adipisicing elit. Sapiente molestias accusantium numquam inventore eius nobis aliquam ea suscipit ab quasi.</li>
            </ul>
        </div>
        <div class="col-3 banner_square services">
            <ul>
                <li><div class="icon2"></div></li>
                <li><h3>FASTEST DELIVERY</h3></li>
                <li>Sit amet consectetur adipisicing elit. Sapiente molestias accusantium numquam inventore eius nobis aliquam ea suscipit ab quasi.</li>
            </ul>
        </div>
        <div class="col-3 banner_square services">
            <ul>
                <li><div class="icon3"></div></li>
                <li><h3>ORIGINAL RECIPES</h3></li>
                <li>Sit amet consectetur adipisicing elit. Sapiente molestias accusantium numquam inventore eius nobis aliquam ea suscipit ab quasi.</li>
            </ul>
        </div>
    </div>
</section>

<section id="our_story">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="our_story_picture"></div>
                <div class="our_story_text">
                    <h3>Discover</h3>
                    <h3>OUR STORY</h3>
                    <p>ULTIMATE DINING EXPERIENCE LIKE NO OTHER</p>
                    <p>One of the notable character traits of a successful small restaurant owner is the ability to easily solve problems. Problem-solving is a skill and most of the time comes with being open-minded.</p>
                    <p>Successful entrepreneurs are open-minded people and as such good optimists, critical thinkers and problem solvers. As a small restaurant owner, you need to be able to</p>
                    <p>OUR FOUNDER</p>
                    <p>The Chef</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $posts = get_field('post'); ?>
<section id="restaurants">
    <div class="overlay"></div>
    <div class="container">
        <div class="row post_title_section">
            <h2>Discover our franschise</h2>
        </div>
        <div class="row post_title_section2 mb-3">
            <h2>OUR RESTAURANTS</h2>
        </div>
    </div>
    <div class="container">
        <?php $count = 1; ?>
        <?php foreach($posts as $post) { ?>
            <?php if($count%2 == 0) { ?>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 pt-5 pb-5">
                        <div class="thumbnail" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
                        <div class="post_text">
                            <h3><?php echo $post->post_title; ?></h3>
                            <h3><?php the_subtitle(); ?></h3>
                            <p><?php echo $post->post_content; ?></p>
                            <a href="#" class="myButton services mt-4 mb-5">More infos</a>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 pt-5 pb-5">
                        <div class="thumbnail2" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID); ?>);"></div>
                        <div class="post_text2">
                            <h3><?php echo $post->post_title; ?></h3>
                            <h3><?php the_subtitle(); ?></h3>
                            <p><?php echo $post->post_content; ?></p>
                            <a href="#" class="myButton services mt-4 mb-5">More infos</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php $count++ ?>
        <?php } ?>
    </div>
</section>

<section id="discover_menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="image_discover_menu"></div>
            </div>
            <div class="col-lg-6 col-sm-6 text_discover_menu">
                <h3 class="mb-3">LET'S DISCOVER FOOD</h3>
                <h3 class="mb-5">DISCOVER OUR MENU</h3>
                <p class="mb-5">For those with pure food indulgence in mind, come next door and state your desires with our ever changing internationally and seasonally inspired small plates. We love food, lots of different food, just like you.</p>
                <a href="#" class="myButton services mt-5 mb-5">View the full menu</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>

