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
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    <script src="javascript/authentication.js"></script>
    <script src="javascript/change_password.js"></script>

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
            <div class="container1">
                <div class="header-inner1">
                    <div class="header-logo1">
                        <a href="AboutUS.php" class="inner_logo logo_link" style="color: #2D426D;">iBuild</a>
                    </div>
                    <div class="header-nav1">

                        <ul>
                            <li><a id="current" href="profile.php">Профиль</a></li>

                            <li><a  href="Saved.php">Сохраненные</a></li>

                        </ul>


                    </div>

                </div>
                <div class="header_left_inner1">
                    <div class="icons" style="display: flex;">
                        <a href="Log.php" class="logo_icon" style="margin: 25px;">
                            <svg class="header_logo_svd" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <g>
                                                <path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0     c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333     h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251     l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z" data-original="#000000" style="" class="" />
                                                <path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437     l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128     C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512     c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715     C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992     c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907     l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491     v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z" data-original="#000000" style="" class="" />
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>


        </header>




    <section class="general">
        <div class="container1">
            <div class="main_section">
            <div id="scene" class="background_profile" data-hover-only="true" data-relative-input="true">
                    <img src="image/background_4.png" data-depth="0.2" width="1500px" height="1300px" alt="">
                </div>                <div class="profile_block">
                    <div class="img_user_block">
                    <svg class="header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="100" height="100" x="0" y="0" viewBox="0 0 460.8 460.8" style="margin-top: 20px; enable-background:new 0 0 512 512" xml:space="preserve" class="">
                                <g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641    S296.261,0,230.432,0z" fill= #2D426D data-original="#000000" style="" class="" />
                                        </g>
                                    </g>
                                    <g xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784    c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555    c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943    c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167    c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02    c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898    C436.8,341.682,437.322,338.024,435.755,334.89z" fill= #2D426D  data-original="#000000" style="" class="" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                    </div>
                    <div class="user_inform_form">
                        <form class="landing_form_input">
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Номер-телефона</label> -->
                                <div class="passw_block">
                                <input id = "old_password" class="form_control" type="password" name="" name placeholder="Введите старый пароль">                                        
                                    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>

                                </div>

                            </div>
                            <div class="form_wrap">
                                <!-- <label class="input_label" >Номер-телефона</label> -->
                                <div class="passw_block">
                                <input id = "new_password1" class="form_control" type="password" name="" name placeholder="Введите новый пароль">                                        
                                    <span toggle="#password2" class="fa fa-fw fa-eye field-icon toggle-password2"></span>
                                </div>

                            </div>
                            <div class="form_wrap">
                                <input id="new_password2" class="form_control" type="password" name="" name placeholder="Подтвердите новый пароль"><span class="form_validation"></span>  
                            </div>
                            <div class="form_wrap_calc">
                                <button class="button_primary" type="button" onclick="changePassword()">Сохранить</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>



    </section>

        </div>
        <script src="javascript/parallaxByID.js"></script>
        <script src="javascript/toogle_btn.js"></script>
    
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