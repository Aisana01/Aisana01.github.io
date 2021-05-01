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

    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    <script src="javascript/authentication.js"></script>
    
    <script src="javascript/calculations.js"></script>
    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body>
    <div class = "wrapper">
    <section class="top_block">
        <header class="index_header">
        <div class="top_header">
            <div class="header_right">
                <div class="logo">
                    <a href="AboutUs.php" class="logo_link">iBuild</a>
                </div>
                <div class="dropdown_search">
                        <div class="search_field">
                            <div class="field_in">
                                <input id="elastic" type="text" name="search_text" placeholder="Поиск...">
                            </div>
                        </div>
                        <div id = 'drop_dwn' class="dropdown_content_search">
                            <ul class="elastic" id="search_list"></ul>
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
                            <a href="#block16" class="source source-1">Количество утеплителя для стен и фундаментов</a>
                            <a href="#block17" class="source source-2">Расчет настила из досок/перекрытий</a>
                            <a href="#block18" class="source source-3">Расчет количества плитки</a>
                            <a href="#block19" class="source source-4">Расчет напольного покрытия</a>
                            <a href="#block20" class="source source-5">Расчет количества вагонки на поверхность</a>
                            <a href="#block21" class="source source-6">Расход грунтовки</a>
                            <a href="#block22" class="source source-7">Расход краски</a>
                            <a href="#block23" class="source source-8">Расход штукатурки</a>
                            <a href="#block24" class="source source-9">Расход шпаклевки</a>
                            <a href="#block25" class="source source-10">Расход стяжки</a>
                            <a href="#block26" class="source source-11">Расход ровнителя/наливных полов</a>
                            <a href="#block27" class="source source-12">Расход плиточного клея</a>
                            <a href="#block28" class="source source-13">Расход обоев</a>
                            <a href="#block29" class="source source-14">Плинтус</a>
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

                <div class="target target-1" id="block16">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет количество утеплителя<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn1" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>

                        <form class="landing_form_input_calc">
                        <div class="label_title">Материал</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество слоёв утепления:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="" id=""><span class="form_validation"></span>
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
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal16');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal16" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь одного листа:</p>
                                <p>Объем одного листа:</p>
                                <p>Листов в 1м³:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> м³</p>
                                <p><output id="obshaya_dlina"></output> шт</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2block!-->
                <div class="target target-2" id="block17">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет настила из досок<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn2" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                        <div class="label_title">Размеры настила</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Сторона[А]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Сторона[B]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер доски</div> 
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Размер[С]:</label>
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
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal17');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal17" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь настила:</p>
                                <p>Количество досок настила:</p>
                                <p>Объем досок настила:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> шт</p>
                                <p><output id="obshaya_dlina"></output> м³</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3block!-->
                <div class="target target-3" id="block18">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Плитка<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn3" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                        <div class="label_title">Размер плитки</div>    
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер поверхности</div>    
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина шва:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Подрезка:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="%" id=""><span class="form_validation"></span>
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
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal18');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal18" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь поверхности:</p>
                                <p>Необходимое количество плитки:</p>
                                <p>Количество плитки с учетом подрезки:</p>
                                <p>Отходы:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> %</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--4block!-->
                <div class="target target-4" id="block19">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет напольного покрытия <div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn4" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Размеры блока[мм]:</label>
                                    <select class="select_calc">
                                        <option value="">Ламинат</option>
                                        <option value="">Керамическая плита</option>
                                        <option value="">Паркет</option>
                                        <option value="">Паркетная доска</option>
                                        <option value="">Линолеум</option>
                                        <option value="">Ковролин</option>
                                    </select>
                                </div>  
                            <div class="form_wrap_calc">
                                    <label class="input_label">Длина покрытия:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина покрытия:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">

                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина пола:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина пола:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Рассчитать</a></button>
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
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal19');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal19" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Минимальный расход:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--5block!-->
                <div class="target target-5" id="block20">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Вагонка<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn5" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина[А]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина[B]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина шипа[Е]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество в упаковке:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="ед" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Высота поверхности[D]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м"><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина поверхности[С]:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                           

                            <div class="form_wrap_calc">
                                <!-- <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button> -->
                                <button class="button_primary" onclick="Calculate()"><a href="#">Рассчитать</a></button>
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
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal20');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal20" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button> 
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь покрываемой поверхности:</p>
                                <p>Необходимое количество вагонки:</p>
                                <p>Число полных упаковок:</p>
                                <p>Приблизительная стоимость:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> ед</p>
                                <p><output id=""></output> ед</p>
                                <p><output id=""></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--6block!-->
                <div class="target target-6" id="block21">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Грунтовка<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn6" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Размеры блока[мм]:</label>
                                    <select class="select_calc">
                                        <option value="">Caparol Tiefgrund TB</option>
                                        <option value="">Caparol Capasol LF</option>
                                        <option value="">Caparol OptiGrund</option>
                                        <option value="">Caparol AmphiSilan Grunddiefarbe</option>
                                        <option value="">Caparol AmphiSilan Putzfestiger</option>
                                        <option value="">Caparol Amphisilan Tiefgrund LF</option>
                                        <option value="">Caparol Dupa-grund</option>
                                        <option value="">Ceresit CT 16</option>
                                        <option value="">Ceresit CT 17</option>
                                        <option value="">Ceresit CT 19</option>
                                        <option value="">Ceresit R 777</option>
                                        <option value="">Ceresit IN 10</option>
                                        <option value="">КНАУФ Тифенгрунд</option>
                                        <option value="">КНАУФ Мультигрунд</option>
                                        <option value="">КНАУФ Миттельгрунд</option>
                                        <option value="">КНАУФ Декоргрунд</option>
                                        <option value="">КНАУФ Бетоконтакт</option>
                                        <option value="">КНАУФ Изогрунд</option>
                                        <option value="">КНАУФ Грундирмиттель</option>
                                        <option value="">Tikkurila Otex</option>
                                        <option value="">Tikkurila Otex Aqua</option>
                                        <option value="">Tikkurila Luja</option>
                                        <option value="">Tikkurila Euro Primer</option>
                                        <option value="">Weber prim multi</option>
                                        <option value="">Текс Универсал ГФ-021</option>
                                        <option value="">Боларс Укрепляющая</option>
                                        <option value="">Боларс Глубокого проникновения</option>
                                        <option value="">Боларс Бетоновонтакт</option>
                                        <option value="">Боларс Acryl-primer</option>
                                        <option value="">Боларс Sil-primer</option>
                                        <option value="">Боларс Антиплесень</option>
                                        <option value="">ВОЛМА Универсал</option>
                                        <option value="">ВОЛМА Контакт</option>
                                        <option value="">ВОЛМА Интерьер</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество слоев:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                          
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
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
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal21');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal21" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала для обработки поверхности:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> кг</p>
                                <p><output id="obshaya_dlina"></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--7block!-->
                <div class="target target-7" id="block22">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расход краски<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Расход краски:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мл/м2" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество слоёв:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размеры поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="см" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="см" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <div id="myModal7" class="modal modal7">

                            <!-- Modal content -->
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal22');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal22" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь поверхности:</p>
                                <p>Объем краски:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id="beton_volume"></output> м2</p>
                                <p><output id="perimetr_vneshni"></output> л</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--8block!-->
                 <div class="target target-8" id="block23">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Штукатурка<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Штукатурка:</label>
                                    <select class="select_calc">
                                        <option value="">Axton гипсовая</option>
                                        <option value="">Axton цементная</option>
                                        <option value="">Aksolit A1</option>
                                        <option value="">Aksolit M50</option>
                                        <option value="">Aksolit M35</option>
                                        <option value="">Bergauf BAU PUTZ GIPS</option>
                                        <option value="">Bergauf BAU PUTZ ZEMENT</option>
                                        <option value="">Bergauf PRIMA PUTZ GIPS</option>
                                        <option value="">Bergauf INTERIER</option>
                                        <option value="">Bergauf EASY PLASTER</option>
                                        <option value="">Bergauf BAU BLOCK</option>
                                        <option value="">Bergauf EASY BAND</option>
                                        <option value="">Forman 01</option>
                                        <option value="">Forman 10</option>
                                        <option value="">Forman 11</option>
                                        <option value="">Forman 12</option>
                                        <option value="">Forman 14</option>
                                        <option value="">Forman 15</option>
                                        <option value="">Forman 61</option>
                                        <option value="">Gipsell Эконом MH</option>
                                        <option value="">Gipsell Фора MH</option>
                                        <option value="">Gipsell Ультра MH</option>
                                        <option value="">Gipsell Атика РH</option>
                                        <option value="">Gipsell Оптима РH</option>
                                        <option value="">Gilms TS-70</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина слоя:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal28');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal28" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--9block!-->
                <div class="target target-9" id="block24">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Шпаклевка<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Шпаклевка:</label>
                                    <select class="select_calc">
                                        <option value="">Aksolit S8</option>
                                        <option value="">Aksolit S3</option>
                                        <option value="">Aksolit R90</option>
                                        <option value="">Bergauf FUGEN GIPS</option>
                                        <option value="">Bergauf SILK PLAST</option>
                                        <option value="">Bergauf SILK ZEMENT</option>
                                        <option value="">Bergauf EASY SILK</option>
                                        <option value="">Bergauf EASY FINISH</option>
                                        <option value="">Bergauf LR PASTA</option>
                                        <option value="">Bergauf FINISH PLAST</option>
                                        <option value="">Bergauf FINISH POLYMER+</option>
                                        <option value="">Bergauf FINISH ZEMENT</option>
                                        <option value="">Bergauf FINISH GIPS</option>
                                        <option value="">Bergauf GLATTE ZEMENT</option>
                                        <option value="">Bergauf UNI FINISH</option>
                                        <option value="">Bergauf EASY SOFT</option>
                                        <option value="">Bergauf SILK POLYMER+</option>
                                        <option value="">Bergauf SILK GIPS</option>
                                        <option value="">Ceresit CT 127</option>
                                        <option value="">Ceresit CT 95</option>
                                        <option value="">Ceresit CT 225</option>
                                        <option value="">Ceresit IN 95</option>
                                        <option value="">Gipsell Финишная Премиум</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина слоя:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal29');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal29" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--10block!-->
                <div class="target target-10" id="block25">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Стяжка пола<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Стяжка пола:</label>
                                    <select class="select_calc">
                                        <option value="">Bergauf ERSTE GRUND</option>
                                        <option value="">Bergauf Praktik M-200</option>
                                        <option value="">Ceresit CN80</option>
                                        <option value="">Consolit 400</option>
                                        <option value="">Glims PRO FS Screed 1K</option>
                                        <option value="">Ivsil Termolite</option>
                                        <option value="">Plitonit P200</option>
                                        <option value="">Perfekta Фиброслой</option>
                                        <option value="">Knauf Boden 15</option>
                                        <option value="">Knauf UBO</option>
                                        <option value="">Mapel Topcem Pronto</option>
                                        <option value="">Murezin ZE 30 Zementestrich</option>
                                        <option value="">Sika Sikafloor 20 PurCem</option>
                                        <option value="">Sika Sikafloor Screed-100</option>
                                        <option value="">UNIS Горизонт Легкий</option>
                                        <option value="">Weisbau WB150 Пескобетон M150</option>
                                        <option value="">Бирсс №18 С</option>
                                        <option value="">Бирсс №16</option>
                                        <option value="">Бирсс №23</option>
                                        <option value="">Бирсс №53 С</option>
                                        <option value="">Бирсс №62</option>
                                        <option value="">Бирсс Рапид</option>
                                        <option value="">Старатели Стяжка С-10</option>
                                        <option value="">Старатели Стяжка Легкая</option>
                                        <option value="">Боларс Быстротвердеющая Основа БТ</option>
                                        <option value="">Боларс Высокопрочная Основа</option>
                                        <option value="">Основит Стартолайн FC41H Высокопрочная</option>
                                        <option value="">Основит Стартолайн FC43L Легкая</option>
                                        <option value="">Основит Стартолайн FC44М</option>
                                        <option value="">Эталон М-300 Пескобетон</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина слоя:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal30');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal30" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--11block!-->
                <div class="target target-11" id="block26">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Наливной пол<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Наливной пол:</label>
                                    <select class="select_calc">
                                        <option value="">Aksolit N100</option>
                                        <option value="">Ceresit CN 173</option>
                                        <option value="">Ceresit CN 175</option>
                                        <option value="">Ceresit CN 178</option>
                                        <option value="">Ceresit CN 68</option>
                                        <option value="">Ceresit CN 76</option>
                                        <option value="">Ceresit DD</option>
                                        <option value="">Ceresit CN 83</option>
                                        <option value="">Ceresit CN 88</option>
                                        <option value="">Bergauf EASY FINAL </option>
                                        <option value="">Bergauf EASY BODEN</option>
                                        <option value="">Bergauf EASY BODEN SMART</option>
                                        <option value="">Bergauf Base</option>
                                        <option value="">Bergauf Boden Zement Gross</option>
                                        <option value="">Bergauf Boden Zement Medium</option>
                                        <option value="">Bergauf Boden Zement Final</option>
                                        <option value="">Bergauf Boden Inter Gross</option>
                                        <option value="">Bergauf Boden Turbo</option>
                                        <option value="">Bergauf Boden Novelit</option>
                                        <option value="">Bergauf Boden Street</option>
                                        <option value="">Gipsell Монолит Базовый</option>
                                        <option value="">Gipsell Монолит Финиш</option>
                                        <option value="">Glims CF-10</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина слоя:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal31');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal31" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--12block!-->
                <div class="target target-12" id="block27">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Плиточный клей<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                            <fieldset class="fields">
                            <div class="form_wrap_calc">
                                    <label class="input_label">Плиточный клей:</label>
                                    <select class="select_calc">
                                        <option value="">Bergauf Maximum Plus</option>
                                        <option value="">Bergauf Easy Mixer</option>
                                        <option value="">Bergauf Keramik</option>
                                        <option value="">Bergauf Keramik Pro</option>
                                        <option value="">Bergauf Mosaik</option>
                                        <option value="">Bergauf Standart</option>
                                        <option value="">Bergauf Granit</option>
                                        <option value="">Gilms G-11</option>
                                        <option value="">Gilms G-21</option>
                                        <option value="">Gilms GreyFix </option>
                                        <option value="">Gilms RealFix</option>
                                        <option value="">Gilms WhiteFix</option>
                                        <option value="">Gilms StrongFix</option>
                                        <option value="">Gilms HiFix</option>
                                        <option value="">UNIS U-100 Uniflex</option>
                                        <option value="">UNIS Fix</option>
                                        <option value="">UNIS Юнис XXI</option>
                                        <option value="">UNIS Юнис Мастер ХХI</option>
                                        <option value="">UNIS Юнис 2000</option>
                                        <option value="">UNIS Юнис Мастер 2000</option>
                                        <option value="">UNIS Юнис Плюс</option>
                                        <option value="">UNIS Юнис Гранит</option>
                                        <option value="">UNIS Юнис Бассейн</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Толщина слоя:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размер поверхности</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="мм" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal32');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal32" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь обрабатываемой поверхности:</p>
                                <p>Расход материалов на 1м2:</p>
                                <p>Вес материала:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> кг</p>
                                <p><output id=""></output> кг</p>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--13block!-->
                 <div class="target target-13" id="block28">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет обоев<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                        <div class="label_title">Параметры рулона</div>
                            <fieldset class="fields">
                                 <div class="form_wrap_calc">
                                    <label class="input_label">Выберите размер рулона:</label>
                                    <select class="select_calc">
                                        <option value="">0,53м*8м</option>
                                        <option value="">0,53м*10м</option>
                                        <option value="">0,53м*12м</option>
                                        <option value="">0,53м*15м</option>
                                        <option value="">0,60м*8м</option>
                                        <option value="">0,60м*10м</option>
                                        <option value="">0,74м*10м</option>
                                        <option value="">1,06м*5м</option>
                                        <option value="">1,06м*10м</option>
                                        <option value="">1,06м*12м </option>
                                        <option value="">1,06м*25м</option>
                                    </select>
                                </div> 
                                <div class="form_wrap_calc">
                                    <label class="input_label">Шаг рисунк/Раппорт:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="см" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость одного рулона:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="тенге" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размеры сен</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Суммарная ширина стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Высота стен:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal33');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal33" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Площадь стен:</p>
                                <p>Количество рулонов:</p>
                                <p>Количество листов:</p>
                                <p>Длина листа:</p>
                                <p>Стоимость рулонов:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> м2</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м</p>
                                <p><output id=""></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--14block!-->
                <div class="target target-14" id="block29">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Расчет плинтуса<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn7" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
                        <div class="label_title">Параметры рулона</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина плинтуса:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="label_title">Размеры помещения</div>
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Длина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Ширина:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="м" id=""><span class="form_validation"></span>
                                </div>
                            </fieldset>

                            <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                            </button>

                        </form>
                        <!-- <div id="myModal7" class="modal modal7">
                            <div class="modal-content modal-content7">
                                <span class="close close7">&times;</span>
                                <img src="image/БетонныеКольца.jpg" alt="">
                            </div>

                        </div> -->
                    </div>
                    <div class="result_calc_words">
                    <div class="result_calc_title">
                            <a class="result_calc_svg" href="#">
                                <svg class="save_svg" onclick="this.classList.toggle('active');openbox('box_modal34');" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z" data-original="#ff7e92" style="" />
                                            <path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" />
                                            <g>
                                                <path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z" data-original="#ff5f7a" style="" />
                                                <path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z" data-original="#ff5f7a" style="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <fieldset class="fields_modal" id="box_modal34" style="display: none;">
                                <div class="form_wrap_modal">
                                    <label class="input_label">Наименование:</label>
                                    <input class="form_control_modal" type="text" name="" placeholder="" id=""><span class="form_validation"></span>
                                    <button class="btn_modal">OK</button>
                                </div>
                            </fieldset>
                        </div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Плинтус:</p>
                                <p>Площадь помещения:</p>
                                
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> шт</p>
                                <p><output id=""></output> м2</p>
                                
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
            if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7) {
                modal1.style.display = "none";
                modal2.style.display = "none";
                modal3.style.display = "none";
                modal4.style.display = "none";
                modal5.style.display = "none";
                modal6.style.display = "none";
                modal7.style.display = "none";
            }
        }
    </script>
   

   

    </div>
</body>
<script src="javascript/open_box.js"> </script>
<script src="javascript/change_block.js"></script>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>
<script src="javascript/live_search.js"></script>
</html>

<?php
// } else {
// 	header("Location:$base_url/Log.php?error=4");
// } 

// }else{
// 	header("Location:$base_url/Log.php?error=5");
// }
?>