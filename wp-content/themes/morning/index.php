<?php 
    get_header();
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <?php if(have_posts()): ?>
        <?php while(have_posts()): 
           the_post(); 
        ?>
            <div <?php post_class(['post']); ?>>
                <div class="container">
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
                        <div class="col-md-4">
                            <p>
                                <strong>
                                    <?php the_author(); ?>
                                </strong>
                                <br/>
                                <?php get_the_date(); ?>
                            </p>
                            <?php 
                                the_tags(
                                    '<ul class="list-unstyled"><li>', 
                                    '</li><li>', 
                                    '</li></ul>'
                                );
                            ?>
                        </div>
                        <div class="col-md-8">
                            <p>
                                <?php 
                                    if(has_post_thumbnail()) {
                                        the_post_thumbnail('large', ['class' => 'img-fluid']);
                                    }
                                ?>
                            </p>
                            <?php 
                                if (is_single()) {
                                    the_content();
                                } else {
                                    the_excerpt();
                                }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

</div>
<?php 
    get_footer();
?>
