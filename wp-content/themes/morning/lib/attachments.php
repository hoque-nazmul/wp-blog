<?php 
define( 'ATTACHMENTS_SETTINGS_SCREEN', false ); 
add_filter( 'attachments_default_instance', '__return_false' );


function morning_attachments( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    )
  );

  $args = array(
    'label'         => 'My Attachments',
    'post_type'     => array( 'post', 'page' ),
    'filetype'      => array('image'),
    'note'          => 'Morning Slider here',
    'button_text'   => __( 'Attach Files', 'morning' ),
    'fields'        => $fields,
  );

  $attachments->register( 'slider', $args ); // unique instance name
}

add_action( 'attachments_register', 'morning_attachments' );