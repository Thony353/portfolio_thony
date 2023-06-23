<?php

// Para agregar menus personalizados
function register_menus(){
    register_nav_menus([
        'menu_principal' => __('Main menu')
    ]);
}

add_action('init','register_menus');


function new_section_1(){
	
    do_shortcode('<div style="width: 100%;margin: 0 auto;text-align:center">[su_button radius="square" url="http://google.com"] Click me [/su_button]</div>');
        
}
    
add_action( ' hestia_after_blog_section_hook', 'new_section_1' );