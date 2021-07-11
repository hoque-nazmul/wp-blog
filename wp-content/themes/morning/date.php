<?php 
    get_header();
    $date = '';
    if (is_month()) {
        $month_num = get_query_var('monthnum');
        $datetime = DateTime::createFromFormat('!m', $month_num);
        $date = $datetime->format('F');
    } elseif(is_year()) {
        $date = get_query_var('year');
    } elseif (is_day()) {
        $date = get_query_var('monthnum'). '/' . get_query_var('day') . '/' . get_query_var('year');
    }
?>
<body <?php body_class(); ?>>
<!-- Hero Section -->
<?php get_template_part('template-parts/hero') ?>
<div class="posts">
    <div class="container">
        <h2 class="text-center text-lead mb-4">
            Post On - <?php echo $date; ?>
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
    get_footer();
?>
