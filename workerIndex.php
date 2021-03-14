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
                <a href="index.php" class="page_clients">Клиентам</a>
                <a href="" class="page_workers" id="opened">Работникам</a>
                <a href="" class="page_employee">Продавцам</a>
            </div>
        </div>
    </section>
    <section class="main_content">
        <div style="margin-top: 50px;text-align: center;">
            <a class="btn" href="listResumes.php">Нанять работника</a>
        </div>
        <?php
			$resumes = $db->query("SELECT * FROM resume where user_id = $id");
			if($resumes->num_rows > 0){
				while ($resume = $resumes->fetch_object()){
			?>
        <div class="resume_section">
            <div class="my_resume">
                <div class="resume_form" style="">
                    <p class="resume_main_title">Фото</p>
                    <div class="image_side">
                        <img class="resume_img" src="<?php echo $resume->img ?>">
                    </div>

                    <p class="resume_main_title">Зарплата</p>
                    <div class="salary_inner">
                        <p class="salary_title">От: </p>
                        <p class="salary_value"><?php echo $resume->salary_begin;?></p>
                        <p class="salary_title">До: </p>
                        <p class="salary_value"><?php echo $resume->salary_end;?></p>
                    </div>

                    <p class="resume_main_title">Тип занятности</p>
                    <p class="work_type_value"><?php echo $resume->work_type;?></p>

                    <p class="resume_main_title">О себе</p>
                    <p class="work_type_value"><?php echo $resume->about_yourself;?></p>
                </div>
                <a class="btn" href="api/blog/del_resume.php?id=<?php echo $resume->id?>">Удалить</a>
            </div>
        </div>
        <?php
				}
			}else {
		?>
        <div class="resume_section">
            <div class="resume_form">
                <form class="form_worker" action="api/blog/add_resume.php" enctype="multipart/form-data" method="POST">
                    <p class="resume_main_title">Фото</p>
                    <input type="file" name="image">
                    <div class="worker_salary">
                        <p class="resume_main_title">Зарплата</p>
                        <div class="salary_inner">
                            <p class="salary_title">От: </p>
                            <input class="input_salary" type="number" name="salary_begin">
                            <p class="salary_title"> До: </p>
                            <input class="input_salary" type="number" name="salary_end">
                        </div>
                    </div>

                    <p class="resume_main_title margin_top">Тип занятности</p>
                    <select name="work_type" class="work_types">
                        <option selected="selected" disabled>Выберите тип работы</option>
                        <option value="Фундамент">Фундамент</option>
                        <option value="Электрика">Электрика</option>
                        <option value="Кровля">Кровля</option>
                        <option value="Теплотехника">Теплотехника</option>
                        <option value="Стены">Стены</option>
                        <option value="Заборы">Заборы</option>
                        <option value="Другое">Другое</option>
                    </select>
                    <br>

                    <p class="resume_main_title margin_top">О себе</p>

                    <textarea class="input_about_yourself" name="about_yourself"></textarea>
                    <br>
                    <div style="width: 100%;text-align: center; margin-top: 20px;">
                        <button type="submit" class="btn">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
        <?php		
			}
		?>
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