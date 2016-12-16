<?php get_header(); ?>

    <div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                    <h3 class="modal-title-site text-center"> Login to TSHOP </h3>
                </div>
                <div class="modal-body">
                    <div class="form-group login-username">
                        <div>
                            <input name="log" id="login-user" class="form-control input" size="20"
                                   placeholder="Enter Username" type="text">
                        </div>
                    </div>
                    <div class="form-group login-password">
                        <div>
                            <input name="Password" id="login-password" class="form-control input" size="20"
                                   placeholder="Password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox login-remember">
                                <label>
                                    <input name="rememberme" value="forever" checked="checked" type="checkbox">
                                    Remember Me </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="LOGIN" type="submit">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="text-center"> Not here before? <a data-toggle="modal" data-dismiss="modal"
                                                                href="#ModalSignup"> Sign Up. </a> <br>
                        <a href="forgot-password.html"> Lost your password? </a></p>
                </div>
            </div>

        </div>

    </div>


    <div class="modal signUpContent fade" id="ModalSignup" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times; </button>
                    <h3 class="modal-title-site text-center"> REGISTER </h3>
                </div>
                <div class="modal-body">
                    <div class="control-group"><a class="fb_button btn  btn-block btn-lg " href="#"> SIGNUP WITH
                            FACEBOOK </a></div>
                    <h5 style="padding:10px 0 10px 0;" class="text-center"> OR </h5>

                    <div class="form-group reg-username">
                        <div>
                            <input name="login" class="form-control input" size="20" placeholder="Enter Username"
                                   type="text">
                        </div>
                    </div>
                    <div class="form-group reg-email">
                        <div>
                            <input name="reg" class="form-control input" size="20" placeholder="Enter Email" type="text">
                        </div>
                    </div>
                    <div class="form-group reg-password">
                        <div>
                            <input name="password" class="form-control input" size="20" placeholder="Password"
                                   type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <div class="checkbox login-remember">
                                <label>
                                    <input name="rememberme" id="rememberme" value="forever" checked="checked"
                                           type="checkbox">
                                    Remember Me </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <input name="submit" class="btn  btn-block btn-lg btn-primary" value="REGISTER" type="submit">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="text-center"> Already member? <a data-toggle="modal" data-dismiss="modal" href="#ModalLogin">
                            Sign in </a></p>
                </div>
            </div>

        </div>

    </div>

<?php include "navbar.php"; ?>

    <div class="container main-container headerOffset globalPaddingBottom">

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="home-intro">
                    <h2>Discover a Better Shopping <span>Experience</span> - clothes, fashion & more </h2>
                </div>
                <hr>
            </div>
        </div>
        <div style="clear:both"></div>
        <div class="row">
            <div class="col-sm-10 show-case-wrapper center-block relative">
                <div id="productShowCase" class="owl-carousel owl-theme">

                    <?php
                    $args = array(
                        'numberposts'	=> -1,
                        'post_type'		=> 'catalog',
                        'post_status' => 'publish',

                        'meta_query'	=> array(
                             //'relation'		=> 'AND',
                         array(
                                'key'	 	=> 'in_main_page_slider',
                                  'value' => 'Да', // matches exactly "red"
                                  'compare' => 'LiKE'
                            )
                            /*    array(
                                    'key'	  	=> 'featured',
                                    'value'	  	=> '1',
                                    'compare' 	=> '=',
                                ),*/
                        ),
                    );
                    $the_query = new WP_Query($args);
                    if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php $sl_img = get_field('sl_img');?>

                            <div class="product-slide">
                                <div class="col-sm-5 product-slide-left">
                                    <a class="product-slide-img">
                                        <img alt="img" src="<?php echo $sl_img['sizes']['large']; ?>" class="img-responsive">
                                    </a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="product-slide-inner ">
                                        <h1 class="product-title"> <?php  the_field( "sl_title" ); ?></h1>
                                        <h3 class="product-code">Product Code : DEN1098</h3>

                                        <div class="product-price"><span class="price-sales">От: <?php  the_field( "st_price" ); ?> рублей</span> <span
                                                class="price-standard"><?php  the_field( "in_main_page_slider" ); ?></span></div>
                                        <div class="details-description">
                                            <?php  the_field( "sl_descr" ); ?>
                                        </div>
                                        <a title="Добавить в корзину" class="btn btn-stroke-dark"> <i
                                                class="glyphicon glyphicon-shopping-cart"></i> В КОРЗИНУ</a>
                                    </div>
                                </div>
                            </div>



                    <?php endwhile; else : endif; wp_reset_query(); ?>


                </div>

                <div style="clear:both;"></div>
                <a id="ps-next" class="ps-nav"> <i class="fa fa-angle-right"></i> </a> <a id="ps-prev" class="ps-nav"> <i
                        class="fa fa-angle-left"></i> </a></div>

        </div>
        <div class="row featuredPostContainer ">
            <div class="featured-category"></div>
            <div class="col-lg-12">
                <h3 class="boxes-title-1"><span>НОВАЯ ПРОДУКЦИЯ</span></h3>
            </div>
            <div style="clear:both;"></div>
            <div id="productslider" class="owl-carousel owl-theme">
