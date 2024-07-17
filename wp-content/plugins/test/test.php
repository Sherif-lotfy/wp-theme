<?php
/*
    Plugin Name: test
    Description: testt
    Version: 1.0.0    
*/
add_action( 'the_content', 'add_content');
function add_content ($content){
    return $content.= "<h3>??date??</h3>";
}