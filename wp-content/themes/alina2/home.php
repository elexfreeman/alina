<?php $settings = GetSettings(); ?>
<?php get_header(); ?>


    <!-- Slider -->
    <div id="header-carousel" class="carousel slide carousel-fade header-carousel" data-ride="carousel">
        <!-- Slider Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">

            <?php
            $active=true;
            $args = array(
                'numberposts'	=> -1,
                'post_type'		=> 'projects',
                'post_status' => 'publish',

                'meta_query'	=> array(
                    array(
                        'key'	 	=> 'p_show_in_main_slide',
                        'value' => 'Да', // matches exactly "red"
                        'compare' => 'LiKE'
                    )

                ),
            );
            $the_query = new WP_Query($args);
            if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                <?php $sl_img = get_field('p_main_image');?>

                <!-- Slider Item (image, link and description for your project in slider) -->
                <div class="item <?php if($active) {echo 'active';$active=false;} ?>">
                    <!-- Image -->
                    <img src="<?php echo $sl_img['sizes']['large']; ?>" alt="" style="width: 100%">
                    <!-- Description -->
                    <div class="carousel-caption header-carousel-caption">
                        <h1><?php  the_field( "p_short_description" ); ?></h1>
                        <!-- Project Link -->
                        <a href="project-inner.html" class="btn white-btn">Подробнее</a>
                    </div>
                </div>

            <?php endwhile; else : endif; wp_reset_query(); ?>


        </div>
    </div>
    <!-- End Slider -->

    <!-- Site Wrapper -->
    <div class="site-wrapper">

        <!-- Who We Are -->
        <div class="container text-center">
            <!-- Section General Title -->
            <div class="general-title">
                <h2>Кто мы?</h2>
                <div class="title-devider"></div>
            </div>
            <div class="row">
                <!-- Section Description -->
                <div class="col-md-10 col-md-offset-1">
                    <p>House Design Studio, we design for the hospitality and retail sectors creating exceptional hotels, bars, restaurants and private clubs worldwide. We also work with a select number of private clients creating their dream homes. Our Studio provides a variety of services including interior architecture, interior design, furniture and lighting design.</p>
                </div>
            </div><!-- /row -->
        </div><!-- /container -->
        <!-- End Who We Are -->

        <!-- Projects -->
        <div class="container-fluid projects padding-top">
            <div class="row">

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
                    <!-- Project Item (image, link and description for your project) -->
                    <div class="col-sm-6 col-md-4">
                        <div class="project-inner">
                            <a href="project-inner.html">
                                <!-- Image -->
                                <img src="<?php echo  $c_image['sizes']['large']; ?>" alt="<?php  the_title(); ?>" >
                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">
                                        <p><i class="fa fa-plus fa-lg"></i></p>
                                        <h3><?php  the_title(); ?></h3>
                                        <p><small><?php  the_field( "c_short_description" ); ?></small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                <?php endwhile; else : endif; wp_reset_query(); ?>



            </div><!-- /row -->
        </div><!-- /container -->

        <!-- See All Our Work Button -->
        <div class="all-projects text-center">
            <a href="projects.html" class="btn orange-btn">
                Смотреть все проекты
            </a>
        </div>

        <!-- End Projects -->

        <!-- Our Services -->
        <div class="container padding-top text-center">
            <!-- Section General Title -->
            <div class="general-title">
                <h2>Наши услуги</h2>
                <div class="title-devider"></div>
            </div>
            <!-- Section Description -->
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
            <div class="row padding-top">

                <!-- Services Item (icon, title and description for your service) -->
                <div class="col-sm-4 col-md-4">
                    <!-- Icon -->
                    <a href="services.html">
                        <i class="fa fa-home fa-3x"></i>
                    </a>
                    <!-- Title -->
                    <div class="service-title">
                        <h3>Interior Design</h3>
                    </div>
                    <!-- Description -->
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                </div>

                <!-- Services Item (icon, title and description for your service) -->
                <div class="col-sm-4 col-md-4">
                    <!-- Icon -->
                    <a href="services.html">
                        <i class="fa fa-building fa-3x"></i>
                    </a>
                    <!-- Title -->
                    <div class="service-title">
                        <h3>Architecture</h3>
                    </div>
                    <!-- Description -->
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                </div>

                <!-- Services Item (icon, title and description for your service) -->
                <div class="col-sm-4 col-md-4">
                    <!-- Icon -->
                    <a href="services.html">
                        <i class="fa fa-file-text-o fa-3x"></i>
                    </a>
                    <!-- Title -->
                    <div class="service-title">
                        <h3>Design Consultations</h3>
                    </div>
                    <!-- Description -->
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci.</p>
                </div>

            </div><!-- /row -->

            <!-- View All Services Button -->
            <div class="padding-top padding-bottom">
                <a href="services.html" class="btn black-btn">
                    View all Services
                </a>
            </div>

        </div><!-- /container -->
        <!-- End Our Services -->

        <!-- From Blog -->
        <section class="bg-color padding-top text-center">
            <div class="container">
                <!-- Section General Title -->
                <div class="general-title">
                    <h2>From Blog</h2>
                    <div class="title-devider"></div>
                </div>
                <div class="row">

                    <!-- Blog Item (image, title, description, link and date for your blog post) -->
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.html">
                                <img src="assets/img/blog/image1.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                                <div class="blog-inner-title">
                                    <a href="blog-inner.html">
                                        <h3>Curabitur auctor vulputate quam facilisis eu dolor</h3>
                                    </a>
                                </div>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i> <a href="blog-inner.html">April 01, 2014</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-inner.html">03 Comments</a></span>
                                    <span><i class="fa fa-eye"></i> 84 Views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Item (image, title, description, link and date for your blog post) -->
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.html">
                                <img src="assets/img/blog/image2.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                                <div class="blog-inner-title">
                                    <a href="blog-inner.html">
                                        <h3>Lorem ipsum dolor sit amet, magna adipiscing elit</h3>
                                    </a>
                                </div>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i> <a href="blog-inner.html">April 01, 2014</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-inner.html">03 Comments</a></span>
                                    <span><i class="fa fa-eye"></i> 84 Views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Blog Item (image, title, description, link and date for your blog post) -->
                    <div class="col-sm-4 col-md-4">
                        <div class="thumbnail blog-post">
                            <!-- Image -->
                            <a href="blog-inner.html">
                                <img src="assets/img/blog/image3.jpg" alt="Specifie an alternate text for an image">
                            </a>
                            <!-- Title and Description -->
                            <div class="caption">
                                <div class="blog-inner-title">
                                    <a href="blog-inner.html">
                                        <h3>Duis in tortor tortor magna euismod id rutrum eros</h3>
                                    </a>
                                </div>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <div class="blog-meta">
                                    <span><i class="fa fa-calendar"></i> <a href="blog-inner.html">April 01, 2014</a></span>
                                    <span><i class="fa fa-comment"></i> <a href="blog-inner.html">03 Comments</a></span>
                                    <span><i class="fa fa-eye"></i> 84 Views</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->

            <!-- All Posts Button -->
            <div class="text-center padding-top padding-bottom">
                <a href="blog.html" class="btn black-btn">See All Posts</a>
            </div>
        </section>
        <!-- End From blog -->

    </div><!-- /site-wrapper -->
    <!-- E

<?php get_footer(); ?>