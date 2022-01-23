<?php
// tao hằng số lưu đường dẫn
define('DTTL_THEME_DIR', get_template_directory());// đường dẫn tới thư mục theme dẫn tới các khu vực chứa file
define('DTTL_THEME_URL', get_template_directory_uri());//
define('DTTL_THEME_INC_DIR', DTTL_THEME_DIR . '/inc');
define('DTTL_THEME_ASSETS_DIR', DTTL_THEME_DIR . '/assets');
define('DTTL_THEME_CUSTOMIZER_DIR', DTTL_THEME_INC_DIR . '/customizer');
define('DTTL_THEME_URL_IMG', get_template_directory_uri() . '/imgs');
define('DTTL_THEME_URL_ICON', get_template_directory_uri() . '/icons');

// ----------------------------------
// 8. định nghĩa add woocommerce support to the theme
// ----------------------------
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}   


// ----------------------------
// 7. quản lý các hàm hỗ trợ
// lấy url từ ảnh trong bài viết
// resize lại kích thước của ảnh để tối ưu tốc độ load website
// ----------------------------
require_once DTTL_THEME_INC_DIR . '/support-functions.php';


// ----------------------------
// 6. quản lý customizer
// ----------------------------
// require_once DTTL_THEME_INC_DIR . '/customizer-manager.php';
// global $CustomizeVal;// khai báo biến $DDNCustomize để có thể sử dụng ở mọi nơi trong website
// $CustomizeVal = new dttl_Theme_Customizer_Manager();


// ----------------------------
// 5. 
// gọi class html trong tệp tin html.php vào
// trước tiên kiểm tra xem tệp tin ZendvnHtml đã tồn tại trong plugin nào chưa nếu rồi thì ko sử dụng lại nữa
// ----------------------------
if(!class_exists('ZendvnHtml') && is_admin()){
    require_once DTTL_THEME_INC_DIR . '/html.php';

}

// ----------------------------
// 4. quản lý menu
// ----------------------------
require_once DTTL_THEME_INC_DIR . '/menu-manager.php';

// ----------------------------
// 3. khai báo các dạng format và features
// ----------------------------
add_action('after_setup_theme', 'DTTL_THEME_post_format');
function DTTL_THEME_post_format(){
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio') );
    add_theme_support( 'post-thumbnails');
}

// ----------------------------
// 2. nap tep tin js
// ----------------------------
require_once DTTL_THEME_ASSETS_DIR . '/js/js-manager.php';
// ----------------------------
// 1. nap tep tin css
// ----------------------------
require_once DTTL_THEME_ASSETS_DIR . '/css/css-manager.php';
// ----------------------------
// 0. đổi giao diện edit về giao diện cũ
// ----------------------------
add_filter('use_block_editor_for_post', '__return_false');



// $newImgUrl = aaget_new_img_url('http://localhost/OneDrive%20-%20hus.edu.vn/lythuyet/wordpress/ddn/wp-content/uploads/2020/10/ricoh-Ri-1000.jpg', 50, 50);
//     echo "<pre style='color: red;font-size: 14px'>";
//     	print_r($newImgUrl);
//     echo "</pre>";