<?php
$args = array(
    'numberposts'	=> -1,
    'post_type'		=> 'catalog',
    'post_status' => 'publish',

    'meta_query'	=> array(
        //'relation'		=> 'AND',
        array(
            'key'	 	=> 'new_collection',
            'value' => 'Да', // matches exactly "red"
            'compare' => 'LiKE'
        )
        /*    array(
                'key'	  	=> 'featured',
                'value'	  	=> '1',
                'compare' 	=> '=',
            ),*/
    ),
);
$the_query = new WP_Query($args);
if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php $main_img = get_field('new_product_img');?>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip"
                                            data-original-title="В закладки" data-placement="left"> <i
                                class="glyphicon glyphicon-heart"></i>
                        </a>

                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                   data-target="#productSetailsModalAjax">Посмотреть </a>
                            </div>
                            <a href="product-details.html">
                                <img src="<?php echo $main_img['sizes']['medium']; ?>" alt="<?php the_title(); ?>" class="img-responsive">
                            </a>

                            <div class="promotion">
                                <span class="new-product"> NEW</span>
                                <span class="discount">15% OFF</span>
                            </div>
                        </div>

                        <div class="description">
                            <h4>
                                <a href="product-details.html"><?php the_title(); ?> </a>
                            </h4>

                            <p><?php  the_field( "short_description" ); ?></p>
                            <span class="size"><?php  the_field( "format_plate" ); ?></span></div>
                        <div class="price"><span>От: <?php  the_field( "st_price" ); ?> рублей</span></div>
                        <div class="action-control">
                            <a class="btn btn-primary">
                                <span class="add2cart">
                                    <i class="glyphicon glyphicon-shopping-cart"> </i> В корзину
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
<?php endwhile; else : endif; wp_reset_query(); ?>

            </div>

        </div>

    </div>

    <div class="w100 sectionCategory">
        <div class="container">
            <div class="sectionCategoryIntro text-center">
                <h1>ПОПУЛЯРНЫЕ КОЛЛЕКЦИИ</h1>

                <p> litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc
                    nobis videntur parum clari, fiant sollemnes in futurum.</p>
            </div>
            <div class="row subCategoryList clearfix">
<?php
$args = array(
    'numberposts'	=> -1,
    'post_type'		=> 'catalog',
    'post_status' => 'publish',

    'meta_query'	=> array(
        //'relation'		=> 'AND',
        array(
            'key'	 	=> 'pop_collection',
            'value' => 'Да', // matches exactly "red"
            'compare' => 'LiKE'
        )
        /*    array(
                'key'	  	=> 'featured',
                'value'	  	=> '1',
                'compare' 	=> '=',
            ),*/
    ),
);
$the_query = new WP_Query($args);
if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <?php $main_img = get_field('main_img');?>

                <div class="col-md-2 col-sm-3 col-xs-4  col-xs-mini-6  text-center ">
                    <div class="thumbnail equalheight">
                        <a class="subCategoryThumb" href="sub-category.html"><img
                                src="<?php echo $main_img['sizes']['medium']; ?>" class="img-rounded " alt="img"> </a> <a
                            class="subCategoryTitle"><span> <?php the_title(); ?> </span>
                        </a>
                    </div>
                </div>

