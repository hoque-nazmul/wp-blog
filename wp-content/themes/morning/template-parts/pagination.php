<div class="row mb-5">
    <div class="col-md-6 offset-md-3 bg-light py-3">
        <?php 
            the_posts_pagination([
                'mid_size' => 2,
                'prev_text' => __('Previous Page', 'morning'),
                'next_text' => __('Next Page', 'morning'),
                'screen_reader_text' => __(' ')
            ]);
        ?>
    </div>
</div>
