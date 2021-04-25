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
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="javascript/parallax.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

    <script src="javascript/jquery-3.1.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="javascript/animate_plugin/animate.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap' rel='stylesheet' type='text/css'>

</head>

<body>
    <div class="wrapper">
    <div class="rainbow"></div>
    <header class="header_pr">
        <div class="container">
            <div class="header-inner1">
                <div class="header-logo1">
                    <a href="AboutUS.php" class="inner_logo logo_link" style="color: #2D426D;">iBuild</a>
                </div>
                <div class="header-nav1">

                    <ul>
                        <li><a id="current" href="profile.php">Профиль</a></li>

                        <li><a href="Saved.php">Сохраненные</a></li>

                    </ul>


                </div>

            </div>

        </div>


    </header>




    <section class="general">
        <div class="container1">
            <div class="main_section">
                <div id="scene" class="background_profile" data-hover-only="true" data-relative-input="true">
                    <img src="image/background_4.png" data-depth="0.2" width="1500px" height="1300px" alt="">
                </div>
                <div class="profile_block">
                    <div class="img_user_block">
                        <img src="image/Elya.jpeg" alt="">
                    </div>
                    <div class="user_inform_form">
                        <form class="landing_form_input">
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Имя</label> -->
                                <input class="form_control" type="text" name="" name placeholder="Имя"><span class="form_validation"></span>
                            </div>
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Имя</label> -->
                                <input class="form_control" type="text" name="" name placeholder="Фамилия"><span class="form_validation"></span>
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
                                <div class="passw_block">
                                <input id = "password" class="form_control" type="password" name="" name placeholder="Пароль">                                        
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                </div>
                                <div class="change_passwd"><a href="changePasswd.php">Сменить пароль...</a></div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>


    </section>
    <script src="javascript/parallaxByID.js"></script>
    <script>
        $('.toggle-password').on('click', function() {
            $(this).toggleClass('fa-eye fa-eye-slash');
            var input = document.getElementById('password');
            console.log(input);
            console.log(input.type);
            if (input.type == 'password') {
                input.type = 'text';
            } else {
                input.type = 'password';
            }
            console.log(input);
        });
    </script>
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
    </div>
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