<?php
/* include "config/db.php" ;
   include "config/config.php" ;
   session_start();
   if(isset($_SESSION["user_id"])){
   	$id = $_SESSION["user_id"];
   	$query = $db->query("SELECT * FROM ibuild_users WHERE id=$id");
   
   	if($query->num_rows>0){
   		$user = $query->fetch_object();   */

?>
<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="description" content="Kluchevie slova, do 200 simvolov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/parallax.js"></script>
    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body>
<div class="wrapper">
    <header class="aboutUs_header">
        <div class="top_header">
            <div class="header_right">
                <div class="logo">
                    <a href="AboutUs.php" class="logo_link">iBuild</a>
                </div>
                <div class="search_field">
                    <div class="field_in">
                        <input type="text" name="search_text" placeholder="Поиск..." style="padding-left: 10px;">
                    </div>
                </div>
                <div class="basket">
                    <a href="AboutUs.php" class="logo_link basket_link">Главная страница</a>
                </div>
            </div>
            <div class="header_left">
                <div class="icons" style="display: flex;">
                    <a href="profile.php" class="logo_icon">
                        <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 460.8 460.8" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641    S296.261,0,230.432,0z"  data-original="#000000" style="" class="" />
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784    c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555    c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943    c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167    c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02    c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898    C436.8,341.682,437.322,338.024,435.755,334.89z"  data-original="#000000" style="" class="" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </a>
                    <a href="Saved.php" class="logo_icon">
                    <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z"  data-original="#ff7e92" style=""/><path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" class=""/><g ><path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"  data-original="#ff5f7a" style="" class=""/><path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z"  data-original="#ff5f7a" style="" class=""/></g></g></g></svg>

                    </a>
                    <a href="Log.php" class="logo_icon">
                        <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0     c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333     h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251     l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z"  data-original="#000000" style="" class="" />
                                            <path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437     l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128     C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512     c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715     C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992     c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907     l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491     v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z"  data-original="#000000" style="" class="" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="auth_button_about">
                    <a href="Log.php" class="btn_SignIn"><?php //echo $user->full_name; 
                                                            ?></a>
                </div>
            </div>
        </div>
        <div class="bottom_header">
            <div class="bottom_header_in">
                <div class="dropdown">
                    <a href="index.php" class="categories">Фундамент и бетон</a>
                    <div class="dropdown_content">
                        <a href="index.php#block1">Расчет фундаментной плиты</a>
                        <a href="index.php#block2">Расчет ленточного фундамента</a>
                        <a href="index.php#block3">Расчет ленточного фундамента(2 секции)</a>
                        <a href="index.php#block4">Расчет ленточного фундамента(3 секции)</a>
                        <a href="index.php#block5">Расчет ленточного фундамента(4 секции)</a>
                        <a href="index.php#block6">Расчет состава бетона</a>
                        <a href="index.php#block7">Количество материала для бетонных колец</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index2.php" class="categories">Стены</a>
                    <div class="dropdown_content">
                        <a href="index2.php#block8">Расчет кирпичных стен</a>
                        <a href="index2.php#block9">Расчет стен из блоков</a>
                        <!-- <a href="#">Расчет стен из блоков по своим размерам</a> -->
                        <a href="index2.php#block10">Объем блоков/кирпича в м3</a>
                        <!-- <a href="#">Объем блоков/кирпича в ярде3</a> -->
                        <!-- <a href="#">Параметры стеновых блоков</a> -->
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index5.php" class="categories">Отделка</a>
                    <div class="dropdown_content">
                        <a href="index5.php#block16">Количество утеплителя для стен и фундаментов</a>
                        <a href="index5.php#block17">Расчет настила из досок/перекрытий</a>
                        <a href="index5.php#block18">Расчет количества плитки</a>
                        <a href="index5.php#block19">Расчет напольного покрытия</a>
                        <a href="index5.php#block20">Расчет количества вагонки на поверхность</a>
                        <a href="index5.php#block21">Расход грунтовки</a>
                        <a href="index5.php#block22">Расход краски</a>
                        <a href="index5.php#block23">Расход штукатурки</a>
                        <a href="index5.php#block24">Расход шпаклевки</a>
                        <a href="index5.php#block25">Расход стяжки</a>
                        <a href="index5.php#block26">Расход ровнителя/наливных полов</a>
                        <a href="index5.php#block27">Расход плиточного клея</a>
                        <a href="index5.php#block28">Расход обоев</a>
                        <a href="index5.php#block29">Плинтус</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index3.php" class="categories">Пиломатериалы</a>
                    <div class="dropdown_content">
                        <a href="index3.php#block11">Объем пиломатериалов по количеству</a>
                        <a href="index3.php#block12">Количество пиломатериалов по объему</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index6.php" class="categories">Кровли</a>
                    <div class="dropdown_content">
                        <a href="index6.php#block30">Односкатная</a>
                        <a href="index6.php#block31">Двускатная</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index7.php" class="categories">Арматура</a>
                    <div class="dropdown_content">
                        <a href="index7.php#block32">Вес арматуры по количеству</a>
                        <a href="index7.php#block33">Количество арматуры по весу</a>
                        <a href="index7.php#block34">Арматура ГОСТ 5781-82</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="index4.php" class="categories">Земляные работы</a>
                    <div class="dropdown_content">
                        <a href="index4.php#block13">Расчет подушки из сыпучих материалов</a>
                        <a href="index4.php#block14">Объем земленых работ(вертикальные стены)</a>
                        <a href="index4.php#block15">Объем земленых работ(уклон)</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="landing_blog">
        <div class="landing_contaner">
            <div class="landing_text">
                <p>Строй самостоятельно</p>
                <p class="middle_landing_text">Выбирай лучшее! Пользуйся лучшим! Создай лучшее!</p>
                <p class="small_landing_text">Пользователь вводит данные,<br>калькулятор для расчета вычислить материал,<br>а вот IBOT подскажет .</p>
            </div>
            <div class="transition_img">
                <img class="layer_wrap_transition" src="image/house2.png" width="800px" height="550px">
            </div>
        </div>
    </section>


    <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
                <div class="slider__item">
                    <div style="height: 650px; background: #fff;">
                        <div class="container_block_landing">
                            <div class="landing_main">
                                <div class="landing_large">IBUILD – <b>Cтроительный калькулятор онлайн №1</b>
                                </div>
                                <div class="landing_small">
                                    <h6>Мы направляем все возможные усилия, чтобы конструкции получались прочными,
                                        надежными и безопасными!</h6>
                                </div>
                                <div class="landing_large_img">

                                    <div class="img_figure"><img src="image/index-5-533x362.jpg" alt="" width="533" height="362">
                                    </div>

                                </div>
                            </div>

                            <div class="landing_main_left">
                                <div class="landing_container">
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"> <img src="image/icon/building.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Архитектура</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                Архитектура постоянно развивается на основе изменений в нашей культуре, обществе и
                                                окружающей среде.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"><img src="image/icon/blueprint.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Конструкции</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                Просматривая наши недавние впечатляющие проекты, мы решили узнать мнение архитекторов.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="landing_block_left">
                                        <div class="icon_block">
                                            <div class="icon"> <img src="image/icon/crane.png" alt="" width="50px" height="50px">
                                                <div class="box_icon"></div>
                                            </div>
                                            <h6 class="icon_text">Матералы</h6>
                                        </div>
                                        <div class="landing_content">
                                            <p>
                                                В процессе строительства, эксплуатации и ремонта зданий и сооружений строительные
                                                изделия и конструкции, из которых они возводятся, подвергаются различным
                                                физико-механическим, физическим и технологическим воздействиям.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__item">
                    <div style="height: 650px; background: #f5f5f5;">
                        <div class="our_team_block">
                            <h3 class="our_team_title">Наша Команда</h3>
                            <h6 class="our_team_title">Люди, стоящие за нашим <b>успехом!</b></h6>
                            <div class="container_block_landing_about">
                                <div class="card_item_about">
                                    <div class="card">
                                        <img src="image/Ais.jpg" width="290px" height="280px">
                                        <h5 class="team-classic-name"><a href="#">Olpan Aisana</a></h5>
                                    </div>
                                    <div class="card_item">
                                        <div class="team_status">Front-end and Designer</div>
                                        <div class="heading_name"> Aisana</div>
                                    </div>
                                </div>
                                <div class="card_item_about">
                                    <div class="card">
                                        <img src="image/Elya.jpeg" width="290px" height="280px" alt="">
                                        <h5 class="team-classic-name"><a href="#">Uisynbaiyev Yelaman</a></h5>
                                    </div>
                                    <div class="card_item">
                                        <div class="team_status">Back-end developer</div>
                                        <div class="heading_name"> Yelaman</div>
                                    </div>
                                </div>
                                <div class="card_item_about">
                                    <div class="card">
                                        <img src="image/Aiko.jpg" width="290px" height="280px" alt="">
                                        <h5 class="team-classic-name"><a href="#">Auganbekova Ayaulym</a></h5>
                                    </div>
                                    <div class="card_item">
                                        <div class="team_status">Mobile developer</div>
                                        <div class="heading_name"> Ayaulym</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider__item">
                    <div style="height: 650px; background: #fff;">
                        <div class="container_block_landing">

                            <div class="landing_main_left2">
                                <div class="landing_container">

                                    <div class="layer_wrap">
                                        <div id="scene" class="layer_wrap_img" data-hover-only="true" data-relative-input="true">
                                            <img src="image/index_7.png" data-depth="0.4" alt="" width="700" height="531">
                                        </div>
                                    </div>

                                </div>
                                <div class="layer_wrap_img2" data-depth="0.4">
                                    <img src="image/imgbin_building.png" alt="" width="350" height="350">
                                </div>
                            </div>

                            <div class="landing_main">
                                <div class="landing_large">IBOT – <b>Cтроительный помощник №1</b>
                                </div>
                                <div class="landing_small">
                                    <h6>Давайте работать вместе!</h6>
                                </div>
                                <div class="landing_large_form">

                                    <form class="landing_form_input">
                                        <div class="form_wrap">
                                            <!-- <label class="input_label" >Имя</label> -->
                                            <input class="form_control" type="text" name="name" name placeholder="Имя"><span class="form_validation"></span>
                                        </div>  
                                        <div class="form_wrap">
                                            <!-- <label class="input_label" >Номер-телефона</label> -->
                                            <input class="form_control" type="text" name="phone" name placeholder="Номер-телефона"><span class="form_validation"></span>
                                        </div>
                                        <div class="form_wrap">
                                            <button class="button_primary" type="submit">Отправить
                                            </button>
                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <a class="slider__control slider__control_prev" href="#" role="button"></a>
        <a class="slider__control slider__control_next" href="#" role="button"></a>
    </div>

    <footer class="content_blog_footer_about">
        <div class="content_footer_container">
            <div class="content_blog">
                <div class="top_footer">
                    <div class="introduction">
                        <p class="footer_big_title">iBuild</p>
                        <p class="introduction_words"> Сервис расчета и покупки строительных материалов</p>
                    </div>
                    <div class="navigation">
                        <p class="footer_title">Навигация</p>
                        <a href="">О системе</a><br>
                        <a href="">Контакты</a><br>
                        <a href="">Бренды</a><br>
                        <a href="">Карта сайта</a><br>
                        <a href="">Статьи и советы</a>
                    </div>
                    <div class="contacts">
                        <p class="footer_title">Контакты</p>
                        <a href="">8 707 520 16 99</a><br>
                        <a href="">yelaman.ui@gmail.com</a><br>
                    </div>
                    <div class="subscribtion">
                        <p class="footer_title">Подписка на рассылку</p>
                        <input class="mailing_input" type="text" name="" placeholder="Email">
                        <input class="mailing_input" type="text" name="" placeholder="Ваше имя">
                        <br>
                        <button class="mailing_button">Подписаться</button>
                    </div>
                </div>
                <div class="bottom_footer">
                    <p>© 2020 - iBuild. Все права защищены</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="javascript/parallaxByID.js"></script>
    <script>
        'use strict';
        var slideShow = (function() {
            return function(selector, config) {
                var
                    _slider = document.querySelector(selector), // основный элемент блока
                    _sliderContainer = _slider.querySelector('.slider__items'), // контейнер для .slider-item
                    _sliderItems = _slider.querySelectorAll('.slider__item'), // коллекция .slider-item
                    _sliderControls = _slider.querySelectorAll('.slider__control'), // элементы управления
                    _currentPosition = 0, // позиция левого активного элемента
                    _transformValue = 0, // значение транфсофрмации .slider_wrapper
                    _transformStep = 100, // величина шага (для трансформации)
                    _itemsArray = [], // массив элементов
                    _timerId,
                    _indicatorItems,
                    _indicatorIndex = 0,
                    _indicatorIndexMax = _sliderItems.length - 1,
                    _stepTouch = 50,
                    _config = {
                        isAutoplay: false, // автоматическая смена слайдов
                        directionAutoplay: 'next', // направление смены слайдов
                        delayAutoplay: 5000, // интервал между автоматической сменой слайдов
                        isPauseOnHover: true // устанавливать ли паузу при поднесении курсора к слайдеру
                    };

                // настройка конфигурации слайдера в зависимости от полученных ключей
                for (var key in config) {
                    if (key in _config) {
                        _config[key] = config[key];
                    }
                }

                // наполнение массива _itemsArray
                for (var i = 0, length = _sliderItems.length; i < length; i++) {
                    _itemsArray.push({
                        item: _sliderItems[i],
                        position: i,
                        transform: 0
                    });
                }

                // переменная position содержит методы с помощью которой можно получить минимальный и максимальный индекс элемента, а также соответствующему этому индексу позицию
                var position = {
                    getItemIndex: function(mode) {
                        var index = 0;
                        for (var i = 0, length = _itemsArray.length; i < length; i++) {
                            if ((_itemsArray[i].position < _itemsArray[index].position && mode === 'min') || (_itemsArray[i].position > _itemsArray[index].position && mode === 'max')) {
                                index = i;
                            }
                        }
                        return index;
                    },
                    getItemPosition: function(mode) {
                        return _itemsArray[position.getItemIndex(mode)].position;
                    }
                };

                // функция, выполняющая смену слайда в указанном направлении
                var _move = function(direction) {
                    var nextItem, currentIndicator = _indicatorIndex;;
                    if (direction === 'next') {
                        _currentPosition++;
                        if (_currentPosition > position.getItemPosition('max')) {
                            nextItem = position.getItemIndex('min');
                            _itemsArray[nextItem].position = position.getItemPosition('max') + 1;
                            _itemsArray[nextItem].transform += _itemsArray.length * 100;
                            _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                        }
                        _transformValue -= _transformStep;
                        _indicatorIndex = _indicatorIndex + 1;
                        if (_indicatorIndex > _indicatorIndexMax) {
                            _indicatorIndex = 0;
                        }
                    } else {
                        _currentPosition--;
                        if (_currentPosition < position.getItemPosition('min')) {
                            nextItem = position.getItemIndex('max');
                            _itemsArray[nextItem].position = position.getItemPosition('min') - 1;
                            _itemsArray[nextItem].transform -= _itemsArray.length * 100;
                            _itemsArray[nextItem].item.style.transform = 'translateX(' + _itemsArray[nextItem].transform + '%)';
                        }
                        _transformValue += _transformStep;
                        _indicatorIndex = _indicatorIndex - 1;
                        if (_indicatorIndex < 0) {
                            _indicatorIndex = _indicatorIndexMax;
                        }
                    }
                    _sliderContainer.style.transform = 'translateX(' + _transformValue + '%)';
                    _indicatorItems[currentIndicator].classList.remove('active');
                    _indicatorItems[_indicatorIndex].classList.add('active');
                };

                // функция, осуществляющая переход к слайду по его порядковому номеру
                var _moveTo = function(index) {
                    var i = 0,
                        direction = (index > _indicatorIndex) ? 'next' : 'prev';
                    while (index !== _indicatorIndex && i <= _indicatorIndexMax) {
                        _move(direction);
                        i++;
                    }
                };

                // функция для запуска автоматической смены слайдов через промежутки времени
                var _startAutoplay = function() {
                    if (!_config.isAutoplay) {
                        return;
                    }
                    _stopAutoplay();
                    _timerId = setInterval(function() {
                        _move(_config.directionAutoplay);
                    }, _config.delayAutoplay);
                };

                // функция, отключающая автоматическую смену слайдов
                var _stopAutoplay = function() {
                    clearInterval(_timerId);
                };

                // функция, добавляющая индикаторы к слайдеру
                var _addIndicators = function() {
                    var indicatorsContainer = document.createElement('ol');
                    indicatorsContainer.classList.add('slider__indicators');
                    for (var i = 0, length = _sliderItems.length; i < length; i++) {
                        var sliderIndicatorsItem = document.createElement('li');
                        if (i === 0) {
                            sliderIndicatorsItem.classList.add('active');
                        }
                        sliderIndicatorsItem.setAttribute("data-slide-to", i);
                        indicatorsContainer.appendChild(sliderIndicatorsItem);
                    }
                    _slider.appendChild(indicatorsContainer);
                    _indicatorItems = _slider.querySelectorAll('.slider__indicators > li')
                };

                var _isTouchDevice = function() {
                    return !!('ontouchstart' in window || navigator.maxTouchPoints);
                };

                // функция, осуществляющая установку обработчиков для событий 
                var _setUpListeners = function() {
                    var _startX = 0;
                    if (_isTouchDevice()) {
                        _slider.addEventListener('touchstart', function(e) {
                            _startX = e.changedTouches[0].clientX;
                            _startAutoplay();
                        });
                        _slider.addEventListener('touchend', function(e) {
                            var
                                _endX = e.changedTouches[0].clientX,
                                _deltaX = _endX - _startX;
                            if (_deltaX > _stepTouch) {
                                _move('prev');
                            } else if (_deltaX < -_stepTouch) {
                                _move('next');
                            }
                            _startAutoplay();
                        });
                    } else {
                        for (var i = 0, length = _sliderControls.length; i < length; i++) {
                            _sliderControls[i].classList.add('slider__control_show');
                        }
                    }
                    _slider.addEventListener('click', function(e) {
                        if (e.target.classList.contains('slider__control')) {
                            e.preventDefault();
                            _move(e.target.classList.contains('slider__control_next') ? 'next' : 'prev');
                            _startAutoplay();
                        } else if (e.target.getAttribute('data-slide-to')) {
                            e.preventDefault();
                            _moveTo(parseInt(e.target.getAttribute('data-slide-to')));
                            _startAutoplay();
                        }
                    });
                    document.addEventListener('visibilitychange', function() {
                        if (document.visibilityState === "hidden") {
                            _stopAutoplay();
                        } else {
                            _startAutoplay();
                        }
                    }, false);
                    if (_config.isPauseOnHover && _config.isAutoplay) {
                        _slider.addEventListener('mouseenter', function() {
                            _stopAutoplay();
                        });
                        _slider.addEventListener('mouseleave', function() {
                            _startAutoplay();
                        });
                    }
                };

                // добавляем индикаторы к слайдеру
                _addIndicators();
                // установливаем обработчики для событий
                _setUpListeners();
                // запускаем автоматическую смену слайдов, если установлен соответствующий ключ
                _startAutoplay();

                return {
                    // метод слайдера для перехода к следующему слайду
                    next: function() {
                        _move('next');
                    },
                    // метод слайдера для перехода к предыдущему слайду          
                    left: function() {
                        _move('prev');
                    },
                    // метод отключающий автоматическую смену слайдов
                    stop: function() {
                        _config.isAutoplay = false;
                        _stopAutoplay();
                    },
                    // метод запускающий автоматическую смену слайдов
                    cycle: function() {
                        _config.isAutoplay = true;
                        _startAutoplay();
                    }
                }
            }
        }());

        slideShow('.slider', {
            isAutoplay: true
        });
    </script>

</div>
</body>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>

</html>
<?php
/*  } else {
   	header("Location:$base_url/Log.php?error=4");
   } 
   
   }else{
   	header("Location:$base_url/Log.php?error=5");
   }*/ ?>