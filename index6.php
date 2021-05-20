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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link rel="stylesheet" type="text/css" href="style/all.css">
</head>

<body>
    <div class="wrapper">
        <section class="top_block">
            <header class="index_header">
                <div class="top_header">
                    <div class="header_right">
                        <div class="logo">
                            <a href="AboutUs.html" class="logo_link">iBuild</a>
                        </div>
                        <div class="dropdown_search">
                            <div class="search_field">
                                <div class="field_in">
                                    <input id="elastic" type="text" name="search_text" placeholder="Поиск...">
                                </div>
                            </div>
                            <div id='drop_dwn' class="dropdown_content_search">
                                <ul class="elastic" id="search_list"></ul>
                            </div>
                        </div>
                        <div class="basket">
                            <a href="AboutUs.html" class="logo_link basket_link">Главная страница</a>
                        </div>
                    </div>
                    <div class="header_left">
                        <div class="icons" id="signedIn">
                            <a href="profile.php" class="logo_icon">
                                <svg class="header_logo" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 460.8 460.8"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641    S296.261,0,230.432,0z"
                                                    data-original="#000000" style="" class="" />
                                            </g>
                                        </g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path
                                                    d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784    c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555    c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943    c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167    c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02    c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898    C436.8,341.682,437.322,338.024,435.755,334.89z"
                                                    data-original="#000000" style="" class="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </a>
                            <a href="Saved.php" class="logo_icon">
                                <svg class="header_logo" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z"
                                                data-original="#ff7e92" style="" />
                                            <path
                                                d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z"
                                                data-original="#fb4455" style="" class="" />
                                            <g>
                                                <path
                                                    d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"
                                                    data-original="#ff5f7a" style="" class="" />
                                                <path
                                                    d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z"
                                                    data-original="#ff5f7a" style="" class="" />
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </a>
                            <a href="#" class="logo_icon" onClick="logout()">
                                <svg class="header_logo" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512"
                                    style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                    <g>
                                        <g xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0     c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333     h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251     l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z"
                                                        data-original="#000000" style="" class="" />
                                                    <path
                                                        d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437     l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128     C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512     c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715     C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992     c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907     l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491     v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z"
                                                        data-original="#000000" style="" class="" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="auth_button_about" id="signedOut">
                            <a href="Log.php" class="btn_SignIn">Войти</a>
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
                                <a href="index2.php#block35">Расчет стен из блоков по своим размерам</a>
                                <a href="index2.php#block36">Параметры стеновых блоков</a>
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
                            <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет
                                материалов</h1>
                            <div class="expand_img">
                                <h3
                                    style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">
                                    Односкатная кровля<div class="h3_border"></div>
                                </h3>
                                <div class="expand_img_svg">
                                    <img id="myBtn1" src="image/question-mark.svg" alt="">
                                </div>
                            </div>

                            <form class="landing_form_input_calc">
                                <fieldset class="fields">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[А]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[B]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[Н]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[d]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box2');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box2" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[d]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box3');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box3" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[d]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                </fieldset>




                                <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button>

                            </form>
                        </div>
                        <div class="result_calc_words">
                            <div class="result_calc_title">
                                <a class="result_calc_svg">
                                    <svg class="save_svg"
                                        onclick="this.classList.toggle('active');openbox('box_modal35');"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0"
                                        y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z"
                                                    data-original="#ff7e92" style="" />
                                                <path
                                                    d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z"
                                                    data-original="#fb4455" style="" />
                                                <g>
                                                    <path
                                                        d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"
                                                        data-original="#ff5f7a" style="" />
                                                    <path
                                                        d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z"
                                                        data-original="#ff5f7a" style="" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <fieldset class="fields_modal" id="box_modal35" style="display: none;">
                                    <div class="form_wrap_modal">
                                        <label class="input_label">Наименование:</label>
                                        <input class="form_control_modal" type="text" name="" placeholder="" id=""><span
                                            class="form_validation"></span>
                                        <button class="btn_modal">OK</button>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="result_calc_words_main">
                                <div class="result_calc_words_titles">
                                    <p>Площадь кровли:</p>
                                    <p>Угол наклона:</p>
                                    <p>Длина ската:</p>
                                    <p>Площадь фронтона:</p>
                                    <p>Длина стропил:</p>
                                    <p>Количество стропил:</p>
                                    <p>Необходимо досок:</p>
                                    <p>Объем доски:</p>
                                    <p>Объем всего:</p>
                                    <p>Шаг:</p>
                                    <p>Количество проходов(обрешетка):</p>
                                    <p>Необходимо досок(обрешетка):</p>
                                    <p>Объем штуки(обрешетка):</p>
                                    <p>Объем всего(обрешетка):</p>
                                    <p>Шаг(обрешетка):</p>
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
                            <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет
                                материалов</h1>
                            <div class="expand_img">
                                <h3
                                    style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">
                                    Двускатная кровля<div class="h3_border"></div>
                                </h3>
                                <div class="expand_img_svg">
                                    <img id="myBtn5" src="image/question-mark.svg" alt="">
                                </div>
                            </div>

                            <form class="landing_form_input_calc">
                                <fieldset class="fields">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[А]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[B]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[Н]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box4');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box4" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box5');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box5" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[d]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
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
                                        <div class="toggle-btn"
                                            onclick="this.classList.toggle('active');openbox('box6');">
                                            <div class="inner-circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <fieldset class="fields" id="box6" style="display: none;">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[a]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[b]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[c]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[d]:</label>
                                        <input class="form_control_calc" type="number" name="" placeholder="мм"
                                            id=""><span class="form_validation"></span>
                                    </div>
                                </fieldset>




                                <button class="button_primary" type="submit"><a href="#">Рассчитать</a>
                                </button>

                            </form>
                           
                        </div>
                        <div class="result_calc_words">
                            <div class="result_calc_title">
                                <a class="result_calc_svg">
                                    <svg class="save_svg"
                                        onclick="this.classList.toggle('active');openbox('box_modal36');"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="20" height="20" x="0"
                                        y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve">
                                        <g>
                                            <g xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z"
                                                    data-original="#ff7e92" style="" />
                                                <path
                                                    d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z"
                                                    data-original="#fb4455" style="" />
                                                <g>
                                                    <path
                                                        d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"
                                                        data-original="#ff5f7a" style="" />
                                                    <path
                                                        d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z"
                                                        data-original="#ff5f7a" style="" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <fieldset class="fields_modal" id="box_modal36" style="display: none;">
                                    <div class="form_wrap_modal">
                                        <label class="input_label">Наименование:</label>
                                        <input class="form_control_modal" type="text" name="" placeholder="" id=""><span
                                            class="form_validation"></span>
                                        <button class="btn_modal">OK</button>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="result_calc_words_main">
                                <div class="result_calc_words_titles">
                                    <p>Площадь кровли:</p>
                                    <p>Угол наклона:</p>
                                    <p>Длина ската:</p>
                                    <p>Площадь фронтона:</p>
                                    <p>Длина стропил:</p>
                                    <p>Количество стропил:</p>
                                    <p>Необходимо досок:</p>
                                    <p>Объем доски:</p>
                                    <p>Объем всего:</p>
                                    <p>Шаг:</p>
                                    <p>Количество проходов(обрешетка):</p>
                                    <p>Необходимо досок(обрешетка):</p>
                                    <p>Объем штуки(обрешетка):</p>
                                    <p>Объем всего(обрешетка):</p>
                                    <p>Шаг(обрешетка):</p>
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
<!--  -->
                            <div id="myModal1" class="modal modal1">
                                <!-- Modal content -->
                                <div id = "m_block1" class="modal-content modal-content1">
                                    <span class="close close1">&times;</span>
                                    <img src="image/Group 35.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal2" class="modal modal2">
                                <!-- Modal content -->
                                <div id = "m_block2" class="modal-content modal-content2">
                                    <span class="close close2">&times;</span>
                                    <img src="image/Group 38.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal3" class="modal modal3">
                                <!-- Modal content -->
                                <div id = "m_block3" class="modal-content modal-content3">
                                    <span class="close close3">&times;</span>
                                    <img src="image/Group 39.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal4" class="modal modal4">
                                <!-- Modal content -->
                                <div id = "m_block4" class="modal-content modal-content4">
                                    <span class="close close4">&times;</span>
                                    <img src="image/Group 41.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal5" class="modal modal5">
                                <!-- Modal content -->
                                <div id = "m_block5" class="modal-content modal-content5">
                                    <span class="close close5">&times;</span>
                                    <img src="image/Group 36.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal6" class="modal modal6">
                                <!-- Modal content -->
                                <div id = "m_block6" class="modal-content modal-content6">
                                    <span class="close close6">&times;</span>
                                    <img src="image/Group 42.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal7" class="modal modal7">
                                <!-- Modal content -->
                                <div id = "m_block7" class="modal-content modal-content7">
                                    <span class="close close7">&times;</span>
                                    <img src="image/Group 43.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <div id="myModal8" class="modal modal8">
                                <!-- Modal content -->
                                <div id = "m_block8" class="modal-content modal-content8">
                                    <span class="close close8">&times;</span>
                                    <img src="image/Group 41.png" alt="" width="600px" height="400px">
                                </div>
                            </div>
                            <!--  -->

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
            btn1.onmouseenter = function () {
                modal1.style.display = "block";
            }
            btn2.onmouseenter = function () {
                modal2.style.display = "block";
            }
            btn3.onmouseenter = function () {
                modal3.style.display = "block";
            }
            btn4.onmouseenter = function () {
                modal4.style.display = "block";
            }
            btn5.onmouseenter = function () {
                modal5.style.display = "block";
            }
            btn6.onmouseenter = function () {
                modal6.style.display = "block";
            }
            btn7.onmouseenter = function () {
                modal7.style.display = "block";
            }
            btn8.onmouseenter = function () {
                modal8.style.display = "block";
            }
            // When the user clicks on <span> (x), close the modal
            span1.onclick = function () {
                modal1.style.display = "none";
            }
            span2.onclick = function () {
                modal2.style.display = "none";
            }
            span3.onclick = function () {
                modal3.style.display = "none";
            }
            span4.onclick = function () {
                modal4.style.display = "none";
            }
            span5.onclick = function () {
                modal5.style.display = "none";
            }
            span6.onclick = function () {
                modal6.style.display = "none";
            }
            span7.onclick = function () {
                modal7.style.display = "none";
            }
            span8.onclick = function () {
                modal8.style.display = "none";
            }
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target ==
                    modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7 || event
                    .target == modal8) {
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

    </div>
</body>
<script src="javascript/open_box.js"> </script>
<script src="javascript/change_block.js"></script>
<script src="javascript/animate_plugin/animate-css.js"></script>
<script src="javascript/common.js"></script>
<script src="javascript/live_search.js"></script>
<script src="javascript/scroll_block.js"></script>
</html>

<?php
// } else {
// 	header("Location:$base_url/Log.php?error=4");
// } 

// }else{
// 	header("Location:$base_url/Log.php?error=5");
// }
?>