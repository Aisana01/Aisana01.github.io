<?php 

include "config/db.php" ;
include "config/config.php" ;
session_start();
if(isset($_SESSION["user_id"])){
	$id = $_SESSION["user_id"];
	$query = $db->query("SELECT * FROM ibuild_users WHERE id=$id");

	if($query->num_rows>0){
		$user = $query->fetch_object();

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
    <header>
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
                <div class="auth_button">
                    <a href="Log.php" class="btn_SignIn"><?php echo $user->full_name; ?></a>
                </div>
            </div>
        </div>
        <div class="bottom_header">
            <div class="bottom_header_in">
                <a href="shop.php" class="categories">Фундамент</a>
                <a href="shop.php" class="categories">Электрика</a>
                <a href="shop.php" class="categories">Кровля</a>
                <a href="shop.php" class="categories">Теплотехника</a>
                <a href="shop.php" class="categories">Стены</a>
                <a href="shop.php" class="categories">Матералы</a>
                <a href="shop.php" class="categories">Заборы</a>
                <a href="shop.php" class="categories">Техники строения</a>
            </div>
        </div>
    </header>

    <section class="landing_blog">
        <div class="landing_contaner">
            <div class="landing_text">
                <p>Строй самостоятельно</p>
                <p class="middle_landing_text">Выбирай лучшее! Нанимай лучших! Создай лучшее!</p>
                <p class="small_landing_text">Производители загружают каталоги,<br>продавцы добавляют цены и остатки на
                    складе,<br>а покупатели выбирают лучшие предложения.</p>
            </div>
            <div class="landing_pages">
                <a href="" class="page_clients" id="opened">Клиентам</a>
                <a href="workerIndex.php" class="page_workers">Работникам</a>
                <a href="" class="page_employee">Продавцам</a>
            </div>
        </div>
    </section>
    <section class="main_content">
        <div class="calculation_section">
            <div class="parameters_form">
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
                <form class="form-parameters" onsubmit="return false;" oninput="changeText0()">
                    <div class="inner_form">
                        <div class="groundwork_type">
                            <p class="big_title">Фундамент</p>
                            <input type="radio" class="foundation_type" name="foundation_type" id="foundation1">
                            <label for="foundation1">Ленточный</label>
                            <br>
                            <input type="radio" class="foundation_type" name="foundation_type" id="foundation2">
                            <label for="foundation2">Плитный</label>
                            <br>
                            <input type="radio" class="foundation_type" name="foundation_type" id="foundation3">
                            <label for="foundation3">Свайный</label>
                        </div>
                        <div class="parameters">
                            <p class="big_title">Параметры</p>
                            <div class="foundation_type">
                                <a href=""><img class="icon_fond" src="image/icon_fund1.png"></a>
                                <a href=""><img class="icon_fond" src="image/icon_fund2.png"></a>
                                <a href=""><img class="icon_fond" src="image/icon_fund3.png"></a>
                                <a href=""><img class="icon_fond" src="image/icon_fund4.png"></a>
                            </div>
                            <div class="parameters_fields">
                                <div class="width">
                                    <p class="parameters_title">Ширина: </p>
                                    <input class="parameters_input" type="number" id="A">
                                    <p class="parameter_unit">метров</p>
                                </div>
                                <div class="length">
                                    <p class="parameters_title">Длина: </p>
                                    <input class="parameters_input" type="number" id="B">
                                    <p class="parameter_unit">метров</p>
                                </div>
                                <div class="height">
                                    <p class="parameters_title">Высота: </p>
                                    <input class="parameters_input" type="number" id="C">
                                    <p class="parameter_unit">мм</p>
                                </div>
                                <div class="thickness">
                                    <p class="parameters_title">Толщина: </p>
                                    <input class="parameters_input" type="number" id="D">
                                    <p class="parameter_unit">мм</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="draft">
                <p class="big_title">Черчеж</p>
                <div class="draft_image">
                    <img src="image/foundation.jpg">
                </div>
            </div>
        </div>
        <div class="result_section">
            <p class="result_section_title">Расчеты</p>
            <div class="result_table">
                <div class="result_calc_image">
                    <img src="image/razrez-chertezh-fundamenta_29.jpg">
                </div>
                <div class="result_calc_words">
                    <p class="result_calc_title">Лента</p>
                    <div class="result_calc_words_main">
                        <div class="result_calc_words_titles">
                            <p>Обьем бетона</p>
                            <p>Внешний периметр бетона</p>
                            <p>Общая длина ленты</p>
                            <p>Площадь подошвы ленты</p>
                            <p>Площадь внешней боковой поверхности</p>
                            <p>Вес бетона</p>
                            <p>Нагрузка на почву от фундамента</p>
                        </div>
                        <div class="result_calc_words_parameters">
                            <p><output id="beton_volume"></output> метров³</p>
                            <p><output id="perimetr_vneshni"></output> метров</p>
                            <p><output id="obshaya_dlina"></output> метров</p>
                            <p><output id="ploshad_podoshva"></output> м2</p>
                            <p><output id="vneshni_bokovoi"></output> м2</p>
                            <p><output id="ves_beton"></output> тонн</p>
                            <p><output id="nagruzka"></output> кг/см2</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result_table">
                <div class="result_calc_image">
                    <img src="image/image018.png">
                </div>
                <div class="result_calc_words">
                    <p class="result_calc_title">Опалубка</p>
                    <div class="result_calc_words_main">
                        <div class="result_calc_words_titles">
                            <p>Минимальная толщина доски при опорах через каждый 1 метр</p>
                            <p>Кол-во досок для опалубки размером 150 x 6000 мм</p>
                            <p>Объем пиломатериала для опалубки</p>
                        </div>
                        <div class="result_calc_words_parameters">
                            <p><output id="a_min_tolsh"></output> мм</p>
                            <p><output id="kolichestvo_dosok"></output> шт</p>
                            <p><output id="objem_pilomat"></output> м3</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="result_table">
                <div class="result_calc_image">
                    <img src="image/armatura.jpg">
                </div>
                <div class="result_calc_words">
                    <p class="result_calc_title">Арматура</p>
                    <div class="result_calc_words_main">
                        <div class="result_calc_words_titles">
                            <p>Величина защитного слоя</p>
                            <p>Диаметр продольных стержней рабочей арматуры</p>
                            <p>Диаметр поперечных стержней арматуры (хомутов)</p>
                            <p>Шаг поперечных стержней арматуры (хомутов)</p>
                            <p>Величина нахлеста арматуры</p>
                            <p>Общая длина продольной арматуры диаметром 14мм.</p>
                            <p>Общий вес продольной арматуры</p>
                            <p>Общая длина поперечной арматуры диаметром 6мм.</p>
                            <p>Общий вес поперечной арматуры (хомутов) </p>
                            <p>Общий вес всей арматуры</p>
                        </div>
                        <div class="result_calc_words_parameters">
                            <p><output id="beton_volume"></output>44 мм</p>
                            <p><output id="beton_volume"></output>14 мм</p>
                            <p><output id="beton_volume"></output>6 мм</p>
                            <p><output id="beton_volume"></output>455 мм</p>
                            <p><output id="beton_volume"></output>686 мм</p>
                            <p><output id="beton_volume"></output>111.8 метров</p>
                            <p><output id="beton_volume"></output>135 кг</p>
                            <p><output id="beton_volume"></output>127.6 метров</p>
                            <p><output id="beton_volume"></output>28 кг</p>
                            <p><output id="beton_volume"></output>163 кг</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
</body>

</html>

<?php 
} else {
	header("Location:$base_url/Log.php?error=4");
} 

}else{
	header("Location:$base_url/Log.php?error=5");
}?>