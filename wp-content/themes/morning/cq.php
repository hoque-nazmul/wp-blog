<?php 
/**
 * Template Name: Custom Query
 */
    get_header();
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <div class="container">
        <div class="row">
            <?php  ?>
            <div class="col-md-10 offset-md-1">
                <?php 
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $post_per_page = 2;
                    $_p = new WP_Query([
                        'posts_per_page' => $post_per_page,
                        'orderby' => 'post__in',
                        'paged' => $paged 
                    ]);

                    
                ?>
                <?php while($_p->have_posts()): 
                    $_p->the_post();    
                ?>
                <div <?php post_class(['post']); ?>>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php the_permalink() ?>">
                                <h2 class="post-title text-center">
                                    <?php echo the_title() ?>
                                </h2>
                            </a>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile; 
                    wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</div>
<?php 
    echo paginate_links([
        'total'=> $_p->max_num_pages,
        'current' => $paged
    ]);
    get_footer();
?>
