<?php $settings = GetSettings(); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <title>HOUSE - Interior Design Responsive Template</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon-->
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">

    <!-- Css Global Compulsory -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <!-- Css Implementing Plugins -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <!-- Css Theme -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <!-- Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset;=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/fonts/montserrat/style.css">

    <!-- Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53016924-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!-- Analytics -->

</head>

<body>

<!-- Header (navigation menu, and logo) -->
<nav class="navbar navbar-default header-navbar" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo Image -->
                        <img src="<?php echo $settings['main_logo']['sizes']['large']; ?>" alt="Specifie an alternate text for an image">
                    </a>
                </div>
            </div>

            <div class="col-md-8">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Главная</a></li>
                        <li><a href="about.html">О нас</a></li>
                        <li><a href="services.html">Услуги</a></li>
                        <li><a href="services.html">Проекты</a></li>
                        <li><a href="contact.html">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- /row -->
    </div><!-- /container -->
</nav>
<!-- End Header -->