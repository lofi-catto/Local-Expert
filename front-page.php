<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

while (have_posts()) : the_post();
?>
<!-- main body -->
<main <?php post_class('site-main'); ?> id="<?php echo get_post_field('post_name', get_post()); ?>" role="main">
    <div class="">
        <?php the_content(); ?>

        <?php if (have_rows('modules')) : ?>

        <?php while (have_rows('modules')) : the_row(); ?>
        <?php if (get_row_layout() == 'image') : ?>
        <div class="ban">
            <img src="<?php echo get_sub_field('image')['sizes']['2048x2048']; ?>" class="home-photo">
            <span class="credit">Image from Discover Tasmania</span>
            <div class="main-search">
                <div class="full">
                    <div>
                        <input type="text" name="search" id="s" placeholder="Which area are you interested in?"
                            value="">
                    </div>
                    <a class="btn-link">Search</a>
                </div>
            </div>

        </div>
        <div class="intro">
            <h3>Your guide to visiting, exploring and living in Tasmania</h3>
        </div>

        <div class="desc">
            <div class="left">
                <span class="divider top"></span>
                <h2>Let the locals guide you</h2>
                <span class="divider bottom"></span>
            </div>
            <div class="right">
                <img class="first" src="https://source.unsplash.com/featured?tasmania" />
                <img class="second" src="https://source.unsplash.com/featured?wine" />
                <img class="third" src="https://source.unsplash.com/featured?cheese" />
            </div>
        </div>

        <?php elseif (get_row_layout() == 'text') : ?>
        <div class="home-text">
            <span class="dash"></span>
            <?php echo get_sub_field('text') ?>
        </div>

        <?php endif; ?>

        <?php endwhile; ?>

        <?php endif; ?>
    </div>
</main>

<?php
endwhile;

get_footer();