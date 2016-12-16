<?php
$this->GetCount();
?>
<form action="/ajax/" class="filter-form2" name="SearchForm" id="SearchForm">
    <input type="hidden" name="action" value="RentaSearch">
    <h3>Поиск предложений</h3>
    <!--
    <div class="row">
        <div class="form-box">
            <label>Дата заезда</label>
            <input type="text" class="date" value="18.10.2015">
        </div>
        <div class="form-box">
            <label>Дата отъезда</label>
            <input type="text" class="date" value="26.10.2015">
        </div>
    </div>
    -->
    
<!--
    <div class="row">
        <div class="form-box">
            <label>Взрослые</label>
            <select data-jcf='{"wrapNative": false}'>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
        <div class="form-box">
            <label>Дети</label>
            <select data-jcf='{"wrapNative": false}'>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
    </div>

    -->
    <div class="row slide-holder">
        <span  class="opener">Тип жилья</span>
        <div class="slide">
            <ul class="radio-list">
                <li>
                    <input type="radio" class="radio SearchFormButton" name="RentaType" id="id40" value="all">
                    <label for="id40">все <span><?php echo $this->RentaCount->Total; ?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="RentaType" id="id41" value="Дома">
                    <label for="id41">дома <span><?php echo  $this->RentaCount->RentaTypeHouse;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="RentaType" id="id42" value="Апартаменты">
                    <label for="id42">аппартаменты <span><?php echo $this->RentaCount->RentaTypeAppart;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="RentaType" id="id43" value="Вилла">
                    <label for="id43">виллы <span><?php echo $this->RentaCount->RentaTypeVilla;?></span></label>
                </li>
            </ul>
        </div>
    </div>

    <div class="row slide-holder">
        <span class="opener">Количество спален</span>
        <div class="slide">
            <ul class="radio-list">
                <li>
                    <input type="radio" class="radio SearchFormButton" name="rooms" id="id44" value="1">
                    <label for="id44">1 <span><?php echo $this->RentaCount->RomsCount1;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="rooms" id="id45" value="2">
                    <label for="id45">2 <span><?php echo $this->RentaCount->RomsCount2;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="rooms" id="id46" value="3">
                    <label for="id46">3 <span><?php echo $this->RentaCount->RomsCount3;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="rooms" id="id47" value="4">
                    <label for="id47">4 <span><?php echo $this->RentaCount->RomsCount4;?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="rooms" id="id48" value="more">
                    <label for="id48">5 и более <span><?php echo $this->RentaCount->RomsCountMore;?></span></label>
                </li>
            </ul>
        </div>
    </div>

    <div class="row slide-holder">
        <span  class="opener">Расстояние до пляжа</span>
        <div class="slide">
            <ul class="radio-list">
                <li>
                    <input type="radio" class="radio SearchFormButton" name="length" id="id58" value="50">
                    <label for="id58">50 <span><?php echo $this->BeachLength(50);?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="length" id="id59" value="100">
                    <label for="id59">100 <span><?php echo $this->BeachLength(100);?></span></label>
                </li>
                <li>
                    <input type="radio" class="radio SearchFormButton" name="length" id="id60" value="200">
                    <label for="id60">200 <span><?php echo $this->BeachLength(200);?></span></label>
                </li>

            </ul>
        </div>
    </div>

    <div class="row slide-holder">
        <span class="opener">Удобства</span>
        <div class="slide">
            <div class="form-box">
                <ul class="check-list">
                    <li>
                        <input type="checkbox" value="Домашние животные" class="checkbox SearchFormButton"
                               id="id49" name="D1">
                        <label for="id49">Домашние животные <span><?php echo $this->RentaCount->HomeAnimals; ?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="ТВ" class="checkbox SearchFormButton" id="id50" name="D2">
                        <label for="id50">ТВ <span><?php echo $this->RentaCount->TV;?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Стиральная машина" class="checkbox SearchFormButton" id="id51" name="D3">
                        <label for="id51">Стиральная машина <span><?php echo $this->RentaCount->Wash;?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Кондиционер" class="checkbox SearchFormButton" id="id52" name="D4">
                        <label for="id52">Кондиционер <span><?php echo $this->RentaCount->Conder;?></span></label>
                    </li>
                </ul>
            </div>
            <div class="form-box">
                <ul class="check-list">
                    <li>
                        <input type="checkbox" value="Бассейн" class="checkbox SearchFormButton" id="id53" name="D5">
                        <label for="id53">Бассейн <span><?php echo $this->RentaCount->Bassein;?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Детский бассейн" class="checkbox SearchFormButton" id="id54" name="D6">
                        <label for="id54">Детский бассейн <span><?php echo $this->RentaCount->ChilBassein;?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Закрытый бассейн" class="checkbox SearchFormButton" id="id55" name="D7">
                        <label for="id55">Закрытый бассейн <span><?php echo $this->RentaCount->ClosedBassein;?></span></label>
                    </li>
                    <li>
                        <input type="checkbox" value="Интернет" class="checkbox SearchFormButton" id="id56" name="D8">
                        <label for="id56">Интернет <span><?php echo $this->RentaCount->Internet;?></span></label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row slide-holder">
        <a href="#" class="opener">Местоположение</a>
        <div class="slide">
            <div class="form-box">
                <ul class="check-list">
                    <?php
                    foreach($this->Cities as $key=>$city)
                    {
                        ?>
                        <li>
                            <input name="City_<?php echo $city->id ?>" type="checkbox"
                                   class="checkbox SearchFormButton" id="id<?php echo $city->id ?>" value="<?php echo $city->url; ?>">
                            <label for="id<?php echo $city->id ?>"><?php echo $city->the_title; ?> <span><?php echo $this->GetCityCount($city->the_title);?></span></label>
                        </li>
                        <?php
                    }
                    ?>

                </ul>
            </div>
            <div class="form-box">
                <ul class="check-list">

                </ul>
            </div>
        </div>
    </div>
    <div class="row btns-holder">
        <span class="results-number"></span>
        <span  class="reset click" onclick="location.reload();"><span>Сбросить настройки</span></span>
    </div>
</form>