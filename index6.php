<?php

// include "config/db.php" ;
// include "config/config.php" ;
// session_start();
// if(isset($_SESSION["user_id"])){
// 	$id = $_SESSION["user_id"];
// 	$query = $db->query("SELECT * FROM ibuild_users WHERE id=$id");

// 	if($query->num_rows>0){
// 		$user = $query->fetch_object();

?>

<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <meta charset="utf-8">
    <meta name="description" content="Kluchevie slova, do 200 simvolov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="javascript/calculations.js"></script>
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body>
    <section class="top_block">
        <header class="index_header">
            <div class="top_header">
                <div class="header_right">
                    <div class="logo">
                        <a href="index.php" class="logo_link">iBuild</a>
                    </div>
                    <div class="search_field">
                        <div class="field_in">
                            <input type="text" name="search_text" placeholder="Поиск..." style="padding-left: 10px;">
                        </div>
                    </div>
                    <div class="basket">
                        <a href="AboutUs.php" class="basket_link">Главная страница</a>
                    </div>
                </div>
                <div class="header_left">
                    <div class="icons">
                        <a class="messages_href" href="profile.php">Профиль</a>
                    </div>
                    <div class="auth_button_about">
                        <a href="Log.php" class="btn_SignIn"></a>
                    </div>
                </div>
            </div>
            <div class="bottom_header">
                <div class="bottom_header_in">
                    <div class="dropdown">
                        <a href="index.php" class="categories" onclick="return theFunction();">Фундамент и бетон</a>
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
                            <!-- <a href="index2.php#block3">Расчет стен из блоков по своим размерам</a> -->
                            <a href="index2.php#block10">Объем блоков/кирпича в м3</a>
                            <!-- <a href="index2.php#block4">Объем блоков/кирпича в ярде3</a> -->
                            <!-- <a href="index2.php#block4">Параметры стеновых блоков</a> -->
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
                            <a href="#block30" class="source source-1">Односкатная</a>
                            <a href="#block31" class="source source-2">Двускатная</a>
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



        <div class="landing_main_calc">
            <div class="landing_large_form_calc">
                <div class="target target-1" id="block30">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Односкатная кровля<div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn1" src="image/question-mark.svg" alt="">
                            </div>
                        </div>

                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[Н]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Учесть свесы</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn2" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[d]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Посчитать стропила</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn3" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box2');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box2" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[d]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Посчитать обрешетку</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn4" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box3');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box3" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[d]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>



                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button>
                            </div>
                        </form>
                        <div id="myModal1" class="modal modal1">
                            <!-- Modal content -->
                            <div class="modal-content modal-content1">
                                <span class="close close1">&times;</span>
                                <img src="image/Group 35.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal2" class="modal modal2">
                            <!-- Modal content -->
                            <div class="modal-content modal-content2">
                                <span class="close close2">&times;</span>
                                <img src="image/Group 38.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal3" class="modal modal3">
                            <!-- Modal content -->
                            <div class="modal-content modal-content3">
                                <span class="close close3">&times;</span>
                                <img src="image/Group 39.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal4" class="modal modal4">
                            <!-- Modal content -->
                            <div class="modal-content modal-content4">
                                <span class="close close4">&times;</span>
                                <img src="image/Group 41.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь кровли:</p>
                                <p>Угол наклона:</p>
                                <p>Длина ската:</p>
                                <p>Площадь фронтона:</p>
                                <p>Длина стропил:</p>
                                <p>Необходимо досок:</p>
                                <p>Объем доски:</p>
                                <p>Объем всего:</p>
                                <p>Шаг:</p>
                                <p>Нахлест:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> %</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м3</p>
                                <p><output id=""></output> м3</p>
                                <p><output id=""></output> мм</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2block!-->
                <div class="target target-2" id="block31">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Двускатная кровля<div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn5" src="image/question-mark.svg" alt="">
                            </div>
                        </div>

                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[Н]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Учесть свесы</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn6" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box4');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box4" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Посчитать стропила</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn7" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box5');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box5" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[d]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title_block">
                                <div class="titleAndImg">
                                    <p class="label_title">Посчитать обрешетку</p>
                                    <div class="expand_img_svg">
                                        <img id="myBtn8" src="image/question-mark.svg" alt="">
                                    </div>
                                </div>
                                <div class="toggle_block">
                                    <div class="toggle-btn" onclick="this.classList.toggle('active');openbox('box6');">
                                        <div class="inner-circle">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <fieldset class="fields" id="box6" style="display: none;">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[a]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[b]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[c]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[d]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>



                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button>
                            </div>
                        </form>
                        <div id="myModal5" class="modal modal5">
                            <!-- Modal content -->
                            <div class="modal-content modal-content5">
                                <span class="close close5">&times;</span>
                                <img src="image/Group 36.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal6" class="modal modal6">
                            <!-- Modal content -->
                            <div class="modal-content modal-content6">
                                <span class="close close6">&times;</span>
                                <img src="image/Group 42.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal7" class="modal modal7">
                            <!-- Modal content -->
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/Group 43.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                        <div id="myModal8" class="modal modal8">
                            <!-- Modal content -->
                            <div class="modal-content modal-content8">
                                <span class="close close8">&times;</span>
                                <img src="image/Group 41.png" alt="" width="600px" height="400px">
                            </div>
                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь кровли:</p>
                                <p>Угол наклона:</p>
                                <p>Длина ската:</p>
                                <p>Площадь фронтона:</p>
                                <p>Длина стропил:</p>
                                <p>Необходимо досок:</p>
                                <p>Объем доски:</p>
                                <p>Объем всего:</p>
                                <p>Шаг:</p>
                                <p>Нахлест:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> %</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м3</p>
                                <p><output id=""></output> м3</p>
                                <p><output id=""></output> мм</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer>
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
        </footer>


    </section>




    <!-- Script modal !-->
    <script>
        // Get the modal
        var modal1 = document.getElementById("myModal1");
        var modal2 = document.getElementById("myModal2");
        var modal3 = document.getElementById("myModal3");
        var modal4 = document.getElementById("myModal4");
        var modal5 = document.getElementById("myModal5");
        var modal6 = document.getElementById("myModal6");
        var modal7 = document.getElementById("myModal7");
        var modal8 = document.getElementById("myModal8");
        // Get the button that opens the modal
        var btn1 = document.getElementById("myBtn1");
        var btn2 = document.getElementById("myBtn2");
        var btn3 = document.getElementById("myBtn3");
        var btn4 = document.getElementById("myBtn4");
        var btn5 = document.getElementById("myBtn5");
        var btn6 = document.getElementById("myBtn6");
        var btn7 = document.getElementById("myBtn7");
        var btn8 = document.getElementById("myBtn8");
        // Get the <span> element that closes the modal
        var span1 = document.getElementsByClassName("close1")[0];
        var span2 = document.getElementsByClassName("close2")[0];
        var span3 = document.getElementsByClassName("close3")[0];
        var span4 = document.getElementsByClassName("close4")[0];
        var span5 = document.getElementsByClassName("close5")[0];
        var span6 = document.getElementsByClassName("close6")[0];
        var span7 = document.getElementsByClassName("close7")[0];
        var span8 = document.getElementsByClassName("close8")[0];
        // When the user clicks the button, open the modal 
        btn1.onmouseenter = function() {
            modal1.style.display = "block";
        }
        btn2.onmouseenter = function() {
            modal2.style.display = "block";
        }
        btn3.onmouseenter = function() {
            modal3.style.display = "block";
        }
        btn4.onmouseenter = function() {
            modal4.style.display = "block";
        }
        btn5.onmouseenter = function() {
            modal5.style.display = "block";
        }
        btn6.onmouseenter = function() {
            modal6.style.display = "block";
        }
        btn7.onmouseenter = function() {
            modal7.style.display = "block";
        }
        btn8.onmouseenter = function() {
            modal8.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span1.onclick = function() {
            modal1.style.display = "none";
        }
        span2.onclick = function() {
            modal2.style.display = "none";
        }
        span3.onclick = function() {
            modal3.style.display = "none";
        }
        span4.onclick = function() {
            modal4.style.display = "none";
        }
        span5.onclick = function() {
            modal5.style.display = "none";
        }
        span6.onclick = function() {
            modal6.style.display = "none";
        }
        span7.onclick = function() {
            modal7.style.display = "none";
        }
        span8.onclick = function() {
            modal8.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7 || event.target == modal8) {
                modal1.style.display = "none";
                modal2.style.display = "none";
                modal3.style.display = "none";
                modal4.style.display = "none";
                modal5.style.display = "none";
                modal6.style.display = "none";
                modal7.style.display = "none";
                modal8.style.display = "none";
            }
        }
    </script>

    <script>
        var HIDDEN_CLASS_NAME = 'hidden'
        var TARGET_CLASS_NAME = 'target'
        var SOURCE_CLASS_NAME = 'source'

        var targetIdToShow = 1

        function main() {
            var targets = getElements(TARGET_CLASS_NAME)
            var sources = getElements(SOURCE_CLASS_NAME)
            console.log(targets);
            sources.forEach(function(sourceNode) {
                var sourceNodeId = extractId(sourceNode, SOURCE_CLASS_NAME)
                sourceNode.addEventListener('click', function() {
                    showTarget(targets, sourceNodeId)
                })
            })
            showTarget(targets, targetIdToShow)
        }

        function getElements(type) {
            return [].slice.call(document.querySelectorAll('.' + type)).sort(function(targetNode1, targetNode2) {
                var target1Num = extractId(targetNode1, TARGET_CLASS_NAME)
                var target2Num = extractId(targetNode2, TARGET_CLASS_NAME)
                return target1Num > target2Num
            })
        }

        function extractId(targetNode, baseClass) {
            var currentClassIndex = targetNode.classList.length
            while (currentClassIndex--) {
                var currentClass = targetNode.classList.item(currentClassIndex)
                var maybeIdNum = parseInt(currentClass.split('-')[1])
                if (isNaN(maybeIdNum)) {
                    continue
                }
                var classStrinToValidate = baseClass + '-' + maybeIdNum
                if (classStrinToValidate === currentClass) {
                    return maybeIdNum
                }
            }
        }

        function showTarget(targets, targetId) {
            targets.forEach(function(targetNode, targetIndex) {
                var currentTargetNodeId = extractId(targetNode, TARGET_CLASS_NAME)
                if (currentTargetNodeId === targetId) {
                    targetNode.classList.remove(HIDDEN_CLASS_NAME)
                } else {
                    targetNode.classList.add(HIDDEN_CLASS_NAME)
                }
            })
        }

        main()
    </script>



    <script type="text/javascript">
        function openbox(id) {
            display = document.getElementById(id).style.display;
            if (display == 'none') {
                document.getElementById(id).style.display = 'flex';
            } else {
                document.getElementById(id).style.display = 'none';
            }
        }
    </script>


<script> //отображение блока где вызываешь из другой страницы
            var hash = window.location.hash.substr(1);
            classDiv = document.getElementById(hash);
            IDblock_hash = extractId(classDiv, TARGET_CLASS_NAME);
            // hash_targets = getElements('target-' + IDblock_hash.toString());
            targetsBlock = getElements(TARGET_CLASS_NAME); 
            showTarget(targetsBlock, IDblock_hash); 
</script>

</body>

</html>

<?php
// } else {
// 	header("Location:$base_url/Log.php?error=4");
// } 

// }else{
// 	header("Location:$base_url/Log.php?error=5");
// }
?>