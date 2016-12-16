<?php
/*Собирайем результаты поиска в массив*/
$this->Search();

?>

    <div class="title">
        <h2>Результаты поиска</h2>
    </div>

    <ul class="apartments-list">
        <?php
        $p_id=0;
        $p_count=0;
        $rent = Array();
        foreach ($this->SearchResult as $r )
        {
            $p_count++;$p_id++;
            $rent[]=$r;
            ?>
            <li>
                <div class="heading">
                    <span class="type"><!--<?php echo $r->rent_type; ?> --><?php echo $r->the_title; ?></span>
                    <?php
                    $ff = new Favorites();
                    if($ff->IsIn($r->id))
                    {
                        ?>
                        <span class="star chosen f_<?php echo $r->id; ?>" onclick="Favorites.Add(<?php echo $r->id; ?>)">*</span>
                        <?php
                    }
                    else
                    {
                        ?>
                        <span class="star f_<?php echo $r->id; ?>" onclick="Favorites.Add(<?php echo $r->id; ?>)">*</span>
                        <?php
                    }
                    ?>
                    <span class="location"><?php echo $r->the_title; ?></span>
                </div>
                <!--<span class="seller">Локация </span> -->
                <a href="#apartments-popup<?php echo $p_id;?>" data-fancybox-group="apartments-gallery" class="apartments-popup-link">
                    <div class="info-holder">
                        <div class="image">
                            <img src="<?php echo $r->r_img['sizes']['large']; ?>" alt="#" width="120" height="80">
                        </div>
                        <div class="text-holder">
                            <span>Площадь <?php echo $r->square; ?>м²</span>
                            <span><?php
                                $r->rooms=$r->rooms+0;
                                if($r->rooms==1) echo  $r->rooms. ' комната';
                                if($r->rooms==2) echo  $r->rooms. ' комнаты';
                                if($r->rooms==3) echo  $r->rooms. ' комнаты';
                                if($r->rooms==4) echo  $r->rooms. ' комнты';
                                if($r->rooms>4) echo  $r->rooms. ' комнат';

                                ?></span>
                            <div class="price">
                                <span>цена, € в месяц</span>
                                <span class="sum"><?php echo $r->r_price; ?>.</span>
                            </div>
                        </div>
                    </div>
                </a>
                <span class="marker"></span>
            </li>
            <?php

        }

        ?>
    </ul>
<?php /*Выводдим попапы */ $this->tplRentPop($rent); ?>

<div id="count" style="display: none;"><?php echo count($this->SearchResult); ?></div>

