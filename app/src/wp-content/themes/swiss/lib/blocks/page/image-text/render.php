<?php

// lets keep block data in class for encapsulation and stopping conflicts across blocks
$block = new \Evermade\Swiss\Block(array(
    'layout',
    'layout_width',
    'text',
    'image',
    'image_foreground',
    'image_foreground_vertical_alignment',
    'image_foreground_maximum_width'
));


$imageAreaCSS = "";

$imageCSS = "";

$imageForeground = "";


// set image
$imageAreaCSS = "background-image: url(".\Evermade\Swiss\Acf\getImageUrl('large', $block->get('image')).");";

// set foreground image
$foregroundCSS = "";

if($block->get('image_foreground_maximum_width')){
    $foregroundCSS .= "max-width:".$block->get('image_foreground_maximum_width')."px;";
}

if($block->get('image_foreground')){
    $imageForeground .= "<img style='".$foregroundCSS."' class='b-image-text__foreground-img' src='".\Evermade\Swiss\Acf\getImageUrl('large', $block->get('image_foreground'))."' />";
}

// set image ratio using the images original sizes;
/*$imageTextPaddingTop = ($block->get('image')['height']/$block->get('image')['width'])*100;

if($imageTextPaddingTop){
    $imageCSS .= "padding-top:".$imageTextPaddingTop."%;";
}*/

include(__DIR__.'/templates/view.php');
