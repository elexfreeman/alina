<div class="reviews">
    <h3>Отзывы</h3>
    <ul class="reviews-list">
        <?php
        $args = array('posts_per_page' => 10, 'post_type' => 'reviews', 'post_status' => 'publish');
        $the_query = new WP_Query( $args );
        $r_count=0;
        if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <?php $mainimg = get_field('o_avatar');$r_count++;?>

            <li>
                <div class="blockquote">
                    <blockquote cite="#">
                        <q><?php the_field( "r_text" ); ?></q>
                        <cite>
                            <span class="user-pic"><img src="<?php echo $mainimg['sizes']['large']; ?>" alt="#" width="29" height="29" /></span>
                            <span><?php the_field( "r_fio" ); ?>,</span>
                            <span class="city"><?php the_field( "o_sity" ); ?></span>
                        </cite>
                    </blockquote>
                </div>
            </li>

        <?php endwhile; else : endif; wp_reset_query(); ?>


    </ul>
    <a href="#comments-popup" class="read-more popup-btn2"><span>Еще <?php echo $r_count; ?> отзывов</span></a>
</div>
<div class="comments-popup custom-popup" id="comments-popup">
    <div class="title-holder">
        <h2>Отзывы</h2>
    </div>
    <div class="popup-content">
        <p>Время – лучшее свидетельство надежности фирмы и качества торговой марки! Туроператор Ancodes S.L <strong>работает на туристическом рынке с 1993 года</strong>. С этого же года стали летать наши еженедельные, круглогодичные чартерные рейсы по маршруту Москва-Барселона-Москва. </p>
        <p>Начав свою трудовую деятельность с предложений по отелям побережий Коста Брава и Коста Дорада, мы, с 1996 года, расширили спектр предлагаемых услуг и приступили к работе с горнолыжными курортами Андорры и Испании.</p>
        <ul class="comments-list">
            <?php
            $args = array('posts_per_page' => 500, 'post_type' => 'reviews', 'post_status' => 'publish');
            $the_query = new WP_Query( $args );
            $p_count=0;
            if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $mainimg = get_field('o_avatar');$p_count++;?>

                <li>
                    <div class="photo">
                        <img src="<?php echo $mainimg['sizes']['large']; ?>" height="48" width="48" alt="">
                    </div>
                    <span class="person"><?php the_field( "r_fio" ); ?>, <span><?php the_field( "o_sity" ); ?></span></span>
                    <p><?php the_field( "r_text" ); ?></p>
                </li>
            <?php endwhile; else : endif; wp_reset_query(); ?>

        </ul>
        <!-- <a href="#" class="load-more">еще отзывы</a> -->
    </div>
    <a href="javascript:parent.$.fancybox.close();" class="close">Close me</a>
</div>