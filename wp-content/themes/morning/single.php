<?php 
    get_header();
    $default_width = 'col-md-9';
    if(!is_active_sidebar('sidebar-1')) {
        $default_width = 'col-md-10 offset-md-1';
    }
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
                            <h2 class="post-title text-center">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                <strong>
                                    <?php the_author(); ?>
                                </strong>
                                <br/>
                                <?php echo get_the_date(); ?>
                            </p>
                            <?php 
                                the_tags(
                                    '<ul class="list-unstyled d-flex justify-content-center"><li class="px-2">', 
                                    '</li><li>', 
                                    '</li></ul>'
                                );
                            ?>
                            <p>
                                <?php 
                                    if (!class_exists('Attachments')) {
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail('large', ['class' => 'img-fluid', 'style'=>'width:100%']);
                                        }
                                    }
                                ?>
                                <div class="slider">
                                    <?php
                                        if (class_exists('Attachments')):
                                        $attachments = new Attachments('slider');
                                    ?>
                                    <?php if( $attachments->exist() ) : ?>
                                        <?php while( $attachment = $attachments->get() ) : ?>
                                            <div>
                                                <?php echo $attachments->image('large'); ?>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </p>
                            <?php 
                                the_content();
                            ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <div>
                <?php wp_link_pages(  ); ?>
            </div>
            
            <div>
                <?php 
                    if (!post_password_required() && get_comments_number()) {
                        comments_template();
                    }
                ?>
            </div>
            </div>
            <?php if(is_active_sidebar('sidebar-1')): ?>
                <div class="col-md-3 justify-content-end">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_template_part('template-parts/author');?>
    <div class="row mb-5">
    <div class="col-md-6 offset-md-3 bg-light py-3">
        <div class="d-flex justify-content-between">
            <?php 
                previous_post_link();
                next_post_link();
            ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?>
