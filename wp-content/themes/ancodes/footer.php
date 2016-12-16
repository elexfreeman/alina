

<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-3 col-sm-4 col-xs-6">
                    <h3> Support </h3>
                    <ul>
                        <li class="supportLi">
                            <p> Lorem ipsum dolor sit amet, consectetur </p>
                            <h4><a class="inline" href="callto:+12025550151"> <strong> <i class="fa fa-phone"> </i>
                                        +1-202-555-0151 </strong> </a></h4>
                            <h4><a class="inline" href="/cdn-cgi/l/email-protection#c7afa2abb787bea8b2b5b0a2a5e9a4a8aa">
                                    <i class="fa fa-envelope-o"> </i>
                                    <span class="__cf_email__" data-cfemail="81e9e4edf1c1f8eef4f3f6e4e3afe2eeec">[email&#160;protected]</span>
                                    <script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */
                                        !function (t, e, r, n, c, a, p) {
                                            try {
                                                t = document.currentScript || function () {
                                                        for (t = document.getElementsByTagName('script'), e = t.length; e--;)if (t[e].getAttribute('data-cfhash'))return t[e]
                                                    }();
                                                if (t && (c = t.previousSibling)) {
                                                    p = t.parentNode;
                                                    if (a = c.getAttribute('data-cfemail')) {
                                                        for (e = '', r = '0x' + a.substr(0, 2) | 0, n = 2; a.length - n; n += 2)e += '%' + ('0' + ('0x' + a.substr(n, 2) ^ r).toString(16)).slice(-2);
                                                        p.replaceChild(document.createTextNode(decodeURIComponent(e)), c)
                                                    }
                                                    p.removeChild(t)
                                                }
                                            } catch (u) {
                                            }
                                        }()
                                        /* ]]> */</script>
                                </a></h4>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Shop </h3>
                    <ul>
                        <li><a href="#">
                                Men's
                            </a></li>
                        <li><a href="#">
                                Women's</a></li>
                        <li><a href="#">
                                Kids'
                            </a></li>
                        <li><a href="#">Shoes
                            </a></li>
                        <li><a href="#">
                                Gift Cards
                            </a></li>
                    </ul>
                </div>
                <div style="clear:both" class="hide visible-xs"></div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Information </h3>
                    <ul class="list-unstyled footer-nav">
                        <li><a href="#">Questions?
                            </a></li>
                        <li><a href="#"> Order Status
                            </a></li>
                        <li><a href="#"> Sizing Charts
                            </a></li>
                        <li><a href="#"> Return Policy </a></li>
                        <li><a href="#">
                                Contact Us
                            </a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> My Account </h3>
                    <ul>
                        <li><a href="account.html"> My Account </a></li>
                        <li><a href="my-address.html"> My Address </a></li>
                        <li><a href="wishlist.html"> Wish List </a></li>
                        <li><a href="order-list.html"> Order list </a></li>
                        <li><a href="order-status.html"> Order Status </a></li>
                    </ul>
                </div>
                <div style="clear:both" class="hide visible-xs"></div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Stay in touch </h3>
                    <ul>
                        <li>
                            <div class="input-append newsLatterBox text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Subscribe <i
                                        class="fa fa-long-arrow-right"> </i></button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                        <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                        <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                        <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                    </ul>
                </div>
            </div>

        </div>

    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left"> &copy; TSHOP 2014. All right reserved. </p>

            <div class="pull-right paymentMethodImg"><img height="30" class="pull-right"
                                                          src="images/site/payment/master_card.png" alt="img"> <img
                    height="30" class="pull-right" src="images/site/payment/visa_card.png" alt="img"><img height="30"
                                                                                                          class="pull-right"
                                                                                                          src="images/site/payment/paypal.png"
                                                                                                          alt="img">
                <img height="30" class="pull-right" src="images/site/payment/american_express_card.png" alt="img"> <img
                    height="30" class="pull-right" src="images/site/payment/discover_network_card.png" alt="img">
                <img height="30" class="pull-right" src="images/site/payment/google_wallet.png" alt="img">
            </div>
        </div>
    </div>

</footer>


<script type="text/javascript" src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/idangerous.swiper-2.1.min.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        pagination: '.box-pagination',
        keyboardControl: true,
        paginationClickable: true,
        slidesPerView: 'auto',
        autoResize: true,
        resizeReInit: true,
    })

    $('.prevControl').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.nextControl').on('click', function (e) {
        e.preventDefault()
        mySwiper.swipeNext()
    })
</script>

<script src="/js/jquery.cycle2.min.js"></script>

<script src="/js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="/js/jquery.parallax-1.1.js"></script>

<script type="text/javascript" src="/js/jquery.mousewheel.min.js"></script>

<script type="text/javascript" src="/js/jquery.mCustomScrollbar.js"></script>

<script type="text/javascript" src="/js/icheck.min.js"></script>

<script src="/js/grids.js"></script>

<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.scrollme.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>

<script src="/js/bootstrap.touchspin.js"></script>

<script src="/js/home.js"></script>

<script src="/js/script.js"></script>
<script src="/js/footable.js" type="text/javascript"></script>
<script src="/js/footable.sortable.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.footable').footable();
    });
</script>

<script src="/js/hideMaxListItem-min.js"></script>
<script>
    $(document).ready(function () {
        $('ul.long-list').hideMaxListItems({
            'max': 6,
            'speed': 500,
            'moreText': 'VIEW MORE ([COUNT])',
            'lessText': 'VIEW LESS',
            'moreHTML': '<p class="maxlist-more"><a href="#">MORE OF THEM</a></p>'
        });
    });


</script>


<script type="text/javascript">/* <![CDATA[ */
    (function (d, s, a, i, j, r, l, m, t) {
        try {
            l = d.getElementsByTagName('a');
            t = d.createElement('textarea');
            for (i = 0; l.length - i; i++) {
                try {
                    a = l[i].href;
                    s = a.indexOf('/cdn-cgi/l/email-protection');
                    m = a.length;
                    if (a && s > -1 && m > 28) {
                        j = 28 + s;
                        s = '';
                        if (j < m) {
                            r = '0x' + a.substr(j, 2) | 0;
                            for (j += 2; j < m && a.charAt(j) != 'X'; j += 2)s += '%' + ('0' + ('0x' + a.substr(j, 2) ^ r).toString(16)).slice(-2);
                            j++;
                            s = decodeURIComponent(s) + a.substr(j, m - j)
                        }
                        t.innerHTML = s.replace(/</g, '&lt;').replace(/>/g, '&gt;');
                        l[i].href = 'mailto:' + t.value
                    }
                } catch (e) {
                }
            }
        } catch (e) {
        }
    })(document);
    /* ]]> */</script>
</body>
</html>
