<footer class="motopress-wrapper footer">
    <script>
        var geocoder;
        var map;

        var isDraggable = $(document).width() > 768 ? true : false;

        function initialize() {
            geocoder = new google.maps.Geocoder();

            var mapOptions = {
                zoom: 8,
                disableDefaultUI: false,
                scrollwheel: false,
                panControl: true,
                scaleControl: true,
                draggable: isDraggable,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                styles: [ { "featureType": "water", "elementType": "geometry", "stylers": [ { "visibility": "on" }, { "color": "#73b0c9" } ] },{ "featureType": "landscape.natural", "stylers": [ { "color": "#e3d5bf" } ] },{ "featureType": "road", "stylers": [ { "color": "#f8f0d9" } ] },{ } ]
            }

            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            codeAddress();
        }

        function codeAddress() {
            var address = "Bakersfield, CA, USA";
            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var iconBase = 'https://ld-wp.template-help.com/wordpress_58640/wp-content/themes/theme58640/images/';
                    var marker = new google.maps.Marker({
                        map: map,
                        icon: iconBase + 'map-icon.png',
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <div id="map-canvas" class=""></div>
    <div class="container">
        <div class="row">
            <div class="span12" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="58303f8a18ae4">
                <div class="row footer-widgets">
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
                    </div>
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
                    </div>
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
                    </div>
                    <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-4">
                    </div>
                </div>
                <div class="row copyright">
                    <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
                        <div id="footer-text" class="footer-text">
                            <a href="https://ld-wp.template-help.com/wordpress_58640/" title="" class="site-name">Interna</a> &copy; 2016 <em>•</em> <span><a href="https://ld-wp.template-help.com/wordpress_58640/privacy-policy/" title="Privacy Policy">Privacy Policy</a></span>

                        </div> </div>
                    <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
                    </div>
                </div> </div>
        </div>
    </div>
</footer>

</div>
<div id="back-top-wrapper" class="visible-desktop">
    <p id="back-top">
        <a href="#top"><span></span></a> </p>
</div>
<script type='text/javascript' src='/js/comment-reply.min.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/jquery.flexslider-min.js?ver=2.2.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var items_custom = [[0,1],[480,2],[768,3],[980,4],[1170,5]];
    /* ]]> */
</script>
<script type='text/javascript' src='/js/cherry-plugin.js?ver=1.2.8.1'></script>
<script type='text/javascript' src='/js/cherry.lazy-load.js?ver=1.0'></script>
<script type='text/javascript' src='/js/device.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='/js/jquery.mousewheel.min.js?ver=3.0.6'></script>
<script type='text/javascript' src='/js/jquery.simplr.smoothscroll.min.js?ver=1.0'></script>
<script type='text/javascript' src='/js/cherry.parallax.js?ver=1.0.0'></script>
<script type='text/javascript' src='/js/imagesloaded.pkgd.min.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/jquery.mobile.events.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/imageTransformer.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/smoothing-scroll.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/fullwidth-stretcher.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/jquery.destaque.custom.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/jquery.form.min.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpcf7 = {"loaderUrl":"http:\/\/ld-wp.template-help.com\/wordpress_58640\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
    /* ]]> */
</script>
<script type='text/javascript' src='/js/scripts.js?ver=4.4.2'></script>
<script type='text/javascript' src='/js/superfish.js?ver=1.5.3'></script>
<script type='text/javascript' src='/js/jquery.mobilemenu.js?ver=1.0'></script>
<script type='text/javascript' src='/js/jquery.magnific-popup.min.js?ver=0.9.3'></script>
<script type='text/javascript' src='/js/jplayer.playlist.min.js?ver=2.3.0'></script>
<script type='text/javascript' src='/js/jquery.jplayer.min.js?ver=2.6.0'></script>
<script type='text/javascript' src='/js/tmstickup.js?ver=1.0.0'></script>
<script type='text/javascript' src='/js/device.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='/js/jquery.zaccordion.min.js?ver=2.1.0'></script>
<script type='text/javascript' src='/js/camera.min.js?ver=1.3.4'></script>
<script type='text/javascript' src='/js/jquery.debouncedresize.js?ver=1.0'></script>
<script type='text/javascript' src='/js/jquery.ba-resize.min.js?ver=1.1'></script>
<script type='text/javascript' src='/js/jquery.isotope.js?ver=1.5.25'></script>
<script type='text/javascript' src='/js/wp-embed.min.js?ver=4.4.5'></script>
<script type='text/javascript' src='/js/owl.carousel.min.js?ver=1.31'></script>
<script type="text/javascript">
    deleteCookie('cf-cookie-banner');
</script>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>
</body> <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>