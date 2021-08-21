<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
?>
<main <?php post_class('site-main'); ?> id="custom-page" role="main">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content"> 
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();