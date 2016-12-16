<?php get_header(); ?>
<?php $top_img= get_field('top_img');?>
<?php include "navbar.php"; ?>

    <section class="category-wrapper">
        <section id="category-intro" class="section-intro scrollme parallaxOffset">
            <div class="cat-intro animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0"
                 data-translatey="-220" data-rotatez="0" data-crop="true">
                <div class="cat-intro-text">
                    <div class="display-table hw100">
                        <div class="display-table-cell hw100">
                            <div class="box-text-cell-inner white animateme" data-when="exit" data-from="0" data-to="1"
                                 data-opacity="0" data-translatey="-260" data-rotatez="0" data-crop="true">
                                <h1><?php echo  get_field('slogan_center');?></h1>

                                <p><?php echo  get_field('slogan_descr');?></p>

                                <p><a style="color:#fff" href="#main-container-wrapper" class="scrollto"><i
                                            class="fa fa-2x fa-angle-down"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="<?php echo $top_img['url']; ?>" alt="img" class=" cat-intro-banner"></div>
        </section>
        <section class="main-container-wrapper clearfix" id="main-container-wrapper">
            <div class="container main-container">

                <div class="row">
                    <div class="catTopBar clearfix">
                        <div class="catTopBarInner clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <div class="f-left hidden-xs">
                                    <h4 class="filterToggle"><i class="fa fa-bars"></i> <strong>Filter</strong> <span> &nbsp; </span>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-12">
                                <div class="f-right">
                                    <div class="w100  clearfix center-xs-inner">
                                        <p class="pull-left shrtByP center-xs"><span>Sort By :</span> <a
                                                class="active">NEW</a> | <a>POPULAR</a>| <a>PIRCE</a></p>

                                        <div class="pull-right hidden-xs">
                                            <p class="pull-right change-view-flat"><span>View By :</span> <a href="#"
                                                                                                             title="Grid"
                                                                                                             class="grid-view">
                                                    <i class="fa fa-th-large"></i> </a> | <a href="#" title="List"
                                                                                             class="list-view "><i
                                                        class="fa fa-th-list"></i></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="catColumnWrapper">
                        <div class="col-lg-3 col-md-3 col-sm-12 filterColumn">
                            <div class="panel-group" id="accordion">

                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseCategory" class="">
                                                <span class="pull-right hasMinus"> <i class="i-minus"></i></span> Category </a>
                                        </h4>
                                    </div>
                                    <div id="collapseCategory" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul class="nav nav-list">
                                                <li><a> Watches </a></li>
                                                <li><a href="#"> Accessories </a></li>
                                                <li><a href="#"> Clothing </a></li>
                                                <li><a href="#"> Jackets </a></li>
                                                <li><a href="#"> Sweaters </a></li>
                                                <li><a href="#"> Shirts </a></li>
                                                <li><a href="#"> Offers Zone </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a class="" data-toggle="collapse" href="#collapsePrice">
                                                Price <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapsePrice" class="panel-collapse collapse in">
                                        <div class="panel-body priceFilterBody ">
                                            <ul class="list-unstyled">
                                                <li>

                                                    <label>
                                                        <input type="radio" name="agree" value="0"/>
                                                        100$ - 500$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="1"/>
                                                        500$ - 1000$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="2"/>
                                                        1000$ - 1500$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="3"/>
                                                        1500$ - 2000$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="4"/>
                                                        2000$ - 2500$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="5"/>
                                                        2500$ - 3000$</label>
                                                </li>
                                                <li><label>
                                                        <input type="radio" name="agree" value="6" disabled checked/>
                                                        Don't know</label></li>
                                            </ul>
                                            <hr>
                                            <p>Enter a Price range </p>

                                            <form class="form-inline " role="form">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputEmail2"
                                                           placeholder="2000 $">
                                                </div>
                                                <div class="form-group sp"> -</div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleInputPassword2"
                                                           placeholder="3000 $">
                                                </div>
                                                <button type="submit" class="btn btn-default pull-right">check</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseBrand" class="">
                                                Brand <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapseBrand" class="panel-collapse collapse in">
                                        <div class="panel-body ">
                                            <ul class="list-unstyled long-list">
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="0"/>
                                                            Armani </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="1"/>
                                                            Gucci </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="2"/>
                                                            Louis Vuitton </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Chanel </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Roberto Cavalli </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Valentino </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Ralph Lauren </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Miu Miu </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            McQueen </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            adidas </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Nike </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Jimmy Choo </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Bottega Veneta </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Donna Karan </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Oscar de la Renta </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Tods </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Burberry </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Michael Kors </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Mulberry </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseColor" class="">
                                                Color <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapseColor" class="panel-collapse collapse in">
                                        <div class="panel-body  color-filter">
                                            <ul class="list-unstyled long-list">
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="0"/>
                                                            <small style="background-color:#333333"></small>
                                                            Black <span>(123)</span> </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="1"/>
                                                            <small style="background-color:#1664c4"></small>
                                                            Blue (434) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="2"/>
                                                            <small style="background-color:#c00707"></small>
                                                            Red (338) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#6fcc14"></small>
                                                            Green (253) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#943f00"></small>
                                                            Brown (240) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#ff1cae"></small>
                                                            Pink (212) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#f5f5dc"></small>
                                                            Beige (176) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#adadad"></small>
                                                            Grey (154) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#5d00dc"></small>
                                                            Purple (132) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#f1f40e"></small>
                                                            Yellow (104) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#ffc600"></small>
                                                            Orange (77) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#9b1d00"></small>
                                                            Maroon (76) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#0a43a3"></small>
                                                            Navy Blue (68) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#ede4b2"></small>
                                                            Tan (67) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#ecf1ef"></small>
                                                            Silver (49) </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            <small style="background-color:#f3f1e7"></small>
                                                            Off White (44) </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-flat">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-toggle="collapse" href="#collapseThree" class="">
                                                Discount <span class="pull-right hasMinus"> <i class="i-minus"></i></span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Non-Discounted items </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-element">
                                                        <label>
                                                            <input type="checkbox" name="tour" value="3"/>
                                                            Discounted items </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-12 categoryColumn">

                            <div class="row  categoryProduct xsResponse clearfix">

                                <?php
                                $args = array('posts_per_page' => 80, 'post_type' => 'catalog', 'post_status' => 'publish');
                                $the_query = new WP_Query( $args );
                                $p_id=1;
                                if( $the_query->have_posts() ): while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <?php $mainimg = get_field('main_img');?>
                                    <div class="item col-sm-4 col-lg-4 col-md-4 col-xs-6">
                                        <div class="product">
                                            <a class="add-fav tooltipHere" data-toggle="tooltip"
                                               data-original-title="Add to Wishlist" data-placement="left">
                                                <i class="glyphicon glyphicon-heart"></i>
                                            </a>

                                            <div class="image">
                                                <div class="quickview">
                                                    <a data-toggle="modal" class="btn btn-xs btn-quickview"
                                                       href="ajax/product.html" data-target="#productSetailsModalAjax">Quick
                                                        View </a>
                                                </div>
                                                <a href="product-details.html">
                                                    <img src="<?php echo $mainimg['sizes']['large']; ?>" height="380" width="285" alt="img" class="img-responsive">
                                                </a>

                                                <div class="promotion"><span class="new-product"> НОВАЯ</span> <span
                                                        class="discount">15% Скидка</span></div>
                                            </div>
                                            <div class="description">
                                                <h4><a href="product-details.html"><?php the_title(); ?></a></h4>

                                                <div class="grid-description">
                                                    <p><?php  the_field( "short_description" ); ?></p>
                                                </div>
                                                <div class="list-description">
                                                    <p><?php  the_field( "description" ); ?></p>
                                                </div>
                                                <span class="size"><?php  the_field( "format_plate" ); ?></span></div>
                                            <div class="price"><span>$25</span></div>
                                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i
                                                            class="glyphicon glyphicon-shopping-cart"> </i> КУПИТЬ </span> </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; else : endif; wp_reset_query(); ?>



                            </div>

                            <div class="w100 categoryFooter">
                                <div class="pagination pull-left no-margin-top">
                                    <ul class="pagination no-margin-top">
                                        <li><a href="#">«</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right pull-right col-sm-4 col-xs-12 no-padding text-right text-left-xs">
                                    <p>Showing 1–450 of 12 results</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>
    </section>


    <div class="modal fade" id="productSetailsModalAjax" tabindex="-1" role="dialog"
         aria-labelledby="productSetailsModalAjaxLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>

        </div>

    </div>




    <div class="modal signUpContent fade" id="ModalLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog">
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

    <script type="text/javascript">
        $(document).ready(function () {
            var isMobile = function () {
                //console.log("Navigator: " + navigator.userAgent);
                return /(iphone|ipod|ipad|android|blackberry|windows ce|palm|symbian)/i.test(navigator.userAgent);
            };

            if (isMobile()) {
                // For  mobile , ipad, tab
                $('.animateme').removeClass('animateme');
                $('.category-wrapper').addClass('ismobile');
                $('.main-container-wrapper').addClass('ismobile');
                $('#category-intro').addClass('ismobile');

            } else {
            }
            $('.shrtByP a').click(function () {
                $('.shrtByP a').removeClass('active');
                $(this).addClass('active');
            });


            $('.filterToggle').click(function () {
                $(this).toggleClass('filter-is-off');
                $('.filterToggle span').toggleClass('is-off');
                $('.catColumnWrapper').toggleClass('filter-is-off');
                $('.catColumnWrapper .col-sm-4').toggleClass('col-sm-3 col-lg-3 col-md-3');

                // equal height reload function

                var $elements = $('.categoryProduct > .item');
                var columns = $elements.detectGridColumns();
                $elements.equalHeightGrid(columns);


                setTimeout(function () {
                        //  reload function after 0.5 second
                        $('.categoryProduct > .item').responsiveEqualHeightGrid();
                    }
                    , 500);


            });


            $('[data-toggle="collapse"]').click(function (e) {

                $('#accordion').on('show.bs.collapse', function (e) {
                    $(e.target).prev().addClass('active').find('span').removeClass('hasPlus').addClass('hasMinus');
                })

                $('#accordion').on('hide.bs.collapse', function (e) {
                    $(e.target).prev().addClass('active').find('span').addClass('hasPlus').removeClass('hasMinus');

                })
            });

        }); // end


        $(window).bind('resize load', function () {
            if ($(this).width() < 767) {
                $('#accordion .panel-collapse').collapse('hide');

                $('#accordion .panel-heading ').find('span').removeClass('hasMinus').addClass('hasPlus');

            } else {
                $('#accordion .panel-collapse').removeClass('out').addClass('in').css('height', 'auto');
                $('#accordion .panel-heading ').find('span').removeClass('hasPlus').addClass('hasMinus');


            }
        });

    </script>
<?php get_footer(); ?>