<?php 
    wp_list_comments();
    if (!comments_open()) {
        _e('Comment Box is full', 'morning');
    }
    the_comments_pagination([
        'prev_text' => __('Previous', 'morning'),
        'next_text' => __('Next', 'morning'),
        'screen_reader_text' => __(' ', 'morning')
    ]);
    comment_form();