<?php 
    get_header();
?>
<body <?php body_class(); ?>>
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
            </div>
        </div>
    </div>
</div>
<div class="posts">
    <div <?php post_class(['post']); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title">This is a beautiful day in Dhaka!</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong>John Doe</strong><br/>
                        15th May, 2018
                    </p>
                    <ul class="list-unstyled">
                        <li>dhaka</li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <p>
                        <img class="img-fluid" src="https://images.pexels.com/photos/301929/pexels-photo-301929.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=800"
                             alt="Post Title">
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deserunt dicta doloribus error,
                        harum,
                        illo impedit incidunt ipsam ipsum necessitatibus nihil perferendis perspiciatis provident quasi
                        reiciendis saepe
                        sequi sint, voluptatum?
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
<?php 
    get_footer();
?>
