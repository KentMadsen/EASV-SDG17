<?php

/* 
    Enqueues the required page scripts & styles required to function
*/
function enqueuing_functional_file_requirements()
{
    remove_actions();
    
    enque_style_sheets();

    enque_scripts_frameworks();
    enque_scripts_functional();
};

function remove_actions()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
};

function enque_scripts_frameworks()
{
    wp_enqueue_script( 'vue', 
                        get_template_directory_uri() . '/javascript/vue.min.js', 
                        null, 
                        null, 
                        false );
};

function enque_scripts_functional()
{
    wp_enqueue_script( 'application', 
                        get_template_directory_uri() . '/javascript/application.js', 
                        array('vue'), 
                        null, 
                        false );
    
    wp_enqueue_script( 'mobile', 
                        get_template_directory_uri() . '/javascript/mobile.js', 
                        array('vue'), 
                        null, 
                        false );
};

function enque_style_sheets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', null, null, null);
};

add_action( 'wp_enqueue_scripts', 'enqueuing_functional_file_requirements' );
?>