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
            <span class="dashicons dashicons-format-audio"></span>
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