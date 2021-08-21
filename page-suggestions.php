<?php

    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    get_header();

?>
<!-- main body -->
<main <?php post_class('site-main'); ?> id="<?php echo get_post_field('post_name', get_post()); ?>" role="main">
    <div class="banner">
        <img src="https://parks.tas.gov.au/ContentImages/RS5175_MariaIslandPaintedCliffs5-lpr%20crop.jpg">

        <div class="container">
            <div class="wrapper">
                <h1>Maria Island National Park</h1>
            </div>
        </div>
    </div>
    <div class="text-extra">
        <h3>These locals can help you</h3>
    </div>
    <div class="container">


        <div class="wrapper">
            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img src="https://www.angliss.edu.au/siteassets/news/tourism/brett-echidna.jpg" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">John Doe</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">Local Tour Guide</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="#">view
                    John Doe Page</a>
            </div>

            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img
                            src="https://www.traveller.com.au/content/dam/images/g/o/a/g/d/c/image.related.articleLeadwide.620x349.goafqo.png/1461107763726.jpg" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Jane Doe</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">Local Tour Guide</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="#">view
                    Jane Doe Page</a>
            </div>

            <div class="m-incentive-tile">
                <div class="m-incentive-tile__image wider">
                    <div class="img-responsive">
                        <img src="https://tasmaniaexplorer.com.au/wp-content/uploads/20201008_224827720_iOS.jpg" />
                    </div>
                </div>
                <div class="m-incentive-tile__info wrap--medium">
                    <h2 class="m-incentive-tile__title size--m">Maria Island Ferry</h2>
                    <p class="m-incentive-tile__excerpt size--s weight--m"></p>
                    <div class="m-incentive-tile__terms">
                        <span class="m-tag region">Transportation</span>
                    </div>
                </div>
                <a class="m-incentive-tile__link" href="#">view
                    maria island ferry Page</a>
            </div>

        </div>
    </div>

</main>

<?php

get_footer();