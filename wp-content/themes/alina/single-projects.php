<?php get_header(); ?>
<?php $settings = GetSettings(); ?>

        <div class="motopress-wrapper content-holder clearfix">
            <div class="container">
                <div class="row">
                    <div class="span12" data-motopress-wrapper-file="single.php" data-motopress-wrapper-type="content">
                        <div class="row">
                            <div class="span12" data-motopress-type="static"
                                 data-motopress-static-file="static/static-title.php">
                                <section class="title-section">
                                    <h1 class="title-header">
                                        <?php echo the_title(); ?> </h1>

                                    <ul class="breadcrumb breadcrumb__t">
                                        <li><a href="/">Главная</a></li>
                                        <li class="divider"></li>
                                        <li class="active"><?php echo the_title(); ?></li>
                                    </ul>
                                </section>
                            </div>
                        </div>
                        <div class="row">
                            <div class="span8 right right" id="content" data-motopress-type="loop"
                                 data-motopress-loop-file="loop/loop-single.php">
                                <article id="post-2045"
                                         class="post__holder post-2045 events type-events status-publish has-post-thumbnail hentry">
                                    <?php $sl_img = get_field('p_main_image');?>
                                    <figure class="featured-thumbnail thumbnail large">
                                        <img src="//" data-src="<?php echo $sl_img['sizes']['large']; ?>"
                                                                                            alt="<?php echo the_title(); ?>"></figure>

                                    <div class="post_content">
                                       <?php the_field('p_content') ?>

                                        <div class="clear"></div>
                                    </div>

                                    <ul id="portfolio-grid" class="filterable-portfolio thumbnails portfolio-2cols" data-cols="2cols">
                                        <script>
                                            jQuery(document).ready(function($) {
                                                var $container = $('#portfolio-grid'),
                                                    items_count = $(".portfolio_item").size();

                                                $(window).load(function(){
                                                    var selector = window.location.hash.replace( /^#category/, '.term' );

                                                    if ( selector == "#all" ) {
                                                        selector = '';
                                                        change_hash(selector);
                                                    }

                                                    setColumnWidth();
                                                    $container.isotope({
                                                        itemSelector : '.portfolio_item',
                                                        hiddenClass : 'portfolio_hidden',
                                                        resizable : false,
                                                        transformsEnabled : true,
                                                        layoutMode: 'fitRows',
                                                        filter: selector
                                                    })

                                                    $('#filters .active').removeClass('active')
                                                    $('#filters li a[data-filter="'+selector+'"]').parent('li').addClass('active');

                                                    $(window).on("debouncedresize", function( event ) {
                                                        arrange();
                                                    });
                                                });

                                                function getNumColumns(){
                                                    var $folioWrapper = $('#portfolio-grid').data('cols');

                                                    if($folioWrapper == '2cols') {
                                                        var winWidth = $("#portfolio-grid").width(),
                                                            column = 2;
                                                        if (winWidth<380) column = 1;
                                                        return column;
                                                    }

                                                    else if ($folioWrapper == '3cols') {
                                                        var winWidth = $("#portfolio-grid").width(),
                                                            column = 3;
                                                        if (winWidth<380) column = 1;
                                                        else if(winWidth>=380 && winWidth<788) column = 2;
                                                        else if(winWidth>=788 && winWidth<1160) column = 3;
                                                        else if(winWidth>=1160) column = 3;
                                                        return column;
                                                    }

                                                    else if ($folioWrapper == '4cols') {
                                                        var winWidth = $("#portfolio-grid").width(),
                                                            column = 4;
                                                        if (winWidth<380) column = 1;
                                                        else if(winWidth>=380 && winWidth<788) column = 2;
                                                        else if(winWidth>=788 && winWidth<1160) column = 3;
                                                        else if(winWidth>=1160) column = 4;
                                                        return column;
                                                    }
                                                }

                                                function setColumnWidth(){
                                                    var columns = getNumColumns(),
                                                        containerWidth = $("#portfolio-grid").width(),
                                                        postWidth = containerWidth/columns;
                                                    postWidth = Math.floor(postWidth);

                                                    $(".portfolio_item").each(function(index){
                                                        $(this).css({"width":postWidth+"px"});
                                                    });
                                                }

                                                function arrange(){
                                                    setColumnWidth();
                                                    $container.isotope('reLayout');
                                                }

                                                // Filter projects
                                                $('.filter a').click(function(){
                                                    var $this = $(this).parent('li');
                                                    // don't proceed if already active
                                                    if ( $this.hasClass('active') ) {
                                                        return false;
                                                    }

                                                    var $optionSet = $this.parents('.filter');
                                                    // change active class
                                                    $optionSet.find('.active').removeClass('active');
                                                    $this.addClass('active');

                                                    var selector = $(this).attr('data-filter'),
                                                        filter_selector = '';

                                                    if ( selector != 'all' ) {
                                                        filter_selector = selector;
                                                    }
                                                    $container.isotope({ filter: filter_selector });
                                                    change_hash(selector);

                                                    var hiddenItems = 0,
                                                        showenItems = 0;
                                                    $(".portfolio_item").each(function(){
                                                        if ( $(this).hasClass('portfolio_hidden') ) {
                                                            hiddenItems++;
                                                        };
                                                    });

                                                    showenItems = items_count - hiddenItems;
                                                    if ( ($(this).attr('data-count')) > showenItems ) {
                                                        $(".pagination__posts").css({"display" : "block"});
                                                    } else {
                                                        $(".pagination__posts").css({"display" : "none"});
                                                    }
                                                    return false;
                                                });
                                                function change_hash(hash){
                                                    hash = hash.replace( /^.term/, 'category' );
                                                    if ( hash.length == 0 ) {
                                                        hash = 'all';
                                                    }
                                                    window.location.href = '#'+hash;

                                                    $('.pagination a').each(function(){
                                                        var item = $(this),
                                                            href = item.attr('href'),
                                                            end_slice = href.indexOf('#')==-1 ? href.length : href.indexOf('#') ;

                                                        href = href.slice(0, end_slice);
                                                        item.attr({'href':href+'#'+hash})
                                                    })
                                                }
                                            });
                                        </script>

                                        <?php $g = get_field('p_gallery');
                                        foreach($g as $p) { ?>
                                        <li class="portfolio_item  term_id_21  term_id_19 term_id_24 term_id_25">
                                            <div class="portfolio_item_holder">
                                                <figure class="thumbnail thumbnail__portfolio">
                                                    <a href="<?php echo $p['sizes']['large']; ?>" class="image-wrap" title="<?php echo the_title(); ?>" rel="prettyPhoto">
                                                        <img src="<?php echo $p['sizes']['large']; ?>" alt="<?php echo the_title(); ?>"/>
                                                        <span class="zoom-icon"></span> </a>
                                                </figure>
                                                <!--<div class="caption caption__portfolio">
                                                    <h3><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/modern-house/">Modern house</a></h3>
                                                    <p class="excerpt">
                                                        Did you know that not every site has professional copywriters churning out the copy? We are one of such kind&hellip; </p>
                                                    <p><a href="https://ld-wp.template-help.com/wordpress_58640/portfolio-view/modern-house/" class="btn btn-primary">Read more</a></p>
                                                </div>-->
                                            </div>
                                        </li>

                                    <?php } ?>


                                    </ul>




                                   <!-- <div class="post_meta meta_type_line">
                                        <div class="post_meta_unite clearfix">
                                            <div class="meta_group clearfix">
                                                <div class="post_category">
                                                    <i class="icon-bookmark"></i>
                                                    No category
                                                </div>
                                                <div class="post_date">
                                                    <i class="icon-calendar"></i>
                                                    <time datetime="2016-03-07T11:30:10">March 7, 2016</time>
                                                </div>
                                                <div class="post_author">
                                                    <i class="icon-user"></i>
                                                    <a href="https://ld-wp.template-help.com/wordpress_58640/author/admin/"
                                                       title="Posts by admin" rel="author">admin</a></div>
                                                <div class="post_comment">
                                                    <i class="icon-comments"></i>
                                                    <span class="comments-link">Comments are closed</span></div>
                                            </div>
                                            <div class="meta_group clearfix"></div>
                                            <div class="meta_group clearfix"></div>
                                        </div>
                                    </div>-->
                                </article>

                                <script>(function (d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) {
                                            return;
                                        }
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));
                                </script>

                                <script type="text/javascript">
                                    (function () {
                                        var po = document.createElement('script');
                                        po.type = 'text/javascript';
                                        po.async = true;
                                        po.src = '//apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0];
                                        s.parentNode.insertBefore(po, s);
                                    })();
                                </script>
                                <ul class="share-buttons unstyled clearfix">
                                    <li class="twitter">
                                        <a href="//twitter.com/share" class="twitter-share-button">Tweet this
                                            article</a>
                                        <script>!function (d, s, id) {
                                                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                                                if (!d.getElementById(id)) {
                                                    js = d.createElement(s);
                                                    js.id = id;
                                                    js.src = p + '://platform.twitter.com/widgets.js';
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }
                                            }(document, 'script', 'twitter-wjs');</script>
                                    </li>
                                    <li class="facebook">
                                        <div id="fb-root"></div>
                                        <div class="fb-like"
                                             data-href="https://ld-wp.template-help.com/wordpress_58640/events-view/we-create-3/"
                                             data-send="false" data-layout="button_count" data-width="100"
                                             data-show-faces="false" data-font="arial"></div>
                                    </li>
                                    <li class="google">
                                        <div class="g-plusone" data-size="medium"
                                             data-href="https://ld-wp.template-help.com/wordpress_58640/events-view/we-create-3/"></div>
                                    </li>
                                    <li class="pinterest">
                                        <a href="javascript:void((function(){var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"><img
                                                src='//assets.pinterest.com/images/PinExt.png' alt=""/></a>
                                    </li>
                                </ul>
                               <!-- <div class="post-author clearfix">
                                    <h3 class="post-author_h">Written by <a
                                            href="https://ld-wp.template-help.com/wordpress_58640/author/admin/"
                                            title="Posts by admin" rel="author">admin</a></h3>

                                    <p class="post-author_gravatar"><img alt=''
                                                                         src='http://2.gravatar.com/avatar/b263802e2004e058851acabb4111135e?s=80&#038;d=mm&#038;r=g'
                                                                         srcset='http://2.gravatar.com/avatar/b263802e2004e058851acabb4111135e?s=160&amp;d=mm&amp;r=g 2x'
                                                                         class='avatar avatar-80 photo' height='80'
                                                                         width='80'/></p>

                                    <div class="post-author_desc">
                                        I am a professional blogger interested in everything taking place in cyberspace.
                                        I am running this website and try my best to make it a better place to visit. I
                                        post only the articles that are related to the topic and thoroughly analyze all
                                        visitors’ comments to cater to their needs better.
                                        <div class="post-author_link">
                                            <p>View all posts by: <a
                                                    href="https://ld-wp.template-help.com/wordpress_58640/author/admin/"
                                                    title="Posts by admin" rel="author">admin</a></p>
                                        </div>
                                    </div>
                                </div>


                                <p class="nocomments">Comments are closed.</p>-->
                            </div>
                            <div class="span4 sidebar" id="sidebar" data-motopress-type="static-sidebar"
                                 data-motopress-sidebar-file="sidebar.php">
                                <div id="categories-2" class="widget widget_categories"><h3>Категории</h3>
                                    <ul>

                                        <?php
                                        $args = array(
                                            'numberposts'	=> -1,
                                            'post_type'		=> 'category',
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
                                            <?php $c_image = get_field('c_image');?>
                                            <li class="cat-item cat-item-7"><a
                                                    href="<?php echo get_permalink();?>"><?php  the_title(); ?></a>
                                            </li>

                                        <?php endwhile; else : endif; wp_reset_query(); ?>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<?php get_footer(); ?>