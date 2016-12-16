<header class="header" style="height: Auto;">
    <div class="wrapper">
        <strong class="logo">
            <a href="/">Ancodes<span class="sticker"><img src="/images/img01.png" alt="#" width="88" height="89" /></span></a>
        </strong>
        <div class="top-line">
            <div class="holder">
                <form action="#" class="language-form">
                    <fieldset>
                        <select data-jcf='{"wrapNative": false}'>
                            <option data-image="/images/ico-flag.png">Русский</option>
                            <option data-image="/images/ico-flag.png">Английский</option>
                        </select>
                    </fieldset>
                </form>
                <!-- <a href="/sitemap/" class="site-map"><span>Карта сайта</span></a> -->
                <?php tplSignIn(); ?>
                <span id="f_link">
                <?php $ff = new Favorites();$ff->UpdateMenu(); ?>
                </span>
            </div>
        </div>
        <?php tplNavLine(); ?>
        <div class="intro">
            <h1><?php the_title();?></h1>
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a></li>
                <li><?php the_title();?></li>
            </ul>
        </div>
        <div class="reservation">
            <div class="client">
                <h3>Онлайн бронирование</h3>
                <ul class="reservation-list">
                    <li class="item2"><a href="#"><span>Билеты</span></a></li>
                    <li class="item3"><a href="#"><span>Отели</span></a></li>
                    <li class="item4"><a href="#"><span>Трансферы</span></a></li>
                </ul>
            </div>
            <?php tplAgency(); ?>
        </div>
    </div>
</header>