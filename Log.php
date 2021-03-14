<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="description" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">

    <link rel="shortcut icon" href="../favicon.ico">
    <link
        href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap'
        rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />

</head>

<body>
<div class = "block_img_container">   
<!--<header>
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
                    <a href="Log.php" class="btn_SignIn">ВХОД</a>
                </div>
            </div>
        </div>
        <div class="bottom_header">
            <div class="bottom_header_in">
                <a href="" class="categories">Фундамент</a>
                <a href="" class="categories">Электрика</a>
                <a href="" class="categories">Кровля</a>
                <a href="" class="categories">Теплотехника</a>
                <a href="" class="categories">Стены</a>
                <a href="" class="categories">Матералы</a>
                <a href="" class="categories">Заборы</a>
                <a href="AboutUs.php" class="categories">О Нас</a>
            </div>
        </div><!-->

    </header>
    <section class="section_log">
        <div class="container">
            <div class="cards_log">
               <!-- <img src="image/template_index.png"
                    width="200px;"><!-->
                <div class="card_log-item">
                    <h5 class="card_log-item--title">
                    Войти
                    </h5>
                    <div class = "alert_block">
                        <h6 class = "alert_text">Впервые в Ibuild?</h6>
                        <a class="signup_log" href="Register.php">Завеси аккаунт</a>
                    </div>
                    <div class="form-group">
                        <form class="ps-form--subscribe-offer" action="api/authentication/sign_in.php" method="POST">
                            <h6>Имя пользователя или адрес электронной почты</h6><input class="form_log-control" type="text" name="login" placeholder="Еmail...">
                            <h6>Пароль</h6><input class="form_log-password" type="password" name="password" placeholder="Пароль...">
                            
                        </form>
                        <button type="submit" class="btn">Вход</button>
                    </div>
                    <p class="login-footer_log">
                        <a class="forgot_log" href="#">Забыли пароль?</a> <br>
                        
                    </p>
                </div>
            </div>
        </div>
    </section>
    <footer style="max-width: 1350px;margin: auto;">
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
</div>
</body>

</html>