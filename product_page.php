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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
                    <a href="log.php" class="btn_SignIn"><?php echo $user->full_name; ?></a>
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

    <?php 
$username = $user->login;
 if ($username == 'admin') {
?>

    <section class="main">
        <div class="content_main">
            <div class="left_blog">
                <div class="sider">
                    <ul class="sider_menu">
                        <li class="back_cat" id="this">
                            <a href="shop.php?key=Освещение" class="cat_href">
                                <h6 class="this">
                                    < Главная</h6>
                            </a>
                        </li>
                        <?php 
              $key = $_GET["key"];
              $categories = $db->query("SELECT * FROM stroy_sub_categories WHERE categ_id = $key");
              if($categories->num_rows > 0){
                while ($category = $categories->fetch_object()){
              ?>
                        <li class="menu_list">
                            <div class="list_item">
                                <a href="shop_after.php?key=<?php echo $category->categ_id;?>&title=<?php echo $category->title?>&sub_id=<?php echo $category->id?>"
                                    class="cat_href"><?php echo $category->title; ?></a>
                            </div>
                        </li>
                        <?php 
                }
              }
              ?>
                    </ul>
                </div>
            </div>
            <div class="right_blog">
                <div class="toolbar">
                    <?php 
              if (isset($_GET["title"])&&strlen($_GET["title"])>0) {
                $title = $_GET["title"];
              
            ?>
                    <h1 class="category_title"><?php echo $title;?></h1>
                    <?php  
              }else{
            ?>
                    <h1 class="category_title">Товар</h1>
                    <?php 
              }
             ?>
                </div>
                <?php 
              $id = $_GET["prod_id"];
              $sub_iddd = $_GET["sub_id"];
              $keyyy = $_GET["key"];
              $shop_items = $db->query("SELECT * FROM shop_items WHERE id = $id");
              if($shop_items->num_rows > 0){
                while ($shop_item = $shop_items->fetch_object()){
            ?>
                <div>

                    <div class="shop_main">
                        <div class="info_item_image">
                            <a class="info_page_image" href="">
                                <img class="info_item_image_inner" src="<?php echo $shop_item->img ?>">
                            </a>
                        </div>
                        <div class="item_item_info">
                            <a class="info_item_title" href=""><?php echo $shop_item->title ?></a>
                            <div class="info_vendor">
                                <p class="info_item_company"><?php echo $shop_item->manufacturer ?></p>
                                <p>, артикул: </p>
                                <p class="info_item_vendor"><?php echo $shop_item->vendor_code ?></p>
                            </div>
                            <hr class="hrr">
                            <div class="price_blog">
                                <b>Цена на iBuild: </b>
                                <b class="blue_bold">от <?php echo $shop_item->price_ibuild ?> тенге</b>
                            </div>
                            <p class="retail_price">Розничная цена: <?php echo $shop_item->price_retail ?></p>
                            <p class="retail_price">Количество в складе, шт: <?php echo $shop_item->amount ?></p>
                            <button class="buy_item_button_save">Купить</button>
                        </div>
                    </div>


                </div>
                <div class="comment_blog">
                    <form method="POST"
                        action="api/blog/save_comment.php?item_id=<?php echo $shop_item->id?>&key=<?php echo $keyyy?>&sub_id=<?php echo $sub_iddd?>">
                        <p class="comment_username"><?php echo $user->full_name ?></p>
                        <textarea class="comment_textarea" placeholder="Ваш комментарий" name="comment"></textarea>
                        <br>
                        <button class="send_comment_button"> Отправить</button>
                    </form>
                </div>
                <hr class="hrrr">
                <div class="show_comments">
                    <?php 
              $comments = $db->query("SELECT * FROM item_comments where item_id = $id");
              if($comments->num_rows > 0){
                while ($comment = $comments->fetch_object()){
                  $exact_id = $comment->user_id;
                  $exact_usernames = $db->query("SELECT * FROM ibuild_users where id = $exact_id");
                  if($exact_usernames->num_rows > 0){
                    while ($exact_username = $exact_usernames->fetch_object()){
            ?>
                    <div class="exact_comment">
                        <p class="comment_owner"><?php echo $exact_username->full_name; ?></p>
                        <p class="comment_text"><?php echo $comment->comment; ?></p>
                    </div>
                    <?php 
              }
            }}}
            ?>

                </div>
                <?php 
              }
            }
            ?>
            </div>
        </div>
    </section>

    <?php 
  }else {

 ?>
    <section class="main">
        <div class="content_main">
            <div class="left_blog">
                <div class="sider">
                    <ul class="sider_menu">
                        <li class="back_cat" id="this">
                            <a href="shop.php?key=Освещение" class="cat_href">
                                <h6 class="this">
                                    < Главная</h6>
                            </a>
                        </li>
                        <?php 
              $sub_id = $_GET["sub_id"];
              $key = $_GET["key"];
              $categories = $db->query("SELECT * FROM stroy_sub_categories WHERE categ_id = $key");
              if($categories->num_rows > 0){
                while ($category = $categories->fetch_object()){
              ?>
                        <li class="menu_list">
                            <div class="list_item">
                                <a href="shop_after.php?key=<?php echo $category->categ_id;?>&title=<?php echo $category->title?>&sub_id=<?php echo $category->id?>"
                                    class="cat_href"><?php echo $category->title; ?></a>
                            </div>
                        </li>
                        <?php 
                }
              }
              ?>
                    </ul>
                </div>
            </div>
            <div class="right_blog">
                <div class="toolbar">
                    <?php 
              if (isset($_GET["title"])&&strlen($_GET["title"])>0) {
                $title = $_GET["title"];
              
            ?>
                    <h1 class="category_title"><?php echo $title;?></h1>
                    <?php  
              }else{
            ?>
                    <h1 class="category_title">Товар</h1>
                    <?php 
              }
             ?>
                </div>
                <?php 
              $id = $_GET["prod_id"];
              $sub_iddd = $_GET["sub_id"];
              $keyyy = $_GET["key"];
              $shop_items = $db->query("SELECT * FROM shop_items WHERE id = $id");
              if($shop_items->num_rows > 0){
                while ($shop_item = $shop_items->fetch_object()){
            ?>
                <div>

                    <div class="shop_main">
                        <div class="info_item_image">
                            <a class="info_page_image" href="">
                                <img class="info_item_image_inner" src="<?php echo $shop_item->img ?>">
                            </a>
                        </div>
                        <div class="item_item_info">
                            <a class="info_item_title" href=""><?php echo $shop_item->title ?></a>
                            <div class="info_vendor">
                                <p class="info_item_company"><?php echo $shop_item->manufacturer ?></p>
                                <p>, артикул: </p>
                                <p class="info_item_vendor"><?php echo $shop_item->vendor_code ?></p>
                            </div>
                            <hr class="hrr">
                            <div class="price_blog">
                                <b>Цена на iBuild: </b>
                                <b class="blue_bold">от <?php echo $shop_item->price_ibuild ?> тенге</b>
                            </div>
                            <p class="retail_price">Розничная цена: <?php echo $shop_item->price_retail ?></p>
                            <p class="retail_price">Количество в складе, шт: <?php echo $shop_item->amount ?></p>
                            <button class="buy_item_button_save">Купить</button>
                        </div>
                    </div>


                </div>
                <div class="comment_blog">
                    <form method="POST"
                        action="api/blog/save_comment.php?item_id=<?php echo $shop_item->id?>&key=<?php echo $keyyy?>&sub_id=<?php echo $sub_iddd?>">
                        <p class="comment_username"><?php echo $user->full_name ?></p>
                        <textarea class="comment_textarea" placeholder="Ваш комментарий" name="comment"></textarea>
                        <br>
                        <button class="send_comment_button"> Отправить</button>
                    </form>
                </div>
                <hr class="hrrr">
                <div class="show_comments">
                    <?php 
              $comments = $db->query("SELECT * FROM item_comments where item_id = $id");
              if($comments->num_rows > 0){
                while ($comment = $comments->fetch_object()){
                  $exact_id = $comment->user_id;
                  $exact_usernames = $db->query("SELECT * FROM ibuild_users where id = $exact_id");
                  if($exact_usernames->num_rows > 0){
                    while ($exact_username = $exact_usernames->fetch_object()){
            ?>
                    <div class="exact_comment">
                        <p class="comment_owner"><?php echo $exact_username->full_name; ?></p>
                        <p class="comment_text"><?php echo $comment->comment; ?></p>
                    </div>
                    <?php 
              }
            }}}
            ?>

                </div>
                <?php 
              }
            }
            ?>
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
  }
} else {
  header("Location:$base_url/Log.php?error=4");
} 

}else{
  header("Location:$base_url/Log.php?error=5");
}?>