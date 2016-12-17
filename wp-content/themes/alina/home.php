<?php get_header(); ?>
<?php $settings = GetSettings(); ?>
    <div class="motopress-wrapper content-holder clearfix">
        <div class="container">
            <div class="row">
                <div class="span12" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">
                    <div class="row">
                        <div class="span12" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
                            <div id="post-203" class="page post-203 type-page status-publish hentry">
                                <div class="row ">
                                    <div class="span12 ">
                                        <div class="cherry-single-carousel-wrapper  loading">
                                            <div class="cherry-single-carousel-container">

                                            <?php
                                            $args = array(
                                                'numberposts'	=> -1,
                                                'post_type'		=> 'projects',
                                                'post_status' => 'publish',

                                             /*   'meta_query'	=> array(
                                                    array(
                                                        'key'	 	=> 'p_show_in_main_slide',
                                                        'value' => 'Да', // matches exactly "red"
                                                        'compare' => 'LiKE'
                                                    )

                                                ),*/
                                            );
                                            $the_query = new WP_Query($args);
                                            if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php $sl_img = get_field('p_main_image');?>
                                                <div class="cherry-single-carousel-item">
                                                    <div class="background">
                                                        <img width="1980" height="894"
                                                             src="<?php echo $sl_img['sizes']['large']; ?>"
                                                             class="attachment-cherry-single-carousel-image size-cherry-single-carousel-image wp-post-image" alt="slide_1"
                                                             srcset="<?php echo $sl_img['sizes']['large']; ?> 300w,
                                                             <?php echo $sl_img['sizes']['large']; ?> 768w,
                                                             <?php echo $sl_img['sizes']['large']; ?> 1024w,
                                                             <?php echo $sl_img['sizes']['large']; ?> 1980w" sizes="(max-width: 1980px) 100vw, 1980px"/>
                                                    </div><div class="foreground">
                                                        <div class="cherry-single-carousel-content-holder">
                                                            <div class="element">
                                                                <h3 class="cherry-single-carousel-item-title">Мы создали</h3>
                                                                <div class="cherry-single-carousel-item-excerpt">
                                                                    <strong><?php  the_field( "p_date" ); ?></strong>
                                                                    <?php  the_field( "p_short_description" ); ?></div>
                                                                <a href="https://ld-wp.template-help.com/wordpress_58640/events-view/we-create-3/" class="btn">Детали</a>
                                                            </div>
                                                        </div>
                                                        <div class="helper"></div>
                                                    </div>
                                                </div>
                                            <?php endwhile; else : endif; wp_reset_query(); ?>

                                            </div>
                                            <div class="cherry-single-carousel-controls">
                                                <a class="prev" href="#" rel="prev"></a>
                                                <a class="next" href="#" rel="next"></a>
                                            </div>
                                            <script>(function($) {
                                                    $(document).ready(function()
                                                    {
                                                        var parallaxSlider = $(".cherry-single-carousel-wrapper"),
                                                            parallaxSliderContaine = $(".cherry-single-carousel-container", parallaxSlider);

                                                        if(true) parallaxSlider.fullwidth_stretcher();

                                                        imagesLoaded( parallaxSliderContaine, function() {
                                                            parallaxSlider.removeClass("loading");
                                                            parallaxSliderContaine.destaque({
                                                                slideMovementPercent: 15,
                                                                slideSpeed: 1000,
                                                                autoSlide: false,
                                                                stopOnMouseOver:false,
                                                                autoSlideDelay : 3000,
                                                                easingType: "easeInOutQuart",
                                                                itemSelector: ".cherry-single-carousel-item",
                                                                itemBackgroundSelector: ".background",
                                                                elementSpeed: 1100,
                                                                itemForegroundElementSelector: ".foreground .element",
                                                                controlsSelector: ".cherry-single-carousel-controls a",
                                                                paginationSelector: ".cherry-single-carousel-pagination a",
                                                                parallax:true,
                                                                bufferRatio:1.5
                                                            });
                                                        });
                                                    });
                                                })(jQuery);
                                            </script>
                                        </div>
                                        <ul class="posts-grid row-fluid unstyled portfolio-home full-width-block ul-item-0">


                                            <li class="span4 list-item-3">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3.jpg" title="Mountain view" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3-800x540.jpg" alt="Mountain view"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5"><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/mountain-view/" title="Mountain view">Архитектурное проектирование</a></h5>
                                                        <p class="excerpt">Услуги по архитектурному проектированию</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>



                                            <li class="span4 list-item-2">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_2.jpg" title="Penthouse" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_2-800x540.jpg" alt="Penthouse"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5">
                                                            <a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/penthouse/" title="Penthouse">Дизайн и декорирование</a>
                                                        </h5>
                                                        <p class="excerpt">Индивидуальный подход к каждому Заказчику</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>
                                            <li class="span4 list-item-3">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3.jpg" title="Mountain view" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3-800x540.jpg" alt="Mountain view"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5">
                                                            <a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/mountain-view/" title="Mountain view">Инженерное проектирование</a>
                                                        </h5>
                                                        <p class="excerpt">This product will spark your imagination. Even more, it will turn your life into adventure. Find the package you are&hellip;</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>
                                            <li class="span4 list-item-3">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3.jpg" title="Mountain view" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3-800x540.jpg" alt="Mountain view"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5"><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/mountain-view/" title="Mountain view">Строительство и ремонт</a></h5>
                                                        <p class="excerpt">This product will spark your imagination. Even more, it will turn your life into adventure. Find the package you are&hellip;</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>

                                            <li class="span4 list-item-3">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3.jpg" title="Mountain view" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3-800x540.jpg" alt="Mountain view"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5"><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/mountain-view/" title="Mountain view">Мебель по индивидуальному заказу</a></h5>
                                                        <p class="excerpt">This product will spark your imagination. Even more, it will turn your life into adventure. Find the package you are&hellip;</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>

                                            <li class="span4 list-item-3">
                                                <figure class="featured-thumbnail thumbnail">
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3.jpg" title="Mountain view" rel="prettyPhoto-1235742828">
                                                        <img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_3-800x540.jpg" alt="Mountain view"/>
                                                        <span class="zoom-icon"></span>
                                                    </a>
                                                </figure>
                                                <div class="clear"></div>
                                                <div class="desc">
                                                    <div class="desc-in">
                                                        <h5 class="cat-head-h5"><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/mountain-view/" title="Mountain view">Поставка мебели</a></h5>
                                                        <p class="excerpt">This product will spark your imagination. Even more, it will turn your life into adventure. Find the package you are&hellip;</p>
                                                    </div>
                                                    <div class="helper"></div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="spacer"></div>
                                        <div class="title-box clearfix extra">
                                            <h2 class="title-box_primary">welcome</h2>
                                        </div>
                                        <div class="row ">
                                            <div class="span4 "><section class="lazy-load-box trigger effect-slidetop " data-delay="0" data-speed="600" style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                    <h6><?php echo $settings['welocome_left_title']; ?></h6>
                                                    <?php echo $settings['welcome_left_text']; ?>
                                                </section></div>
                                            <div class="span4 "><section class="lazy-load-box trigger effect-slidetop " data-delay="200" data-speed="600" style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                    <h6><?php echo $settings['welcome_center_title']; ?></h6>
                                                    <?php echo $settings['welcome_center_text']; ?>
                                                </section></div>
                                            <div class="span4 "><section class="lazy-load-box trigger effect-slidetop " data-delay="400" data-speed="600" style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                    <h6><?php echo $settings['welcome_right_title']; ?></h6>
                                                    <?php echo $settings['welcome_right_text']; ?>
                                                </section></div>
                                        </div>
                                        <a href="https://ld-wp.template-help.com/wordpress_58640/portfolio/" title="view details" class="btn btn-default btn-normal btn-inline indent_top" target="_self">view details</a>
                                        <div class="spacer"></div>
                                        <section class="parallax-box image-parallax-box parallax_1"><div class="parallax-content">
                                                <div class="spacer"></div>
                                                <div class="title-box clearfix "><h2 class="title-box_primary">team</h2></div>
                                                <section class="lazy-load-box trigger effect-slidetop " data-delay="0" data-speed="600" style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                                    <div class="carousel-wrap models"><div id="owl-carousel-58303f8a05a31" class="owl-carousel-team owl-carousel" data-items="4" data-auto-play="0" data-nav="false" data-pagination="true"><div class="item format-standart item-list-0"><figure><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/caroline-beek/" title="Caroline Beek"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2012/05/team_1.jpg" alt="Caroline Beek"/></a></figure><div class="desc"><h5><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/caroline-beek/" title="Caroline Beek">Caroline Beek</a></h5><span class="team_position">Lead Designer</span></div></div><div class="item format-standart item-list-1"><figure><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/sam-kromstain/" title="Sam Kromstain"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2011/07/team_2.jpg" alt="Sam Kromstain"/></a></figure><div class="desc"><h5><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/sam-kromstain/" title="Sam Kromstain">Sam Kromstain</a></h5><span class="team_position">Chief Administrator</span></div></div><div class="item format-standart item-list-2"><figure><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/john-franklin/" title="John Franklin"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2011/07/team_3.jpg" alt="John Franklin"/></a></figure><div class="desc"><h5><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/john-franklin/" title="John Franklin">John Franklin</a></h5><span class="team_position">Quality Control Manager</span></div></div><div class="item format-standart item-list-3"><figure><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/julie-herzigova/" title="Julie Herzigova"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2011/07/team_4.jpg" alt="Julie Herzigova"/></a></figure><div class="desc"><h5><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/julie-herzigova/" title="Julie Herzigova">Julie Herzigova</a></h5><span class="team_position">Architectural Modeler</span></div></div><div class="item format-standart item-list-4"><figure><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/sam-franklin/" title="Sam Franklin"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/team_5-400x400.jpg" alt="Sam Franklin"/></a></figure><div class="desc"><h5><a href="https://ld-wp.template-help.com/wordpress_58640/team-view/sam-franklin/" title="Sam Franklin">Sam Franklin</a></h5><span class="team_position">Quality Control Manager</span></div></div></div></div>
                                                </section>
                                                <div class="spacer"></div>
                                                <div class="clear"></div></div><div class="parallax-bg" data-parallax-type="image" data-img-url="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/parallax_1.jpg" data-speed="normal" data-invert="false"></div></section>
                                        <div class="spacer"></div>
                                        <div class="title-box clearfix "><h2 class="title-box_primary">Events</h2></div>
                                        <section class="lazy-load-box trigger effect-slidetop " data-delay="0" data-speed="600" style="-webkit-transition: all 600ms ease; -moz-transition: all 600ms ease; -ms-transition: all 600ms ease; -o-transition: all 600ms ease; transition: all 600ms ease;">
                                            <ul class="posts-grid row-fluid unstyled grid-events ul-item-0"><li class="span4 list-item-1"><figure class="featured-thumbnail thumbnail"><a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_7.jpg" title="Dior garment styles  boutique" rel="prettyPhoto-1080910205"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_7-500x328.jpg" alt="Dior garment styles  boutique"/><span class="zoom-icon"></span></a></figure><div class="clear"></div><div class="desc"><div class="desc-in"><div class="post_meta"><span class="post_category"><em>Posted in </em><a href="https://ld-wp.template-help.com/wordpress_58640/category/aliquam-bibendum-justo-semper/" title="Projects">Projects</a> </span><span class="post_date"><time datetime="2014-05-27T06:31:56">27/05/2014</time></span><span class="post_author"><em> by </em><a href="https://ld-wp.template-help.com/wordpress_58640/author/admin/">admin</a></span><span class="post_comment"><a href="https://ld-wp.template-help.com/wordpress_58640/aliquam-bibendum-justo-semper/dior-garment-styles-boutique/" class="comments_link">3 Comments</a></span></div><h5><a href="https://ld-wp.template-help.com/wordpress_58640/aliquam-bibendum-justo-semper/dior-garment-styles-boutique/" title="Dior garment styles  boutique">Dior garment styles boutique</a></h5><p class="excerpt">Many students are cash-strapped, nowadays. Nevertheless, their purchasing power is very high. Research reveals that 20 million students in the&hellip;</p></div><div class="helper"></div></div></li><li class="span4 list-item-2"><figure class="featured-thumbnail thumbnail"><a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_8.jpg" title="New Louis Vuitton boutique" rel="prettyPhoto-1080910205"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_8-500x328.jpg" alt="New Louis Vuitton boutique"/><span class="zoom-icon"></span></a></figure><div class="clear"></div><div class="desc"><div class="desc-in"><div class="post_meta"><span class="post_category"><em>Posted in </em><a href="https://ld-wp.template-help.com/wordpress_58640/category/aliquam-bibendum-justo-semper/" title="Projects">Projects</a> </span><span class="post_date"><time datetime="2013-03-14T20:28:57">14/03/2013</time></span><span class="post_author"><em> by </em><a href="https://ld-wp.template-help.com/wordpress_58640/author/admin/">admin</a></span><span class="post_comment"><a href="https://ld-wp.template-help.com/wordpress_58640/aliquam-bibendum-justo-semper/new-louis-vuitton-boutique/" class="comments_link">3 Comments</a></span></div><h5><a href="https://ld-wp.template-help.com/wordpress_58640/aliquam-bibendum-justo-semper/new-louis-vuitton-boutique/" title="New Louis Vuitton boutique">New Louis Vuitton boutique</a></h5><p class="excerpt">What is stopping you from believing in the business of your dreams? Insecurity? Fear? Lack of confidence? All of the&hellip;</p></div><div class="helper"></div></div></li><li class="span4 list-item-3"><figure class="featured-thumbnail thumbnail"><a href="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_9.jpg" title="Apple’s futuristic tech office in Interna" rel="prettyPhoto-1080910205"><img src="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/img_9-500x328.jpg" alt="Apple’s futuristic tech office in Interna"/><span class="zoom-icon"></span></a></figure><div class="clear"></div><div class="desc"><div class="desc-in"><div class="post_meta"><span class="post_category"><em>Posted in </em><a href="https://ld-wp.template-help.com/wordpress_58640/category/tristique-ultrices-lectus-augue-pellent/" title="Modern House">Modern House</a> </span><span class="post_date"><time datetime="2013-03-05T20:31:03">05/03/2013</time></span><span class="post_author"><em> by </em><a href="https://ld-wp.template-help.com/wordpress_58640/author/admin/">admin</a></span><span class="post_comment"><a href="https://ld-wp.template-help.com/wordpress_58640/tristique-ultrices-lectus-augue-pellent/apples-futuristic-tech-office-in-interna/" class="comments_link">0 Comments</a></span></div><h5><a href="https://ld-wp.template-help.com/wordpress_58640/tristique-ultrices-lectus-augue-pellent/apples-futuristic-tech-office-in-interna/" title="Apple’s futuristic tech office in Interna">Apple’s futuristic tech office in Interna</a></h5><p class="excerpt">Thousands of people dream of having their own business and even more so be a successful entrepreneur. But what does&hellip;</p></div><div class="helper"></div></div></li></ul>
                                            <p style="outline-width: 0px ! important; -moz-user-select: text ! important;"></section>
                                        <a href="https://ld-wp.template-help.com/wordpress_58640/blog/" title="View Details" class="btn btn-default btn-normal btn-inline " target="_self">View Details</a>
                                        <div class="spacer"></div>
                                        <section class="parallax-box image-parallax-box parallax_2"><div class="parallax-content">
                                                <div class="spacer"></div>
                                                <div class="clear"></div></div><div class="parallax-bg" data-parallax-type="image" data-img-url="https://ld-wp.template-help.com/wordpress_58640/wp-content/uploads/2016/03/parallax_2.jpg" data-speed="normal" data-invert="false"></div></section>
                                        <div class="hero-unit "><h1>We have a passion <strong>in creating unique spaces</strong></h1><div class="btn-align"><a href="https://ld-wp.template-help.com/wordpress_58640/about/" title="View Details" class="btn btn-default btn-normal btn-primary" target="_self">View Details</a></div></div> </div>
                                </div>
                                <div class="clear"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>