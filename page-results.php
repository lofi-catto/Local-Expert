<?php

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    get_header();

?>
<!-- main body -->
<main <?php post_class('site-main'); ?> id="<?php echo get_post_field('post_name', get_post()); ?>" role="main">
    <div class="container">
        <div class="wrapper">
            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img src="http://www.bhg.com.au/media/28116/maria-island-wombats.jpg" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Maria Island</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">East Coast</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="<?php echo get_page_link('36') ?>">view
                    Maria Island Page</a>
            </div>

            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img
                            src="https://assets.visitgrampians.com.au/products/_1200x630_crop_center-center_82_none/Mt-William-the-Grampians-Credit-Rob-Blackburn-2012.jpg?mtime=1557972196" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Mount William</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">East Coast</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="<?php echo get_page_link('36') ?>">view
                    Mount William Page</a>
            </div>

            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img
                            src="https://2.bp.blogspot.com/-Nhmz2g2_0V0/Ww4Nw1ymLeI/AAAAAAAARHQ/c4Rr-MZJuVMhFzr8lKqlrtD8falC2WZvQCKgBGAs/s1600/DSC02453.JPG" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Douglas Apsley</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">East Coast</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="<?php echo get_page_link('36') ?>">view
                    Douglas Apsley Page</a>
            </div>

            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img src="https://parks.tas.gov.au/ContentImages/DSC_0089%20Dixie%20Makro.jpg" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Bay of Fires</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">East Coast</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="<?php echo get_page_link('36') ?>">view
                    Bay of Fires Page</a>
            </div>
        </div>
    </div>

</main>

<?php

get_footer();