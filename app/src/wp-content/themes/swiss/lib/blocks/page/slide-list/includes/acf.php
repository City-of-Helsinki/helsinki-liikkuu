<?php

// https://www.advancedcustomfields.com/resources/register-fields-via-php/

return array (
    'key' => 'group_'.$blockName,
    'name' => $blockName,
    'label' => str_replace('-', ' ', ucfirst($blockName)),
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'field_'.$blockName.'_tab1',
            'label' => 'Slides',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_'.$blockName.'_slides',
            'label' => 'Slides',
            'name' => 'slides',
            'type' => 'relationship',
            'instructions' => 'If left empty will show the number of latest posts found in the settings.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'place',
            ),
            'taxonomy' => array(
            ),
            'filters' => array(
                0 => 'search',
            ),
            'elements' => '',
            'min' => '',
            'max' => '',
            'return_format' => 'object',
        ),
        array(
            'key' => 'field_'.$blockName.'_tab2',
            'label' => 'Section Header',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_'.$blockName.'_section_header',
            'label' => 'Section Header',
            'name' => 'section_header',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        array(
            'key' => 'field_'.$blockName.'_tab3',
            'label' => 'Settings',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_'.$blockName.'_title',
            'label' => 'Section title',
            'name' => 'title',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_'.$blockName.'_see_more',
            'label' => 'See More',
            'name' => 'see_more',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '48',
                'class' => '',
                'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_'.$blockName.'_see_more_text',
            'label' => 'See More Text',
            'name' => 'see_more_text',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
        array(
            'key' => 'field_'.$blockName.'_see_more_url',
            'label' => 'See More URL',
            'name' => 'see_more_url',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '33',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ),
    ),
    'min' => '',
    'max' => '',
);