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
                            <a href="#block1" class="source source-1">Расчет фундаментной плиты</a>
                            <a href="#block2" class="source source-2">Расчет ленточного фундамента</a>
                            <a href="#block3" class="source source-3">Расчет ленточного фундамента(2 секции)</a>
                            <a href="#block4" class="source source-4">Расчет ленточного фундамента(3 секции)</a>
                            <a href="#block5" class="source source-5">Расчет ленточного фундамента(4 секции)</a>
                            <a href="#block6" class="source source-6">Расчет состава бетона</a>
                            <a href="#block7" class="source source-7">Количество материала для бетонных колец</a>
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



        <div class="landing_main_calc">
            <div class="landing_large_form_calc">

                <div class="target target-1" id="block1">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Плита фундамента<div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn1" src="image/question-mark.svg" alt="">
                            </div>
                        </div>

                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" placeholder="м" id="a_length"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" placeholder="м" id="b_length"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[C]:</label>
                                    <input class="form_control_calc" type="number" placeholder="см" id="c_length"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость бетона за м3:</label>
                                    <input class="form_control_calc" type="number" placeholder="тенге" id="cost"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="form_wrap_calc">
                                <button class="button_primary" type="button" onclick="Calculate('slab_fund')"><a href="#">Расчитать</a></button>
                            </div>
                        </form>
                        <div id="myModal1" class="modal modal1">

                            <!-- Modal content -->
                            <div class="modal-content modal-content1">
                                <span class="close close1">&times;</span>
                                <img src="image/fp.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь основания плиты:</p>
                                <p>Объем бетона:</p>
                                <p>Периметр плиты:</p>
                                <p>Площадь боковой поверхности:</p>
                                <p>Вес бетона:</p>
                                <p>Нагрузка на почву:</p>
                                <p>Стоимость бетона:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="a"></output> м2</p>
                                <p><output id="b"></output> метров³</p>
                                <p><output id="c"></output> метров</p>
                                <p><output id="d"></output> м2</p>
                                <p><output id="e"></output> кг</p>
                                <p><output id="f"></output> кг/см2</p>
                                <p><output id="g"></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2block!-->
                <div class="target target-2" id="block2">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (I секция) <div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn2" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="name" placeholder="м" id="A"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="email" placeholder="м" id="B"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[C]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[D]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость бетона за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Расчитать</a></button>
                            </div>
                        </form>
                        <div id="myModal2" class="modal modal2">

                            <!-- Modal content -->
                            <div class="modal-content modal-content2">
                                <span class="close close2">&times;</span>
                                <img src="image/1s.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь основания плиты:</p>
                                <p>Объем бетона:</p>
                                <p>Периметр плиты:</p>
                                <p>Площадь боковой поверхности:</p>
                                <p>Вес бетона:</p>
                                <p>Нагрузка на почву:</p>
                                <p>Стоимость бетона:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> м</p>
                                <p><output id="ploshad_podoshva"></output> м2</p>
                                <p><output id="vneshni_bokovoi"></output> кг</p>
                                <p><output id="ves_beton"></output> кг/см2</p>
                                <p><output id="nagruzka"></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3block!-->
                <div class="target target-3" id="block3">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (II секция) <div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn3" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="name" placeholder="м" id="A"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="email" placeholder="м" id="B"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[C]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[D]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость бетона за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Расчитать</a></button>
                            </div>
                        </form>
                        <div id="myModal3" class="modal modal3">

                            <!-- Modal content -->
                            <div class="modal-content modal-content3">
                                <span class="close close3">&times;</span>
                                <img src="image/2s.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь основания плиты:</p>
                                <p>Объем бетона:</p>
                                <p>Периметр плиты:</p>
                                <p>Площадь боковой поверхности:</p>
                                <p>Вес бетона:</p>
                                <p>Нагрузка на почву:</p>
                                <p>Стоимость бетона:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> м</p>
                                <p><output id="ploshad_podoshva"></output> м2</p>
                                <p><output id="vneshni_bokovoi"></output> кг</p>
                                <p><output id="ves_beton"></output> кг/см2</p>
                                <p><output id="nagruzka"></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4block!-->
                <div class="target target-4" id="block4">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (III секция) <div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn4" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="name" placeholder="м" id="A"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="email" placeholder="м" id="B"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[C]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">

                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[D]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[E]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="м" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость бетона за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Расчитать</a></button>
                            </div>
                        </form>
                        <div id="myModal4" class="modal modal4">

                            <!-- Modal content -->
                            <div class="modal-content modal-content4">
                                <span class="close close4">&times;</span>
                                <img src="image/3s.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь основания плиты:</p>
                                <p>Объем бетона:</p>
                                <p>Периметр плиты:</p>
                                <p>Площадь боковой поверхности:</p>
                                <p>Вес бетона:</p>
                                <p>Нагрузка на почву:</p>
                                <p>Стоимость бетона:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> м</p>
                                <p><output id="ploshad_podoshva"></output> м2</p>
                                <p><output id="vneshni_bokovoi"></output> кг</p>
                                <p><output id="ves_beton"></output> кг/см2</p>
                                <p><output id="nagruzka"></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--5block!-->
                <div class="target target-5" id="block5">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (IV секция) <div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn5" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[А]:</label>
                                    <input class="form_control_calc" type="number" name="name" placeholder="м" id="A"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[B]:</label>
                                    <input class="form_control_calc" type="number" name="email" placeholder="м" id="B"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[C]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[D]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость бетона за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Расчитать</a></button>
                            </div>
                        </form>
                        <div id="myModal5" class="modal modal5">

                            <!-- Modal content -->
                            <div class="modal-content modal-content5">
                                <span class="close close5">&times;</span>
                                <img src="image/4s.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь основания плиты:</p>
                                <p>Объем бетона:</p>
                                <p>Периметр плиты:</p>
                                <p>Площадь боковой поверхности:</p>
                                <p>Вес бетона:</p>
                                <p>Нагрузка на почву:</p>
                                <p>Стоимость бетона:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> м</p>
                                <p><output id="ploshad_podoshva"></output> м2</p>
                                <p><output id="vneshni_bokovoi"></output> кг</p>
                                <p><output id="ves_beton"></output> кг/см2</p>
                                <p><output id="nagruzka"></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6block!-->
                <div class="target target-6" id="block6">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Состав бетона<div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn6" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Объем бетона:</label>
                                    <input class="form_control_calc" type="number" name="name" placeholder="м3" id="A"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Влажность песка:</label>
                                    <input class="form_control_calc" type="number" name="email" placeholder="%" id="B"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Влажность щебня:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="%" id="C"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Марка бетона:</label>
                                    <select class="select_calc" id="mark">
                                        <option value="first">M-100=B 7.5</option>
                                        <option value="second">M-150=B 10</option>
                                        <option value="third">M-200=B 15</option>
                                        <option value="fourth">M-250=B 20</option>
                                        <option value="fifth">M-300=B 25</option>
                                    </select>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Марка цемента:</label>
                                    <select class="select_calc" id="mark">
                                        <option value="first">M-400</option>
                                        <option value="second">M-500</option>
                                    </select>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Подвижность бетонной смеси:</label>
                                    <select class="select_calc" id="mark">
                                        <option value="first">П-1</option>
                                        <option value="second">П-2</option>
                                        <option value="third">П-3</option>
                                        <option value="fourth">П-4</option>
                                        <option value="fifth">П-5</option>
                                    </select>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Фракция песка:</label>
                                    <select class="select_calc" id="mark">
                                        <option value="first">0,7мм-1мм</option>
                                        <option value="second">1мм-1,5мм</option>
                                        <option value="third">1,5мм-2мм</option>
                                        <option value="fourth">2мм-2,5мм</option>
                                        <option value="fifth">2,5мм-3мм</option>
                                    </select>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Фракция щебня:</label>
                                    <select class="select_calc" id="mark">
                                        <option value="first">5мм-10мм</option>
                                        <option value="second">5мм-15мм</option>
                                        <option value="third">5мм-20мм</option>
                                        <option value="fourth">5мм-30мм</option>
                                        <option value="fifth">5мм-40мм</option>
                                    </select>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button>
                            </div>
                        </form>
                        <div id="myModal6" class="modal modal6">

                            <!-- Modal content -->
                            <div class="modal-content modal-content6">
                                <span class="close close6">&times;</span>
                                <img src="image/бетон.jpg" alt="" width="510px" height="510px">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Цемент:</p>
                                <p>Песок:</p>
                                <p>Щебень:</p>
                                <p>Вода:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> кг</p>
                                <p><output id="perimetr_vneshni"></output> кг</p>
                                <p><output id="obshaya_dlina"></output> кг</p>
                                <p><output id="ploshad_podoshva"></output> л</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--7block!-->
                <div class="target target-7" id="block7">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Бетонные кольца<div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Диаметр[D]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="м" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Высота[Н]:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="м" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина(А):</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="см"><span class="form_validation"></span>
                                </div>
                            </fieldset>


                            <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                            </button>

                        </form>
                        <div id="myModal7" class="modal modal7">

                            <!-- Modal content -->
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/Group 50.png" width="518px" height="414px" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Внутренний диаметр:</p>
                                <p>Объем бетона:</p>
                                <p>Внутренний объем:</p>
                                <p>Высота арматурной сетки:</p>
                                <p>Ширина арматурной сетки:</p>
                                <p>Площадь арматурной сетки:</p>
                                <p>Приблизительный вес:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> мм</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> м³</p>
                                <p><output id="ploshad_podoshva"></output> мм</p>
                                <p><output id="vneshni_bokovoi"></output> мм</p>
                                <p><output id="ves_beton"></output> м2</p>
                                <p><output id="nagruzka"></output> кг</p>
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
        // Get the button that opens the modal
        var btn1 = document.getElementById("myBtn1");
        var btn2 = document.getElementById("myBtn2");
        var btn3 = document.getElementById("myBtn3");
        var btn4 = document.getElementById("myBtn4");
        var btn5 = document.getElementById("myBtn5");
        var btn6 = document.getElementById("myBtn6");
        var btn7 = document.getElementById("myBtn7");
        // Get the <span> element that closes the modal
        var span1 = document.getElementsByClassName("close1")[0];
        var span2 = document.getElementsByClassName("close2")[0];
        var span3 = document.getElementsByClassName("close3")[0];
        var span4 = document.getElementsByClassName("close4")[0];
        var span5 = document.getElementsByClassName("close5")[0];
        var span6 = document.getElementsByClassName("close6")[0];
        var span7 = document.getElementsByClassName("close7")[0];
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
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            modal1.style.display = "none";
            modal2.style.display = "none";
            modal3.style.display = "none";
            modal4.style.display = "none";
            modal5.style.display = "none";
            modal6.style.display = "none";
            modal7.style.display = "none";
        }
    </script>
    <!-- <script>
        // Get the modal
        var i;
        for (i = 1; i < 7; i++) {

            var modal = document.getElementById("myModal" + i.toString());
            // Get the button that opens the modal
            var btn = document.getElementById("myBtn" + i.toString());
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close" + i.toString())[0];
            // When the user clicks the button, open the modal 
            console.log(modal,btn,span);
            btn.onmouseenter = function() {
                modal.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            }
        }
    </script> -->

    <script>
        var HIDDEN_CLASS_NAME = 'hidden'
        var TARGET_CLASS_NAME = 'target'
        var SOURCE_CLASS_NAME = 'source'

        var targetIdToShow = 1

        function main() {
            var targets = getElements(TARGET_CLASS_NAME)
            var sources = getElements(SOURCE_CLASS_NAME)
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