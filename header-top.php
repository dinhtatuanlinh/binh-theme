<div id="closeMobileMenu" onclick='closemenu()'></div>
<div id="mobile-menu">
    <div class="close" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <?php
        if(has_nav_menu('mobile_menu')){
            $args = array(
                'menu'                 => '',
                'container'            => '',
                'container_class'      => '',
                'container_id'         => '',
                'container_aria_label' => '',
                'menu_class'           => '',
                'menu_id'              => '',
                'echo'                 => true,
                'fallback_cb'          => 'wp_page_menu',
                'before'               => '',
                'after'                => '',
                'link_before'          => '',
                'link_after'           => '',
                'items_wrap'           => '<ul>%3$s</ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                'item_spacing'         => 'preserve',
                'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                'walker'               => '',
                'theme_location'       => 'mobile_menu',
            );
            wp_nav_menu( $args );
        }
    ?>
    <div class="close2" onclick='closemenu()'><i class="fa fa-times" aria-hidden="true"></i></div>

</div>

<div id="top">

    <div id="upper" class="mobile-hide">
        <div class="wrapper">
            <div id="logo">
                <img src="http://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/k-120x120-1.png" alt="logo">
            </div>
            <div id="name">
                <h2>VIỆN NGHIÊN CỨU PHÁT TRIỂN</h2>
                <p>Y HỌC DÂN TỘC</p>
            </div>
            <div id="hot-line">
                <p>hotline: 0338.016.188</p>
            </div>
        </div>
    </div>
    <div id="navi">
        <div class="wrapper">
            <div id="mobile-icon-menu" class="desktop-hide" onclick="openmenu()">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </div>
            <div id="logo-mobile"  class="desktop-hide tablet-hide">
                <img src="http://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/k-120x120-1.png" alt="logo">
            </div>
            <?php
                if(has_nav_menu('main_menu')){
                    $args = array(
                        'menu'                 => '',
                        'container'            => 'nav',
                        'container_class'      => 'tablet-hide mobile-hide',
                        'container_id'         => '',
                        'container_aria_label' => '',
                        'menu_class'           => '',
                        'menu_id'              => '',
                        'echo'                 => true,
                        'fallback_cb'          => 'wp_page_menu',
                        'before'               => '',
                        'after'                => '',
                        'link_before'          => '',
                        'link_after'           => '',
                        'items_wrap'           => '<ul>%3$s<hr/></ul>',//%3$s tương ứng với giá trị trong cặp thẻ li đưa vào
                        'item_spacing'         => 'preserve',
                        'depth'                => 3,// cho phép menu hiện 2 cấp nếu bằng 0 thì hiện tất cả các cấp bằng 1 thì chỉ hiện menu cha
                        'walker'               => '',
                        'theme_location'       => 'main_menu',
                    );
                    wp_nav_menu( $args );
                }
            ?>
            
            <!-- <div id="searchform" class="mobile-hide tablet-hide">
                <?php get_search_form();//kéo searchform vào ?>
            </div> -->
        </div>
    </div>
</div>