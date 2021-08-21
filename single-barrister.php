<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();

$image = get_field('image');
$job_title = get_field('job_title');
$intro = get_field('intro');
$phone = get_field('phone');
$email = get_field('email');
$facebook = get_field('facebook');
$twitter = get_field('twitter_link');
$linkedin = get_field('linkedin_link');

$previous = get_previous_post();
$next = get_next_post();
?>
<main <?php post_class('site-main'); ?> role="main">
    <div class="container">
        <div class="post-content">
            <div class="left">
                <img class="photo" src="<?php echo $image['sizes']['2048x2048'] ?>">
                <div class="meta-up">
                    <p><?php echo $phone ?></p>
                    <p><?php echo $email ?></p>
                    <div class="social">
                        <?php if ($facebook) { ?>
                            <a href="<?php echo $facebook ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/src/svg/facebook.svg" alt="">
                            </a>
                        <?php } ?>
                        <?php if ($twitter) { ?>
                            <a href="<?php echo $twitter ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/src/svg/twitter.svg" alt="">
                            </a>
                        <?php } ?>
                        <?php if ($linkedin) { ?>
                            <a href="<?php echo $linkedin ?>">
                                <img src="<?php echo get_template_directory_uri() ?>/src/svg/linkedin.svg" alt="">
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="page-heading">
                    <span class="dash"></span>
                    <h1><?php echo get_the_title() ?></h1>
                </div>
                <h3><?php echo $job_title ?></h3>
                <?php echo $intro ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    <div class="container">
        <div class="meta-down">
            <h3><?php echo get_the_title() ?></h3>
            <p><?php echo $phone ?></p>
            <p><?php echo $email ?></p>
            <div class="social">
                <?php if ($facebook) { ?>
                    <a href="<?php echo $facebook ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/src/svg/facebook.svg" alt="">
                    </a>
                <?php } ?>
                <?php if ($twitter) { ?>
                    <a href="<?php echo $twitter ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/src/svg/twitter.svg" alt="">
                    </a>
                <?php } ?>
                <?php if ($linkedin) { ?>
                    <a href="<?php echo $linkedin ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/src/svg/linkedin.svg" alt="">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="actions">
            <div class="group prev">
                <?php if (is_a($previous, 'WP_Post')) : ?>
                    <div class="text">
                        <a href="<?php echo $previous->guid ?>"><img src="<?php echo get_template_directory_uri() . '/src/svg/arrow.svg' ?>">
                        <?php echo $previous->post_title ?></a>
                    </div>
                <?php endif; ?>
            </div>

            <div class="group next">
                <?php if (is_a($next, 'WP_Post')) : ?>
                    <div class="text">
                        <a href="<?php echo $next->guid ?>"><span><?php echo $next->post_title ?></span> <img src="<?php echo get_template_directory_uri() . '/src/svg/arrow.svg' ?>"></a>
                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>
</main>
<?php
get_footer();