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

<body class="about">
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
                <a href="AboutUs.php" class="categories">О Нас</a>
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
                <a href="" class="page_employee" id="opened">Чат</a>
            </div>
        </div>
    </section>
    <section class="main_content">
        <div class="conversation_background">
            <div class="conver_left_side">
                <div class="left_title">
                    <p class="left_title_text">Сообщения</p>
                </div>
                <div class="conversation_items">
                    <?php 
                     $username = $user->login;
                     $conversations = $db->query("SELECT * FROM conversation WHERE first_user = '$username' OR second_user = '$username'");
                     $partner_username = NULL;
                     
                     if($conversations->num_rows > 0){
                     	while ($conversation = $conversations->fetch_object()){
                     		$date = substr(strval($conversation->date), -7, -3);
                     
                     		if ($conversation->first_user == $username){
                     			$partner_username = $conversation->second_user;
                     		}else {
                     			$partner_username = $conversation->first_user;
                     		}
                     		
                     		$partnerrr_id = $db->query("SELECT * FROM ibuild_users WHERE login = '$partner_username'");
                     		if($partnerrr_id->num_rows > 0){
                               					while ($partner_idd = $partnerrr_id->fetch_object()){
                     
                     ?>
                    <a href="conversation_page.php?partner_id=<?php echo $partner_idd->id ?>">
                        <div class="conversation_item">
                            <div class="conversation_item_in">
                                <div class="conv_partner_name">
                                    <p class="conv_partner_name_p"> <?php  echo $partner_username?> </p>
                                </div>
                                <div class="conv_last_message_time">
                                    <p class="conv_last_message_time_p"> <?php  echo $date;?> </p>
                                </div>
                            </div>
                            <div class="conversation_item_last_message">
                                <p class="conversation_item_usertype_p"><?php echo $partner_idd->user_type;?></p>
                                <p class="conversation_item_last_message_p"><?php echo $conversation->last_message;?>
                                </p>
                            </div>
                        </div>
                    </a>
                    <?php 
                     }
                     }
                     }
                     }
                     ?>
                </div>
            </div>
            <?php 
               if (isset($_GET["partner_id"])&&strlen($_GET["partner_id"])>0) {
                	$partner_id = $_GET["partner_id"];
                	$partner_information = $db->query("SELECT * FROM ibuild_users WHERE id=$partner_id");
                	if($partner_information->num_rows > 0){
                		while ($partner = $partner_information->fetch_object()){
               
               ?>
            <div class="conver_right_side">
                <div class="right_title">
                    <p class="right_title_text"><?php echo $partner->full_name ?></p>
                </div>
                <div class="messages_block">
                    <div class="messages_block_in">
                        <?php 
                        $first_user = $partner->login;
                        $second_user = $user->login;
                        
                        $needed_conversation = $db->query("SELECT * FROM conversation WHERE (first_user = '$first_user' AND second_user = '$second_user') OR (first_user = '$second_user' AND second_user = '$first_user') ");
                        if($needed_conversation->num_rows > 0){
                         						while ($exact_conversation = $needed_conversation->fetch_object()){
                         							$conversation_id = $exact_conversation->id;
                        
                         							$messages = $db->query("SELECT * FROM messages WHERE conversation_id=$conversation_id");
                         							if($messages->num_rows > 0){
                         								while ($message = $messages->fetch_object()){
                         									$owner = $message->owner_email;
                         									$partnerr = $message->partner_email;
                         									$user_em = $user->login;
                         									$message_time = substr(strval($message->date), -7, -3);
                         									if($owner != $user_em) {
                         									
                        ?>
                        <div class="messages_block_messages">
                            <div class="exact_message">
                                <div class="exact_message_fullName">
                                    <p class="exact_message_fullName_p"><?php echo $owner?></p>
                                    <p class="exact_message_time"><?php echo $message_time?></p>
                                </div>
                                <div class="exact_message_text">
                                    <p class="exact_message_text_p"><?php echo $message->message_text ?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                        }else{
                        ?>
                        <div class="messages_block_messages" style="margin-left: auto;">
                            <div class="exact_message">
                                <div class="exact_message_fullName">
                                    <p class="exact_message_fullName_p"><?php echo $user_em ?></p>
                                    <p class="exact_message_time"><?php echo $message_time?></p>
                                </div>
                                <div class="exact_message_text">
                                    <p class="exact_message_text_p"><?php echo $message->message_text ?></p>
                                </div>
                            </div>
                        </div>
                        <?php }}}}} ?>
                    </div>
                    <form
                        action="api/blog/send_message.php?partner_email=<?php echo $partner->login ?>&owner_email=<?php echo $user->login ?>&partner_id=<?php echo $partner_id ?>"
                        enctype="multipart/form-data" method="POST">
                        <div class="messages_block_field">
                            <div class="messages_input">
                                <input class="message_input" type="text" name="message">
                            </div>
                            <div class="messages_send">
                                <button type="submit" class="message_send">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php 
               }
               }
               } else {
               ?>
            <div class="conver_right_side">
                <div class="right_title">
                    <p class="right_title_text"></p>
                </div>
                <div class="messages_block">
                    <div class="messages_block_in" style="display: block;">
                        <p style="text-align: center;margin-top: 200px;font-size: 23px;font-weight: 500;">Выберите
                            собеседника</p>
                    </div>
                </div>
            </div>
            <?php 
               }
               ?>
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