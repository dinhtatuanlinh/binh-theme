<?php 
global $post;
get_header(); 
get_header('top');

?>
<div id="single">
    <div class="wrapper">
        <div id="content">
            <h1><?php the_title(); ?></h1>
            <div class="main-content">
                <?php 
                the_content(); 
                ?>

            </div>
        </div>
        <div id="right" class="mobile-hide">
            <h3>THÔNG TIN HỮU ÍCH</h3>
            <div class="box">
            <?php
                $args = array(
                    'post_status' => 'publish',
                    'post_type' => 'post',
                    // 'number' => '8',
                    // 'numberposts'      =>8 ,
                    // 'category'         => 0,
                    'orderby'          => 'rand',
                    'order' => 'DESC',
                );
                $blogs = get_posts($args);
                $query = new WP_Query( $args );
                // echo count($blogs);
                // echo '<pre style="color: #fff">';
                // print_r($blogs[0]);
                // echo '</pre>';
                if ( $query->have_posts() ) :
                    while ($query->have_posts()) : $query->the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn
                    $except = get_the_excerpt();
            ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="items">
                        <img class="lazyload" data-src="<?php  echo get_new_img_url(get_the_post_thumbnail_url(), 400, 400); ?>">
                        <h4><?php
                            the_title();
                        ?></h4>
                    </div>
                </a>
            <?php
                endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
            ?>  
            </div>
            
        </div>
    </div>
</div>

<?php 

get_footer(); 
?>