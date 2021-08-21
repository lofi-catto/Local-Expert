<?php

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    get_header();

?>
<!-- main body -->
<main <?php post_class('site-main'); ?> id="<?php echo get_post_field('post_name', get_post()); ?>" role="main">
    <div class="container">
        <div class="page-heading">
			<span class="dash"></span>
			<h1><?php echo get_the_title() ?></h1>
		</div>

        <div class="page-content">
            <?php if (have_rows('modules')) : ?>
                        
                <?php while (have_rows('modules')) : the_row(); ?>
                    <?php if (get_row_layout() == 'contact') : ?>
                        <div class="post">
                            <span class="orange-dash"></span>
                            <h2><?php echo get_sub_field('name') ?></h2>
                            <p><?php echo get_sub_field('phone') ?></p>
                            <p><?php echo get_sub_field('email') ?></p>
                        </div>
                    <?php endif; ?>
                        
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
       
    </div>
    
</main>

<?php

get_footer();