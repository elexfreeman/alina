<?php
/**
 * Created by PhpStorm.
 * User: folle
 * Date: 29.01.2016
 * Time: 13:54
 * список избранного
 */
$p_id=0;
foreach($this->GetList() as $favorit)
{
    if($favorit!=null) {
        $p_id++;

        ?>
        <li>
            <a href="#apartments-popup<?php echo $p_id; ?>" data-fancybox-group="apartments-gallery"
               class="apartments-popup-link">
                <div class="heading">
                    <span class="type"><?php echo $favorit->rent_type; ?>,</span>
                    <span class="star chosen">*</span>
                    <span class="location"><?php echo $favorit->the_title; ?></span>
                </div>
                <!-- <span class="seller">Локация <?php echo $favoritrent_company; ?></span>-->

                <div class="info-holder">
                    <div class="image"><img src="<?php echo $favorit->r_img['sizes']['large']; ?>" alt="#" width="120"
                                            height="80"/>
                    </div>
                    <div class="text-holder">
                        <span>Площадь <?php echo $favorit->square; ?>м&sup2;</span>
                        <span><?php echo $favorit->rooms; ?> комнат</span>

                        <div class="price">
                            <span>цена, &euro; в месяц</span>
                            <span class="sum"><?php echo $favorit->r_price; ?>.</span>
                        </div>
                    </div>
                </div>
                <?php
                $r_hot = $favorit->r_hot;
                if ($r_hot[0] == 'Горячее предложние') {
                    ?>
                    <span class="marker"></span>
                    <?php
                }
                ?>

            </a>
        </li>
        <?php
    }
}
$p_id=0;
foreach ($this->GetList() as $r) {
    if ($r != null) {


        if ($p_id == count($rent) - 1)//последний
        {
            $prev = $rent[0];
            $next = $rent[count($rent) - 2];
        } elseif ($p_id == 0)//если первый
        {
            $prev = $rent[count($rent) - 1];
            $next = $rent[1];
        } else {
            $prev = $rent[$p_id - 1];
            $next = $rent[$p_id + 1];
        }

        $mainimg = $r->r_img;
        $r_params = $r->r_params;
        $p_id++; ?>
        <div class="photo-gallery-popup apartments-popup" id="apartments-popup<?php echo $p_id; ?>" title="Вилла">
            <span class="prev-text"><?php echo $prev->the_title; ?><br/><?php echo $prev->r_price; ?>.</span>
            <span class="next-text"><?php echo $next->the_title; ?><br/><?php echo $next->r_price; ?>.</span>

            <div class="title-wrap">
                <h2><?php echo $r->rent_type; ?>, <span><?php echo $r->the_title; ?></span>

                    <div class="star"></div>
                </h2>
                <span class="rent">Локация <?php echo $r->rent_company; ?></span>
            </div>
            <div class="wrap">
                <div class="parameters">
                    <h3>Параметры</h3>

                    <ul class="parameters-list">
                        <li <?php if (in_array('Домашние животные', $r_params)) echo ' class="staffed"'; ?>>Домашние
                            животные
                        </li>
                        <li <?php if (in_array('ТВ', $r_params)) echo ' class="staffed"'; ?>>ТВ</li>
                        <li <?php if (in_array('Стиральная машина', $r_params)) echo ' class="staffed"'; ?>>Стиральная
                            машина
                        </li>
                        <li<?php if (in_array('Посудомоечная', $r_params)) echo ' class="staffed"'; ?>>Посудомоечная
                        </li>
                        <li <?php if (in_array('Кондиционер', $r_params)) echo ' class="staffed"'; ?>>Кондиционер</li>
                        <li <?php if (in_array('Интернет', $r_params)) echo ' class="staffed"'; ?>>Интернет</li>
                        <li <?php if (in_array('Балкон/Терраса', $r_params)) echo ' class="staffed"'; ?>>
                            Балкон/Терраса
                        </li>
                        <li<?php if (in_array('Барбекю', $r_params)) echo ' class="staffed"'; ?>>Барбекю</li>
                        <li<?php if (in_array('Бассейн', $r_params)) echo ' class="staffed"'; ?>>Бассейн</li>
                        <li<?php if (in_array('Детский бассейн', $r_params)) echo ' class="staffed"'; ?>>Детский
                            бассейн
                        </li>
                        <li<?php if (in_array('Закрытый бассейн', $r_params)) echo ' class="staffed"'; ?>Закрытый
                            бассейн
                        </li>
                        <li<?php if (in_array('Камин', $r_params)) echo 'class="staffed"'; ?>>Камин</li>
                        <li<?php if (in_array('Сауна', $r_params)) echo 'class="staffed"'; ?>>Сауна</li>
                        <li<?php if (in_array('Джакузи', $r_params)) echo 'class="staffed"'; ?>>Джакузи</li>
                        <li<?php if (in_array('Парковочное место', $r_params)) echo 'class="staffed"'; ?>>Парковочное
                            место
                        </li>
                        <li<?php if (in_array('Подходит', $r_params)) echo 'class="staffed"'; ?>>Подходит</li>
                    </ul>
                </div>
                <div class="about-info">
                    <h3>О вилле</h3>
                    <ul class="numbers-list">
                        <li>
                            <span class="title">стоимость</span>
                            <span class="price"><?php echo $r->r_price; ?>.</span>
                            <span class="value">рублей в месяц</span>
                        </li>
                        <li>
                            <span class="title">площадь м<sup>2</sup></span>
                            <span class="number"><?php echo $r->square; ?></span>
                        </li>
                        <li>
                            <span class="title">комнаты</span>
                            <span class="number"><?php echo $r->rooms; ?></span>
                        </li>
                    </ul>
                    <h4>Фотографии</h4>
                <pre>
                    <?php
                    $r_photos = $r->r_photos;

                    ?>
                </pre>
                    <ul class="photo-list">
                        <?php
                        foreach ($r_photos as $img) {
                            ?>
                            <li><img src="<?php echo $img['sizes']['medium']; ?>" height="105" width="206" alt=""></li>
                            <?php
                        }
                        ?>

                    </ul>
                    <h4>Описание</h4>
                    <?php echo $r->r_descripton; ?><?php if(get_field('other')): ?>

	<ul>

	<?php while(has_sub_field('other')): ?>

		<li>sub_field_1 = <?php the_sub_field('pole'); ?>, sub_field_2 = <?php the_sub_field('znachenie'); ?>, etc</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
                </div>
            </div>
        </div>
        <?php
    }
}

