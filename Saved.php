<!DOCTYPE html>
<html>

<head>
    <title>Saved</title>
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
                            <li><a href="profile.php">Профиль</a></li>

                            <li><a id="current" href="Saved.php">Сохраненные</a></li>

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
                <div class="sidenav_left">

                <div class="left_menu ">
                    <div class="date_sidenav">02.04.2021ж</div>
                    <ul id="saves_title"> </ul>
                </div>

                </div>
                <div class="main_section">
                    <div class="expand_img" style="margin-top: 40px;">
                        <h3 style=" padding:px; text-align:center; font-size:px; line-height:px; letter-spacing: 2px; font-weight:normal;">Ленточный фундамент (III секция) <div class="h3_border"></div>
                        </h3>
                        <div class="expand_img_svg">
                            <img id="myBtn1" src="image/question-mark.svg" alt="">
                        </div>
                    </div>

                    <div id="myModal1" class="modal modal11">
                        <!-- Modal content -->
                        <div class="modal-content modal-content1">
                            <span class="close close1">&times;</span>
                            <img src="image/3s.jpg" alt="">
                        </div>
                    </div>
                    <div class="target target-1" id="block1">
                        <div class="landing_large_calc">
                            <form class="landing_form_input_calc">
                                <fieldset class="fields">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[А]:</label>
                                        <input class="form_control_calc" type="number" placeholder="м" id="a_length"><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[B]:</label>
                                        <input class="form_control_calc" type="number" placeholder="м" id="b_length"><span class="form_validation"></span>
                                    </div>
                                </fieldset>
                                <fieldset class="fields">
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Размер[C]:</label>
                                        <input class="form_control_calc" type="number" placeholder="см" id="c_length"><span class="form_validation"></span>
                                    </div>
                                    <div class="form_wrap_calc">
                                        <label class="input_label">Стоимость бетона за м3:</label>
                                        <input class="form_control_calc" type="number" placeholder="тенге" id="cost"><span class="form_validation"></span>
                                    </div>
                                </fieldset>

                            </form>

                        </div>
                        <div class="result_calc_svd">
                            <div class="result_calc_words_main">
                                <div class="result_calc_words_titles">
                                    <p>Площадь основания плиты:</p>
                                    <p>Объем бетона:</p>
                                    <p>Периметр плиты:</p>
                                    <p>Площадь боковой поверхности:</p>
                                    <p>Вес бетона:</p>
                                    <p>Нагрузка на почву:</p>
                                    <p>Стоимость бетона:</p>
                                </div>
                                <div class="result_calc_words_parameters">
                                    <p><output id="a"></output> м2</p>
                                    <p><output id="b"></output> метров³</p>
                                    <p><output id="c"></output> метров</p>
                                    <p><output id="d"></output> м2</p>
                                    <p><output id="e"></output> кг</p>
                                    <p><output id="f"></output> кг/см2</p>
                                    <p><output id="g"></output> тенге</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="button_primary" type="submit"><a href="#">Распечатать</a>
                    </button>
                </div>

            </div>



        </section>
    </div>
</body>
<script>
    var modal1 = document.getElementById("myModal1");
    var btn1 = document.getElementById("myBtn1");
    var span1 = document.getElementsByClassName("close1")[0];
    btn1.onmouseenter = function() {
        modal1.style.display = "block";
    }
    span1.onclick = function() {
        modal1.style.display = "none";
    }
    window.onclick = function(event) {
        modal1.style.display = "none";
    }
</script>

</html>