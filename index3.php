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
                        <a class="messages_href" href="conversation_page.php">Сообщения</a>
                    </div>
                    <div class="auth_button_about">
                        <a href="Log.php" class="btn_SignIn"></a>
                    </div>
                </div>
            </div>
            <div class="bottom_header">
                <div class="bottom_header_in">
                    <div class="dropdown">
                        <a href="shop.php" class="categories" onclick="return theFunction();">Фундамент и бетон</a>
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
                        <a href="shop.php" class="categories">Стены</a>
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
                        <a href="shop.php" class="categories">Отделка</a>
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
                        <a href="shop.php" class="categories">Пиломатериалы</a>
                        <div class="dropdown_content">
                            <a href="#block11" class="source source-1">Объем пиломатериалов по количеству</a>
                            <a href="#block12" class="source source-2">Количество пиломатериалов по объему</a>
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
                            <a href="index.php#block13">Расчет подушки из сыпучих материалов</a>
                            <a href="index.php#block14">Объем земленых работ(вертикальные стены)</a>
                            <a href="index.php#block15">Объем земленых работ(уклон)</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        <div class="landing_main_calc">
            <div class="landing_large_form_calc">

                <div class="target target-1" id="block11">
                    <div class="landing_large_calc">
                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>
                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Объем пиломатериалов по количеству<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn1" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>

                        <form class="landing_form_input_calc">
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
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="ед" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
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
                                <img src="image/fp.jpg" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="result_calc_words">
                        <div class="result_calc_title"></div>
                        <div class="result_calc_words_main">
                            <div class="result_calc_words_titles">
                                <p>Количество в кубометре:</p>
                                <p>Объем одной штуки:</p>
                                <p>Объем всего:</p>
                                <p>Стоимость штуки:</p>
                                <p>Стоимость материалов:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> ед</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> тенге</p>
                                <p><output id=""></output> тенге</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--2block!-->
                <div class="target target-2" id="block12">
                    <div class="landing_large_calc">

                        <h1 style="padding:px; text-align:center; font-size:20px; line-height:60px;">Расчет материалов</h1>


                        <div class="expand_img">
                            <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Количество пиломатериалов по объему<div class="h3_border"></div>
                            </h3>
                            <!-- <div class="expand_img_svg">
                                <img id="myBtn2" src="image/question-mark.svg" alt="">
                            </div> -->
                        </div>


                        <form class="landing_form_input_calc">
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
                            <fieldset class="fields">
                                <div class="form_wrap_calc">
                                    <label class="input_label">Количество:</label>
                                    <input class="form_control_calc" type="number" name="" placeholder="ед" id=""><span class="form_validation"></span>
                                </div>
                                <div class="form_wrap_calc">
                                    <label class="input_label">Стоимость за м3:</label>
                                    <input class="form_control_calc" type="number" name="phone" placeholder="тенге"><span class="form_validation"></span>
                                </div>
                            </fieldset>
                            <div class="form_wrap_calc">
                                <button class="button_primary" type="submit"><a href="#">Сохранить</a>
                                </button>
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
                                <p>Количество в кубометре:</p>
                                <p>Объем одной штуки:</p>
                                <p>Количество в заданном объеме:</p>
                                <p>Стоимость штуки:</p>
                                <p>Стоимость материалов:</p>
                            </div>
                            <div class="result_calc_words_parameters">
                                <p><output id=""></output> ед</p>
                                <p><output id=""></output> м³</p>
                                <p><output id=""></output> ед</p>
                                <p><output id=""></output> тенге</p>
                                <p><output id=""></output> тенге</p>
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