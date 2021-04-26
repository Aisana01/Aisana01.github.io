<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="descroption" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    <script src="javascript/authentication.js"></script>
    <script src="javascript/get_saves.js"></script>

    <link rel="stylesheet" type="text/css" href="style/all.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
</head>

<body>
    <div class="rainbow"></div>
    <header class="header_pr">
        <div class="container">
            <div class="header-inner1">
                <div class="header-logo1">
                    <a href="AboutUS.php" class="inner_logo logo_link" style="color: #2D426D;">iBuild</a>
                </div>
                <div class="header-nav1">
                    <ul>
                        <li><a href="profile.php">Профиль</a></li>
                        <li><a id="current" href="Saved.php">Сохраненные</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </header>




    <section class="general">
        <div class="container1">
            <div class="sidenav_left">
                <div class="left_menu ">
                    <div class="date_sidenav">02.04.2021ж</div>
                    <ul id="saves_title"> </ul>
                </div>
            </div>
            <div class="main_section">
                <h1 class="title_left_main">Расчет ленточного фундамента(2 секции)</h1>
                <div class="left_words_main">
                    <div class="left_words_titles">
                        <p>Площадь основания плиты:</p>
                        <p>Объем бетона:</p>
                        <p>Периметр плиты:</p>
                        <p>Площадь боковой поверхности:</p>
                        <p>Вес бетона:</p>
                        <p>Нагрузка на почву:</p>
                        <p>Стоимость бетона:</p>
                    </div>
                    <div class="left_words_titles_parameters">
                        <p><output id=""></output> м2</p>
                        <p><output id=""></output> м³</p>
                        <p><output id=""></output> м</p>
                        <p><output id=""></output> м2</p>
                        <p><output id=""></output> кг</p>
                        <p><output id=""></output> кг/см2</p>
                        <p><output id=""></output> тенге</p>
                    </div>
                </div>
                <button class="button_primary" type="submit"><a href="#">Распечатать</a>
                </button>
            </div>
        </div>



    </section>

    <!-- <footer class="content_blog_footer_about">
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
    </footer> -->

</body>

</html>