<!-- <?php

        // include "config/db.php" ;
        // include "config/config.php" ;
        // session_start();
        // if(isset($_SESSION["user_id"])){
        // 	$id = $_SESSION["user_id"];
        // 	$query = $db->query("SELECT * FROM pocket_users WHERE id = $id");


        // 	if($query->num_rows>0){
        // 		$user = $query->fetch_object();

        ?> -->
<!DOCTYPE html>
<html>

<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta name="descroption" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <a href="index.php" class="logo_link" style="color: #2D426D;">iBuild</a>
                </div>
                <div class="header-nav1">

                    <ul>
                        <li><a id="current" href="AboutUS.php">Профиль</a></li>

                        <li><a href="rec.php">Сохраненные</a></li>

                    </ul>


                </div>

            </div>

        </div>


    </header>




    <section class="general">
        <div class="container1">
            <div class="main_section">
            <div class="background_profile"><img src="image/background_4.png" width="1000px" height="1000px" alt=""></div>
                <div class="profile_block">
                    <div class="img_user_block">
                        <img src="image/team2.jpg" alt="">
                    </div>
                    <div class="user_inform_form">
                        <form class="landing_form_input">
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Имя</label> -->
                                <input class="form_control" type="text" name="" name placeholder="Имя"><span class="form_validation"></span>
                            </div>
                            <div class="form_wrap">
                                <!-- <label class="input_label">Email</label> -->
                                <input class="form_control" type="email" name="" name placeholder="Email"><span class="form_validation"></span>
                            </div>
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Номер-телефона</label> -->
                                <input class="form_control" type="text" name="" name placeholder="Номер-телефона"><span class="form_validation"></span>
                            </div>
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Номер-телефона</label> -->
                                <input class="form_control" type="password" name="" name placeholder="Пароль"><span class="form_validation"></span>
                           <a href="">Сменить пароль...</a>
                            </div>
                            
                        </form>
                    </div>
                </div>

            </div>

        </div>



    </section>
    <footer class="content_blog_footer_about">
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
    </footer>
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