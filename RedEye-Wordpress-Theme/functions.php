<?php

function redEye_script() {

wp_register_style('Go-bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(),'4.0.0','all');
wp_register_script('Handler','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js', array('jquery'),'4.0.0', true);
wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js', array('jquery'),'4.0.0', true);
wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js', array('jquery'),'4.0.0', true);



wp_enqueue_style('Go-bootstrap');
wp_enqueue_script('Handler');
wp_enqueue_script('popper');
wp_enqueue_script('bootstrap');


}

add_action( 'wp_enqueue_scripts', 'redEye_script' );
add_theme_support( 'menus' );

