<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="tagline">
                    <?php bloginfo('description'); ?>
                </h3>
                <a href="<?php echo site_url(); ?>">
                    <h1 class="align-self-center display-1 text-center heading">
                        <?php bloginfo('name'); ?>
                    </h1>
                </a>
                <div class="text-center mb-2">
                 <?php 
                    echo get_search_form();
                 ?>
                </div>
                <?php 
                    if (is_nav_menu('Primary Menu')) {
                        wp_nav_menu('Primary Menu');
                    }
                ?>
            </div>
        </div>
    </div>
</div>