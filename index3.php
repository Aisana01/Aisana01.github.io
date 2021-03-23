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
                        <a href="" class="basket_link">Закупки</a>
                    </div>
                </div>
                <div class="header_left">
                    <div class="icons">
                        <a class="messages_href" href="conversation_page.php">Сообщения</a>
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
                        <a href="shop.php" class="categories">Фундамент и бетон</a>
                        <div class="dropdown_content">
                            <a href="#">Расчет фундаментной плиты</a>
                            <a href="#">Расчет ленточного фундамента</a>
                            <a href="#">Расчет ленточного фундамента(2 секции)</a>
                            <a href="#">Расчет ленточного фундамента(3 секции)</a>
                            <a href="#">Расчет ленточного фундамента(4 секции)</a>
                            <a href="#">Расчет состава бетона</a>
                            <a href="#">Количество материала для бетонных колец</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Стены</a>
                        <div class="dropdown_content">
                            <a href="#">Расчет кирпичных стен</a>
                            <a href="#">Расчет стен из блоков</a>
                            <a href="#">Расчет стен из блоков по своим размерам</a>
                            <a href="#">Объем блоков/кирпича в м3</a>
                            <a href="#">Объем блоков/кирпича в ярде3</a>
                            <a href="#">Параметры стеновых блоков</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Отделка</a>
                        <div class="dropdown_content">
                            <a href="#">Количество утеплителя для стен и фундаментов</a>
                            <a href="#">Расчет настила из досок/перекрытий</a>
                            <a href="#">Расчет количества плитки</a>
                            <a href="#">Расчет напольного покрытия</a>
                            <a href="#">Расчет количества вагонки на поверхность</a>
                            <a href="#">Расход грунтовки</a>
                            <a href="#">Расход краски</a>
                            <a href="#">Расход штукатурки</a>
                            <a href="#">Расход шпаклевки</a>
                            <a href="#">Расход стяжки</a>
                            <a href="#">Расход ровнителя/наливных полов</a>
                            <a href="#">Расход плиточного клея</a>
                            <a href="#">Расход обоев</a>
                            <a href="#">Плинтус</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Пиломатериалы</a>
                        <div class="dropdown_content">
                            <a href="#">Объем пиломатериалов по количеству</a>
                            <a href="#">Количество пиломатериалов по объему</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Кровли</a>
                        <div class="dropdown_content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Объемы</a>
                        <div class="dropdown_content">
                            <a href="#">Link 1</a>
                            <a href="#">Link 2</a>
                            <a href="#">Link 3</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="shop.php" class="categories">Земляные работы</a>
                        <div class="dropdown_content">
                            <a href="#">Расчет подушки из сыпучих материалов</a>
                            <a href="#">Объем земленых работ(вертикальные стены)</a>
                            <a href="#">Объем земленых работ(Уклон)</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- <div class="wpb_wrapper">
            <h3 style="color:#ffffff; padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;" class="   nd_options_first_font ">Фундамент и Бетон</h3>
            <h1 style="color:#ffffff; padding:px; text-align:center; font-size:50px; line-height:60px;">Расчет материалов</h1>
        </div> -->

        <div class="landing_main_calc">

            <div class="landing_large_form_calc">
                <script type="text/javascript">
                    function changeText0() {

                        var a = parseFloat(document.getElementById('A').value);
                        var b = parseFloat(document.getElementById('B').value);
                        var c = parseFloat(document.getElementById('C').value) / 1000;
                        var d = parseFloat(document.getElementById('D').value) / 1000;

                        var beton_volume = a * b * c - (a - 2 * d) * (b - 2 * d) * c
                        var perimetr_vneshni = (a + b) * 2
                        var obshaya_dlina = ((a - d) + (b - d)) * 2
                        var ploshad_podoshva = (a * b) - (a - (2 * d) * (b - (2 * d)))
                        var vneshni_bokovoi = ((a - d) + (b - d)) * 2
                        var ves_beton = (beton_volume * 2348) / 1000
                        var nagruzka = (beton_volume * 2348) / (ploshad_podoshva * 10000)

                        var a_min_tolsh = 44
                        var h = 700
                        var objem_pilomat = 700 * 44 * obshaya_dlina
                        var kolichestvo_dosok = objem_pilomat / 1000000 * 33

                        document.getElementById('beton_volume').innerHTML = Math.round((beton_volume) * 10) / 10;
                        document.getElementById('perimetr_vneshni').innerHTML = Math.round((perimetr_vneshni) * 10) / 10;
                        document.getElementById('obshaya_dlina').innerHTML = Math.round((obshaya_dlina) * 10) / 10;
                        document.getElementById('ploshad_podoshva').innerHTML = Math.round((ploshad_podoshva) * 10) / 10;
                        document.getElementById('vneshni_bokovoi').innerHTML = Math.round((vneshni_bokovoi) * 10) / 10;
                        document.getElementById('ves_beton').innerHTML = Math.round((ves_beton) * 10) / 10;
                        document.getElementById('nagruzka').innerHTML = Math.round(nagruzka);

                        document.getElementById('a_min_tolsh').innerHTML = Math.round(a_min_tolsh);
                        document.getElementById('objem_pilomat').innerHTML = Math.round(objem_pilomat);
                        document.getElementById('kolichestvo_dosok').innerHTML = Math.round(kolichestvo_dosok);

                    }
                </script>
                <div class="landing_large_calc">

                    <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                    <!-- <img id = "myBtn" src="image/expand.svg" alt="" > -->

                    <div class="expand_img">
                        <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (II секция) <div class="h3_border"></div>
                        </h3>
                        <div class="expand_img_svg">
                            <img id = "myBtn" src="image/question-mark.svg" alt="">
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
                            <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="result_calc_words">
                    <div class="result_calc_title"></div>
                    <div class="result_calc_words_main">
                        <div class="result_calc_words_titles">
                            <p>Площадь основания фундамента:</p>
                            <p>Объем бетона:</p>
                            <p>Внешний периметр:</p>
                            <p>Площадь внешней боковой поверхности:</p>
                            <p>Вес бетона:</p>
                            <p>Нагрузка на почву:</p>
                            <p>Стоимость:</p>
                        </div>
                        <div class="result_calc_words_parameters">
                            <p><output id="beton_volume"></output> м2</p>
                            <p><output id="perimetr_vneshni"></output> метров³</p>
                            <p><output id="obshaya_dlina"></output> метров</p>
                            <p><output id="ploshad_podoshva"></output> м2</p>
                            <p><output id="vneshni_bokovoi"></output> кг</p>
                            <p><output id="ves_beton"></output> кг/см2</p>
                            <p><output id="nagruzka"></output> тенге</p>
                        </div>
                    </div>
                </div>
                <!-- <button id="myBtn">Open Modal</button> -->
                <div id="myModal" class="modal">

                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <img src="image/foundation.jpg" alt="">
                    </div>

                </div>
            </div>

        </div>


        <!-- Script modal !-->
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onmouseenter = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        </script>



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