<?php

function initPageUpdates($metaBoxes)
{
//    if ( isset( $_GET['post'] ) )
//        $post_id = $_GET['post'];
//    elseif ( isset( $_POST['post_ID'] ) )
//        $post_id = $_POST['post_ID'];
//    else
//        $post_id = false;
//
//    $post_id = (int) $post_id;
//
//    $template = get_post_meta( $post_id, '_wp_page_template', true );
//
//    if (in_array($template, array('page-contact.php'))) {
//        $metaBoxes['main'] = array(
//            'id' => 'mainSection',
//            'title' => __('Alt Content'),
//            'pages' => array('page'),
//            'context' => 'normal',
//            'priority' => 'high',
//            'autosave' => true,
//            'fields' => array(
//                array(
//                    'name' => __('Alt Content'),
//                    'id'   => "pageAltContent",
//                    'type' => 'wysiwyg',
//                    'raw'  => false,
//                    'std'  => '',
//                    'options' => array(
//                        'textarea_rows' => 12,
//                        'media_buttons' => false,
//                    ),
//                ),
//            ),
//        );
//    }

    return $metaBoxes;
}