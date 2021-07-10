<?php 
    get_header();
    $default_width = 'col-md-9';
    if(!is_active_sidebar('sidebar-1')) {
        $default_width = 'col-md-10 offset-md-1';
    }
    $videoIcon = '<span class="dashicons dashicons-video-alt3"></span>';
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <div class="container">
        <div class="row">
            <div class="<?php echo $default_width; ?>">
                <?php if(have_posts()): 
                    while(have_posts()): 
                    the_post(); 
                ?>
                <div <?php post_class(['post']); ?>>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php the_permalink(); ?>">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p>
                                <strong>
                                    <?php the_author(); ?>
                                </strong>
                                <br/>
                                <?php echo get_the_date(); ?>
                            </p> 
                            <p class="font-size: 20px"><?php echo get_post_meta(get_the_ID(), 'place', true) ?></p>
                            <?php 
                           
                                the_tags(
                                    '<ul class="list-unstyled"><li>', 
                                    '</li><li>', 
                                    '</li></ul>'
                                );
                            ?>
                            <?php 
                                if (has_post_format('video')) {
                                    echo $videoIcon;
                                }
                            ?>
                        </div>
                        <div class="col-md-9">
                            <p>
                                <?php 
                                    if(has_post_thumbnail()) {
                                        the_post_thumbnail('large', ['class' => 'img-fluid']);
                                    }
                                ?>
                            </p>
                            <?php 
                                the_excerpt();
                            ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
            <?php if(is_active_sidebar('sidebar-1')): ?>
                <div class="col-md-3">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php 
    get_template_part('template-parts/pagination');
    get_footer();
?>
