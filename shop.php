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
                            <a href="index.php" class="cat_href">
                                <h6 class="this">Главная</h6>
                            </a>
                        </li>
                        <?php 
              $categories = $db->query("SELECT * FROM stroy_categories");
              if($categories->num_rows > 0){
                while ($category = $categories->fetch_object()){
              ?>
                        <li class="menu_list">
                            <div class="list_item">
                                <a href="shop.php?key=<?php echo $category->title; ?>"
                                    class="cat_href"><?php echo $category->title; ?></a>
                                <a href="api/blog/del_category.php?id=<?php echo $category->id; ?>"
                                    class="cat_href_category_del">delete</a>
                            </div>
                        </li>
                        <?php 
                }
              }
              ?>
                    </ul>
                    <div class="add_product">
                        <form method="POST" action="api/blog/save_category.php" enctype="multipart/form-data">

                            <input type="text" name="title" placeholder="Enter title">

                            <button type="submit">Save</button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="right_blog">
                <div class="toolbar">
                    <?php 
              if (isset($_GET["key"])&&strlen($_GET["key"])>0) {
                $key = $_GET["key"];
              
            ?>
                    <h1 class="category_title"><?php echo $key;?></h1>
                    <?php  
              }else{
            ?>
                    <h1 class="category_title">Все категории</h1>
                    <?php 
              }
             ?>
                </div>
                <div class="add_product">
                    <form method="POST" action="api/blog/save_sub_category.php" enctype="multipart/form-data">

                        <input type="text" name="title" placeholder="Enter title">
                        <input type="file" name="image">
                        <select name="categ_id">

                            <?php
                  $query1 = $db->query("SELECT * FROM stroy_categories");
                    if($query1->num_rows > 0){
                      while ($row1 = $query1->fetch_object()){
                  ?>
                            <option value="<?php echo $row1->id; ?>"><?php echo $row1->title; ?></option>
                            <?php
                      }
                    }
                  ?>
                        </select>

                        <button type="submit">Save</button>

                    </form>
                </div>

                <div class="product">
                    <ul class="product_item">
                        <?php 
                if (isset($_GET["key"])&&strlen($_GET["key"])>0) {
                  $key = $_GET["key"];
                  $sub_categories = $db->query("SELECT * FROM stroy_sub_categories where categ_title = '$key'");
                  if($categories->num_rows > 0){
                    while ($sub_category = $sub_categories->fetch_object()){
                ?>
                        <li class="item">
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="img_href"><img src="<?php echo $sub_category->img; ?>" class="product_image"></a>
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="title_href"><?php echo $sub_category->title; ?></a>
                            <br>
                            <a href="api/blog/del_sub_category.php?id=<?php echo $sub_category->id; ?>">delete</a>
                        </li>

                        <?php 
                }
              } 
              ?>

                        <?php
              } else { 
                $sub_categories = $db->query("SELECT * FROM stroy_sub_categories");
                if($categories->num_rows > 0){
                  while ($sub_category = $sub_categories->fetch_object()){
                ?>
                        <li class="item">
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="img_href"><img src="<?php echo $sub_category->img; ?>" class="product_image"></a>
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="title_href"><?php echo $sub_category->title; ?></a>
                            <br>
                            <a href="api/blog/del_sub_category.php?id=<?php echo $row->id; ?>">delete</a>
                        </li>
                        <?php
                  } 
                }
              }
              ?>
                    </ul>

                </div>

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
                            <a href="index.php" class="cat_href">
                                <h6 class="this">Главная</h6>
                            </a>
                        </li>
                        <?php 
              $categories = $db->query("SELECT * FROM stroy_categories");
              if($categories->num_rows > 0){
                while ($category = $categories->fetch_object()){
              ?>
                        <li class="menu_list">
                            <div class="list_item">
                                <a href="shop.php?key=<?php echo $category->title; ?>"
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
              if (isset($_GET["key"])&&strlen($_GET["key"])>0) {
                $key = $_GET["key"];
              
            ?>
                    <h1 class="category_title"><?php echo $key;?></h1>
                    <?php  
              }else{
            ?>
                    <h1 class="category_title">Все категории</h1>
                    <?php 
              }
             ?>
                </div>

                <div class="product">
                    <ul class="product_item">
                        <?php 
                if (isset($_GET["key"])&&strlen($_GET["key"])>0) {
                  $key = $_GET["key"];
                  $sub_categories = $db->query("SELECT * FROM stroy_sub_categories where categ_title = '$key'");
                  if($categories->num_rows > 0){
                    while ($sub_category = $sub_categories->fetch_object()){
                ?>
                        <li class="item">
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="img_href"><img src="<?php echo $sub_category->img; ?>" class="product_image"></a>
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="title_href"><?php echo $sub_category->title; ?></a>
                        </li>
                        <?php 
                }
              } 
              ?>

                        <?php
              } else { 
                $sub_categories = $db->query("SELECT * FROM stroy_sub_categories");
                if($categories->num_rows > 0){
                  while ($sub_category = $sub_categories->fetch_object()){
                ?>
                        <li class="item">
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="img_href"><img src="<?php echo $sub_category->img; ?>" class="product_image"></a>
                            <a href="shop_after.php?key=<?php echo $sub_category->categ_id;?>&sub_id=<?php echo $sub_category->id;?>&title=<?php echo $sub_category->title;?>"
                                class="title_href"><?php echo $sub_category->title; ?></a>
                        </li>
                        <?php
                  } 
                }
              }
              ?>
                    </ul>

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
  }
} else {
  header("Location:$base_url/Log.php?error=4");
} 

}else{
  header("Location:$base_url/Log.php?error=5");
}?>