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
        <h4 class="text-center m-auto">
            You Search: <?php echo get_search_query(); ?>
        </h4>
        <?php if(!have_posts()): ?>
            <h2 class="text-center m-auto">
                No Post Found!
            </h2>
        <?php endif; ?>
        <div class="row">
            <div class="<?php echo $default_width; ?>">
                <?php if(have_posts()) {
                    while(have_posts()) {
                    the_post(); 
                        get_template_part('post-formats/content', get_post_format());
                    }
                }
                ?>
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
