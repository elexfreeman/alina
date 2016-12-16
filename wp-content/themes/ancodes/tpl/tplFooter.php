<?php
//этот запрос нужно оптимизировать хз как пока сраный WP
$args = array('posts_per_page' => 30, 'post_type' => 'page', 'title' => 'Главная');
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<?php if(get_the_title()=='Главная' )
{
?><footer class="footer">
    <div class="wrapper">
        <div class="contacts">
            <h4>Подписаться на рассылку</h4>
            <form action="#" class="rss-form">
                <fieldset>
                    <input type="text" class="text" placeholder="Ваша эл.почта"/>
                    <input type="submit" class="submit" value="Поехали!"/>
                </fieldset>
            </form>
            <ul class="social-list">
                        <li class="ok"><a href="<?php  the_field( "ok_link" ); ?>">ok</a></li>
                        <li class="fb"><a href="<?php  the_field( "fb_link" ); ?>">fb</a></li>
                        <li class="vk"><a href="<?php  the_field( "vk_link" ); ?>">vk</a></li>
                        <li class="twitter"><a href="<?php  the_field( "twitter_link" ); ?>">twitter</a></li>
                        <li class="instagram"><a href="<?php  the_field( "instagram_link" ); ?>">instagram</a></li>
            </ul>
        </div>
        <div class="holder">
            <h4>Наши партнеры</h4>
            <ul class="partners-list">
                <?php
                $part[1]=get_field( "par1ico" );
                $part[2]=get_field( "par2ico" );
                $part[3]=get_field( "par3ico" );
                $part[4]=get_field( "par4ico" );
                ?>
                <li><a href="<?php  the_field( "par1link" ); ?>"><img src="<?php  echo $part[1]['url']; ?>" alt="#" width="140" height="41" /></a></li>
                <li><a href="<?php  the_field( "par2link" ); ?>"><img src="<?php  echo $part[2]['url']; ?>" alt="#" width="140" height="41" /></a></li>
                <li><a href="<?php  the_field( "par3link" ); ?>"><img src="<?php  echo $part[3]['url']; ?>" alt="#" width="140" height="41" /></a></li>
                <li><a href="<?php  the_field( "par4link" ); ?>"><img src="<?php  echo $part[4]['url']; ?>" alt="#" width="140" height="41" /></a></li>
            </ul>
            <div class="info-line">
                <ul class="payments-list">
                    <li class="visa"><span href="#">visa</span></li>
                    <li class="m-card"><span href="#">m-card</span></li>
                </ul>
                <div class="text-holder">
                    <strong class="copy"><?php  the_field( "copyrights" ); ?></strong>
                    <p>Вся информация носит исключительно информационный характер <br /> и не является рекламой и публичной офертой.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <?php
}
    ?>
<?php endwhile; else : endif; wp_reset_query(); ?>