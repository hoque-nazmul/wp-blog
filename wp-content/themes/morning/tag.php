<?php 
    get_header();
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <div class="container">
        <h2 class="text-center text-lead mb-4">
            Post On - <?php echo get_query_var('tag'); ?>
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
