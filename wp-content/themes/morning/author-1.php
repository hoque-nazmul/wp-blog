<?php 
    get_header();
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <div class="container">
        <?php get_template_part('template-parts/author'); ?>
        <h2 class="text-center">
            <?php echo get_the_author_meta('nicename'); ?>
        </h2>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <?php if(have_posts()): 
                    while(have_posts()): 
                    the_post(); 
                ?>
                <div <?php post_class(['post']); ?>>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="post-title text-center">
                                    <?php the_title(); ?>
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php 
    get_template_part('template-parts/pagination');
    get_footer();
?>
