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

<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <section id="restaurants">
        <div class="overlay"></div>
            <div class="container">
                <div class="row">
                <div class="col-lg-12 col-sm-12 pt-5 pb-5">
                <?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); ?>
                    <div class="thumbnail" style="background-image: url('<?php echo $thumb_url[0]; ?>');"></div>
                    <div class="post_text">
                        <h3><?php the_title(); ?></h3>
                        <h3><?php the_subtitle(); ?></h3>
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
    <?php endwhile ?>
<?php else: ?>
<h1>Pas d'articles</h1>
<?php endif ?>

<?php get_footer();?>