<?php endwhile; else : endif; wp_reset_query(); ?>

            </div>

        </div>

    </div>

    <div class="container main-container">

        <div class="morePost row featuredPostContainer style2 globalPaddingTop ">
            <div class="col-lg-12">
                <h3 class="boxes-title-1"><span>ПОПУЛЯРНЫЕ ПЛИТКИ</span></h3>
            </div>
            <div class="container">
                <div class="row xsResponse">
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/30.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="new-product"> NEW</span> <span
                                        class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/31.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/34.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="new-product"> NEW</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/35.jpg" alt="img"
                                                                    class="img-responsive"></a></div>
                            <div class="description">
                                <h4><a href="product-details.html">parum claram</a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/13.jpg" alt="img"
                                                                    class="img-responsive"></a></div>
                            <div class="description">
                                <h4><a href="product-details.html">duis dolore </a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/21.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="new-product"> NEW</span> <span
                                        class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">aliquam erat volutpat</a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/14.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product"><a class="add-fav tooltipHere" data-toggle="tooltip"
                                                data-original-title="Add to Wishlist" data-placement="left"> <i
                                    class="glyphicon glyphicon-heart"></i> </a>

                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html"
                                       data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/17.jpg" alt="img"
                                                                    class="img-responsive"></a>

                                <div class="promotion"><span class="new-product"> NEW</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">demonstraverunt lectores </a></h4>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span></div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                            class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="load-more-block text-center"><a class="btn btn-thin" href="#"> <i
                                class="fa fa-plus-sign">+</i> load more products</a></div>
                </div>
            </div>

        </div>

        <hr class="no-margin-top">
        <div class="width100 section-block  text-center">
            <div class="row featuredImgLook2">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="inner" style="height: 414px;"><a href="category.html" class="img-link"><img alt="img"
                                                                                                            class="img-responsive"
                                                                                                            src="images/featured/1.jpg"></a>

                        <h3><span>Latest Arrivals</span> demonstraverunt lectores </h3>

                        <p>We are very pleased to announce the availability of many new emerging designers</p>
                        <a class="btn btn-link" href="blog-details.html"> See More <i class="fa fa-long-arrow-right"></i>
                        </a></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="inner" style="height: 414px;"><a href="category.html" class="img-link"><img alt="img"
                                                                                                            class="img-responsive"
                                                                                                            src="images/featured/2.jpg"></a>

                        <h3><span> Summer 2014 </span> demonstraverunt lectores </h3>

                        <p>We are very pleased to announce the availability of many new emerging designers</p>
                        <a class="btn btn-link" href="blog-details.html"> See More <i class="fa fa-long-arrow-right"></i>
                        </a></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="inner" style="height: 414px;"><a href="category.html" class="img-link"><img alt="img"
                                                                                                            class="img-responsive"
                                                                                                            src="images/featured/3.jpg"></a>

                        <h3><span> Latest Offers </span> demonstraverunt lectores </h3>

                        <p>We are very pleased to announce the availability of many new emerging designers</p>
                        <a class="btn btn-link" href="blog-details.html"> See More <i class="fa fa-long-arrow-right"></i>
                        </a></div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="inner" style="height: 414px;"><a href="category.html" class="img-link"><img alt="img"
                                                                                                            class="img-responsive"
                                                                                                            src="images/featured/4.jpg"></a>

                        <h3><span> New Look </span> demonstraverunt lectores </h3>

                        <p>We are very pleased to announce the availability of many new emerging designers </p>
                        <a class="btn btn-link" href="blog-details.html"> See More <i class="fa fa-long-arrow-right"></i>
                        </a></div>
                </div>
            </div>

        </div>

        <div class="width100 section-block">
            <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i
                        class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i
                        class="fa fa-angle-left"></i> </a></h3>

            <div class="row">
                <div class="col-lg-12">
                    <ul class="no-margin brand-carousel owl-carousel owl-theme">
                        <li><a><img src="images/brand/1.gif" alt="img"></a></li>
                        <li><img src="images/brand/2.png" alt="img"></li>
                        <li><img src="images/brand/3.png" alt="img"></li>
                        <li><img src="images/brand/4.png" alt="img"></li>
                        <li><img src="images/brand/5.png" alt="img"></li>
                        <li><img src="images/brand/6.png" alt="img"></li>
                        <li><img src="images/brand/7.png" alt="img"></li>
                        <li><img src="images/brand/8.png" alt="img"></li>
                        <li><img src="images/brand/1.gif" alt="img"></li>
                        <li><img src="images/brand/2.png" alt="img"></li>
                        <li><img src="images/brand/3.png" alt="img"></li>
                        <li><img src="images/brand/4.png" alt="img"></li>
                        <li><img src="images/brand/5.png" alt="img"></li>
                        <li><img src="images/brand/6.png" alt="img"></li>
                        <li><img src="images/brand/7.png" alt="img"></li>
                        <li><img src="images/brand/8.png" alt="img"></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="parallax-section parallax-image-2">
        <div class="w100 parallax-section-overley">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="parallax-content clearfix">
                            <h1 class="xlarge"> Trusted Seller 500+ </h1>
                            <h5 class="parallaxSubtitle"> Lorem ipsum dolor sit amet consectetuer </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
         aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>

        </div>

    </div>

<?php get_footer(); ?>