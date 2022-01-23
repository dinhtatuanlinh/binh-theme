<?php 
global $post;
get_header(); 
get_header('top');

?>
<div id="single">
    <div class="wrapper">
        <div id="content">
            <h1>Giới thiệu</h1>
            <div class="main-content">
                <p>
                Viện Nghiên cứu phát triển Y học Dân Tộc được thành lập bởi Bộ Khoa Học Công Nghệ và trực thuộc Trung Ương Hội Giáo Dục Chăm sóc sức khỏe cộng đồng Việt Nam với nhiệm vụ Nghiên cứu khoa học, chuyển giao công nghệ, chăm sóc sức khỏe cộng đồng theo phương pháp Y Học Dân Tộc. Trong thời gian qua Viện đã có rất nhiều công trình đề tài nghiên cứu về chiết xuất hoạt chất quý từ dược liệu và nghiên cứu và khảo sát thực tế từ những bài thuốc của các dân tộc, vùng miền và thầy thuốc giỏi khắp mọi miền tổ quốc. Viện đã chuyển giao công nghệ và rất nhiều bài thuốc quý cho rất nhiều đối tác là các công ty Dược, Doanh nghiệp kinh doanh sản xuất về Thực phẩm chức năng, Mỹ Phẩm. Viện cũng kết hợp nghiên cứu và sản xuất với đối tác như Doanh nghiệp nghiên cứu sản xuất Dược phẩm của Pháp , Châu Âu. Sắp tới Viện sẽ có nhiều đề tài được công bố và chuyển giao công nghệ cho các đối tác trong và Ngoài nước.
                </p>
                <p>
                Viện với phương châm phát triển nghiên cứu dựa trên những vốn dược liệu sẵn có của Y dộc dân tộc nước nhà và sự tiến bộ của khoa học công nghệ với những công nghệ với nhất về bào chế dược liệu để cho ra những sản phẩm tốt nhất, hiệu quả nhất đưa tới bệnh nhân, người tiêu dùng với chi phí hợp lý nhất.
                </p>
                <div>
                    <h3>Hội đồng chuyên gia</h3>
                    <div class="box">
                        <div class="items">
                            <img src="https://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/giao-su-hoang-tich-huyen.jpg" alt="">
                            <div class="name">Gs.TS Khoa Học : Hoàng Tích Huyền</div>
                            <p>Chủ tịch hội đồng khoa học Viện Nguyên chủ nhiệm bộ môn Dược Lý Trường Đại Học Y Hà Nội.</p>
                        </div>
                        <div class="items">
                            <img src="https://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/118803466_107693774405304_4534668348620973447_n.jpg" alt="">
                            <div class="name">Đại Tá – TS.BS Thầy Thuốc Ưu Tú : Phạm Hòa Lan</div>
                            <p>Chủ tịch hội đồng khoa học Viện Nguyên Chủ Nhiệm Khoa Nghiên Cứu Thuốc và Trang Thiết Bị Y Tế – Cục Quân Y Bộ Quốc Phòng</p>
                        </div>
                        <div class="items">
                            <img src="https://vienyhocdantoc.com.vn/wp-content/uploads/2021/06/BS-vu-thi-Khanh-van.jpg" alt="">
                            <div class="name">Đại Tá – TS.BS Thầy Thuốc Ưu Tú : Phạm Hòa Lan</div>
                            <p>Chủ tịch hội đồng khoa học Viện Nguyên chủ nhiêm Khoa A9- Viện Y Học Cổ Truyền Quân Đội.</p>
                        </div>
                    </div>
                </div>
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