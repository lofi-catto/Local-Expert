<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

while (have_posts()) : the_post();
?>
    <!-- main body -->
    <main <?php post_class('site-main'); ?> id="<?php echo get_post_field('post_name', get_post()); ?>" role="main">
        <div class="container">
            <?php the_content(); ?>

            <?php if (have_rows('modules')) : ?>
                    
                <?php while (have_rows('modules')) : the_row(); ?>
                    <?php if (get_row_layout() == 'image') : ?>
                        <img style="height: <?php echo get_sub_field('image_height') ?>px" src="<?php echo get_sub_field('image')['sizes']['2048x2048']; ?>" class="home-photo">
                    
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
