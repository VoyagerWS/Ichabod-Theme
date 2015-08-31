<?php
/**
 * Plugin Name: Ichabod Shortcodes
 * Plugin URI: http://voyagerwebsolutions.com/
 * Description: This plugin adds some shortcodes to the Ichabod theme.
 * Version: 1.0.0
 * Author: Ryan Gilbert
 * Author URI: http://voyagerwebsolutions.com/
 * License: GPL2
 */



/******* Feature Box ********/
function feature_box( $params, $content=null ) {
    extract( shortcode_atts( array(
        'img'  => '',
       'title' => '',
       'link' => ''
    ), $params));


    $result =  '<div class="feature-box"><div class="thumbnail"><a href="' . $link .'"><img src="' . $img . '" alt="'. $title . '"></a></div>';
    $result .= '<div class="caption"><h3>'. $title . '</h3></div>'; 
    $result .= '<p>';
    $result .= do_shortcode( $content );
    $result .= '</p></div>';
    return force_balance_tags( $result );
}
add_shortcode( 'feature_box', 'feature_box' );



/******* Icon Box ********/
function icon_box( $params, $content=null ) {
    extract( shortcode_atts( array(
       'icon'  => '',
       'title' => '',
        'link' => '',
        'color' => '',
        'size' => '5'

    ), $params));


    $result =  '<div class="icon-box"><div class="thumbnail"><a href="' . $link .'"><i style="color:' . $color . '" class="fa '. $icon .' fa-'. $size .'x"></i></div>';
    $result .= '<div class="caption"><h3>'. $title . '</h3></div>'; 
    $result .= '<p>';
    $result .= do_shortcode( $content );
    $result .= '</p></div>';
    return force_balance_tags( $result );
}
add_shortcode( 'icon_box', 'icon_box' );



/******* Add Button ********/


function ichabod_buttons( $params, $content=null ) {
    extract(shortcode_atts(array(
        'size' => 'default',
        'type' => 'default',
        'value' => 'Button Text',
        'href' => "#"
    ), $params ) );

    $result = '<a class="btn btn-' . $size . ' btn-' . $type . '" href="' . $href . '">' . $value . '</a>';
    return force_balance_tags( $result );
}
add_shortcode( 'add_button', 'ichabod_buttons' );





/******* Add Box ********/

function well( $params, $content=null ) {
    extract( shortcode_atts( array(
        'size' => 'unknown'
    ), $params));


    $result =  '<div class="well well-' . $size . '">';
    $result .= do_shortcode( $content );
    $result .= '</div>';
    return force_balance_tags( $result );
}
add_shortcode( 'box', 'well' );


/******* Add Panel ********/

function panel( $params, $content=null ) {
    extract( shortcode_atts( array(
        'type' => 'default',
	   'title' => '',
	    'body' => ''
    ), $params));


    $result =  '<div class="panel panel-' . $type . '">';
    $result .= '<div class="panel-heading"><h3 class="panel-title">'. $title . '</h3></div>'; 
    $result .= '<div class="panel-body">';
    $result .= do_shortcode( $content );
    $result .= '</div></div>';
    return force_balance_tags( $result );
}
add_shortcode( 'panel', 'panel' );


/******* Grid ********/

function row( $params, $content=null ) {
    extract( shortcode_atts( array(
        'class' => 'row'
    ), $params ) );
    $result = '<div class="' . $class . '">';
    $result .= do_shortcode( $content );
    $result .= '</div>';
    return force_balance_tags( $result );
}
add_shortcode('row', 'row');

function span( $params, $content=null ) {
    extract( shortcode_atts( array(
        'class' => '',
           'col' => '',
        ), $params ) );

    $result = '<div class="col-md-' . $col . '">';
    $result .= do_shortcode( $content );
    $result .= '</div>';
    return force_balance_tags( $result );
}
add_shortcode( 'column', 'span' );






