<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    if(!is_page("trum-kim-cuong-si")&&!is_page("trum-kim-cuong-si-thanks")){
        wp_register_script('cookie', $jsUrl . '/cookie.js', array(), '1.0', false);
        wp_enqueue_script('cookie');
        wp_register_script('lazyload', $jsUrl . '/lazysizes.min.js', array(), '1.0', true);
        wp_enqueue_script('lazyload');
        wp_register_script('swiper-bundle', $jsUrl . '/swiper-bundle.min.js', array( 'jquery' ), '1.0', true);
        wp_enqueue_script('swiper-bundle');
        wp_register_script('gsap', $jsUrl . '/gsap.min.js', array(), '1.0', true);
        wp_enqueue_script('gsap');
        wp_register_script('blog-swiper', $jsUrl . '/blog-swiper.js', array(), '1.0', true);
        wp_enqueue_script('blog-swiper');
        wp_register_script('open-close-menu', $jsUrl . '/open-close-menu.js', array(), '1.0', true);
        wp_enqueue_script('open-close-menu');
    }

}
?>