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
    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body>
    <section class="top_block">
        <header class="index_header">
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
                <div class="icons">
                    <a href="profile.php" class="logo_link basket_link">Профиль</a>
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
                            <a href="#block8" class="source source-1">Расчет кирпичных стен</a>
                            <a href="#block9" class="source source-2">Расчет стен из блоков</a>
                            <!-- <a href="#block3" class="source source-3">Расчет стен из блоков по своим размерам</a> -->
                            <a href="#block10" class="source source-3">Объем блоков/кирпича в м3</a>
                            <!-- <a href="#block5" class="source source-5">Объем блоков/кирпича в ярде3</a> -->
                            <!-- <a href="#block4" class="source source-4">Параметры стеновых блоков</a> -->
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

                <div class="target target-1" id="block8">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет кирпичных стен<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn1" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>

                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Вид кирпича:</label>
                                    <select class="select_calc">
                                        <option value="first">250*120*65 Облицовочный(одинарный)</option>
                                        <option value="second">250*120*65 1НФ(одинарный)</option>
                                        <option value="third">250*120*88 1.4НФ(полуторный)</option>
                                        <option value="fourth">250*120*140 2.1НФ(двойной)</option>
                                        <option value="fifth">250*85*65 0.7НФ("Евро")</option>
                                        <option value="sixth">288*63*138 1.3НФ(модульный одинарный)</option>
                                        <option value="seventh">250*120*138 (силикатный 3ч пустотный)</option>
                                    </select>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Высота стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина стен:</label>
                                    <select class="select_calc">
                                        <option value="first">Половина кирпича</option>
                                        <option value="second">В 1 кирпич</option>
                                        <option value="third">В 1,5 кирпича</option>
                                        <option value="fourth">В 2 кирпича</option>
                                        <option value="fifth">В 2,5 кирпича</option>
                                    </select>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина раствора в кладке:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Вес 1 кирпича:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="кг"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость одного кирпича:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button>
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
                    <div class="result_calc_title">
                        <a class = "result_calc_svg" href="#">
                        <svg class="save_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" /><path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style=""/><g ><path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"  data-original="#ff5f7a" style="" /><path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" /></g></g></g></svg>
                        </a>
                    </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Общая площадь кладки:</p>
                                <p>Толщина стены:</p>
                                <p>Количество кирпича:</p>
                                <p>Объем всего кирпича:</p>
                                <p>Количество кирпича в кубе:</p>
                                <p>Количество полных рядов в высоту:</p>
                                <p>Вес 1 кирпича:</p>
                                <p>Вес всего кирпича:</p>
                                <p>Нагрузка на фундамент от стен:</p>
                                <p>Стоимость:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг/см2</p>
                                <p><output id=""></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2block!-->
                <div class="target target-2" id="block9">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет стен из блоков<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn2" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость блока:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="тенге" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Вес 1 блока:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="кг" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id="C"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Высота стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id="C"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размеры блока[мм]:</label>
                                    <select class="select_calc">
                                        <option value="">250*120*65 1NF</option>
                                        <option value="">250*85*65 0.7NF</option>
                                        <option value="">250*120*88 1.4NF</option>
                                        <option value="">250*60*65 0.5NF</option>
                                        <option value="">250*138*65 1.3NF</option>
                                        <option value="">250*138*88 1.8NF</option>
                                        <option value="">250*120*55 0.8NF</option>
                                        <option value="">250*200*70 1.8NF</option>
                                        <option value="">390*190*138</option>
                                        <option value="">400*200*200</option>
                                        <option value="">600*100*250</option>
                                        <option value="">600*100*300</option>
                                        <option value="">600*150*250</option>
                                        <option value="">600*200*200</option>
                                        <option value="">600*200*250</option>
                                        <option value="">600*200*300</option>
                                        <option value="">600*240*250</option>
                                        <option value="">600*300*200</option>
                                        <option value="">600*300*250</option>
                                        <option value="">600*400*250</option>
                                        <option value="">600*400*300</option>
                                    </select>
                                </div>  
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина стен:</label>
                                    <select class="select_calc">
                                        <option value="">Половина блока</option>
                                        <option value="">В 1 блок</option>
                                        <option value="">В 1,5 блока</option>
                                        <option value="">В 2 блока</option>
                                        <option value="">В 2,5 блока</option>
                                    </select>
                                </div>  
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина раствора:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм"><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Рассчитать</a></button>
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
                    <div class="result_calc_title">
                        <a class = "result_calc_svg" href="#">
                        <svg class="save_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" /><path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style=""/><g ><path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"  data-original="#ff5f7a" style="" /><path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" /></g></g></g></svg>
                        </a>
                    </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Общая площадь кладки:</p>
                                <p>Толщина стены:</p>
                                <p>Количество блоков:</p>
                                <p>Объем всех блоков:</p>
                                <p>Количество блоков в кубе:</p>
                                <p>Объем раствора:</p>
                                <p>Вес всех блоков:</p>
                                <p>Нагрузка на фундамент от стен:</p>
                                <p>Стоимость:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> мм</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг/см2</p>
                                <p><output id=""></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3block!-->
                <div class="target target-3" id="block10">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Количество блоков/кирпича в кубе <div class="h3_border"></div>
                            </h3>
                            <div class="expand_img_svg">
                                <!-- <img id="myBtn3" src="image/question-mark.svg" alt=""> -->
                            </div>
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Размеры блока/кирпича:</label>
                                    <select class="select_calc">
                                        <option value="">250*120*65 1NF</option>
                                        <option value="">250*85*65 0.7NF</option>
                                        <option value="">250*120*88 1.4NF</option>
                                        <option value="">250*60*65 0.5NF</option>
                                        <option value="">250*138*65 1.3NF</option>
                                        <option value="">250*138*88 1.8NF</option>
                                        <option value="">250*120*55 0.8NF</option>
                                        <option value="">250*200*70 1.8NF</option>
                                        <option value="">390*190*188</option>
                                        <option value="">400*200*200</option>
                                        <option value="">600*100*250</option>
                                        <option value="">600*100*300</option>
                                        <option value="">600*150*250</option>
                                        <option value="">600*200*200</option>
                                        <option value="">600*200*250</option>
                                        <option value="">600*200*300</option>
                                        <option value="">600*240*250</option>
                                        <option value="">600*300*200</option>
                                        <option value="">600*300*250</option>
                                        <option value="">600*400*250</option>
                                        <option value="">600*400*300</option>
                                    </select>
                                </div>  
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Рассчитать</a></button>
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
                    <div class="result_calc_title">
                        <a class = "result_calc_svg" href="#">
                        <svg class="save_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><g xmlns="http://www.w3.org/2000/svg"><path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" /><path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style=""/><g ><path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"  data-original="#ff5f7a" style="" /><path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" /></g></g></g></svg>
                        </a>
                    </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Количество в 1м³:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> шт</p>
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
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>
</html>

<?php
// } else {
// 	header("Location:$base_url/Log.php?error=4");
// } 

// }else{
// 	header("Location:$base_url/Log.php?error=5");
// }
?>