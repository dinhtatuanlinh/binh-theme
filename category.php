<?php 
get_header(); 
get_header('top');

?>


</div>
<div id="second-main">
    <div class="wrapper">
        <div id="content">
            <h1 class="cattitle"><?php echo get_the_category()[0]->name; ?></h1>
            <div class="post-wrapper">
                <?php
                    if ( have_posts() ) :
                        while (have_posts()) : the_post();//phải dùng vòng lặp while để lấy ra đúng bài được chọn  
                        /* get the WC_Product Object */ 
                        $except = get_the_excerpt();
                        // echo $except;
                ?>
                <div class="items">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        <div class="infowrapper">
                            <div class="name"><?php the_title(); ?></div>
                            <!-- <div class="date">Đăng vào: <?php the_date() ; ?></div> -->
                            <p><?php echo str_split(  $except, 100)[0]; ?></p>
                        </div>
                    </a>
                </div>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();// reset lại đối tương wp_query
                ?>
            </div>

            <?php the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '&larr;',
                'next_text' => '&rarr;',
            )); ?>
            
        </div>

    </div>

</div>

<?php 

get_footer(); 
?>