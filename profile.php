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
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <img src="image/AnimalsCare_C.png" width="250px;">
                </div>
                <div class="header-nav" id="nav">
                    <ul>
                        <li><a href="rec.php">HOME</a></li>
                        <li><a href="petshop.php">SHOP</a></li>
                        <li><a href="map.php">MAP</a></li>
                    </ul>
                </div>
                <div class="header-nav2_rec" id="nav">
                    <ul>
                        <li><a href=""><img class="search_btn" src="image/magnifying-glass.svg" width="15px;"></a></li>
                        <li onclick="showModal('show')"><a href="#"><img src="image/plus.svg" width="15px;"></a></li>
                        <li id="pagenav_optionsdivider" class="pagenav_optionsdivider"></li>
                        <li><a href="" class="user"><img src="image/user.svg" width="15px;"> </a></li>
                        <div class="dropdown">
                            <li><a href="" class="down"><?php echo $user->full_name; ?></a><img class="down_icon"
                                    src="image/down.svg" width="10px;"></li>
                            <div class="dropdown-content">
                                <a href="profile.php">Profile</a>
                                <a href="api/authentication/log_out.php">Logout</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="modal" id="modal_add">
                    <div class="modal_backdrop" onclick="showModal()"></div>
                    <div class="modal_inner">
                        <span class="modal_close" onclick="showModal()"><img src="image/back.svg" width="25"
                                height="25"></span>
                        <h1 class="Add">Adding a advert</h1>
                        <form method="POST" action="api/blog/save.php" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="title" placeholder="Enter nickname">
                            <div class="custom-select">
                                <select name="categ_id">
                                    <option>Select category:</option>
                                    <?php
										$query1 = $db->query("SELECT * FROM category");
										if($query1->num_rows > 0){
											while ($row1 = $query1->fetch_object()){
										?>
                                    <option value="<?php echo $row1->categ_id; ?>"><?php echo $row1->title; ?></option>

                                    <?php
											}
										}
									?>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="type" placeholder="Enter type">
                            <input type="text" class="form-control" name="age" placeholder="Enter age">
                            <input type="text" class="form-control" name="color" placeholder="Enter color">
                            <div class="custom-select">
                                <select name="categ_id">
                                    <option>Select shelter:</option>
                                    <?php
										$query1 = $db->query("SELECT * FROM shelter");
										if($query1->num_rows > 0){
											while ($row1 = $query1->fetch_object()){
										?>
                                    <option value="<?php echo $row1->categ_id; ?>"><?php echo $row1->name; ?></option>

                                    <?php
											}
										}
									?>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="telnumber" placeholder="Enter your number">

                            <textarea class="form-control_desc" name="description"
                                placeholder="Enter description"></textarea>

                            <div class="form-control3"><input type="file" name="image"></div>
                            <button type="submit" class="sbm">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="js/modal.js"></script>
    <script src="js/select.js"></script>
    <script type="text/javascript" src="js/menu.js"></script>

    <section class="main-content">
        <div class="container2">
            <div class="section-inner">
                <div class="sidenav">
                    <div class="left_menu">
                        <ul>
                            <a href="#about">My Add</a>
                            <a href="#services">Favourite pets</a>
                            <a href="#clients">Clinics</a>
                            <li id="pagenav" class="pagenav">
                                <a href="#"></a>
                            </li>
                            <a href="#art">Shop</a>
                            <a href="#art">Basket</a>
                            <a href="#tags">Tags <span class="rarrow">›</span></a>
                        </ul>
                    </div>
                </div>

                <div class="grid">
                    <div class="grid_inside">
                        <?php
						$query = $db->query("SELECT * FROM pocket_blog WHERE user_id=$id and status_id = 2 ORDER BY date DESC");
						if($query->num_rows > 0){
								while ($row = $query->fetch_object()){
								?>

                        <div class="post1">
                            <div class="figure_inside">
                                <figure class="effect-phoebe">
                                    <img class="post_image" src="<?php echo $row->img; ?>">
                                </figure>
                            </div>
                            <div class="post_bottom">
                                <form class="form_contact" action="blogs.php" method="GET">
                                    <div class="fig_title">
                                        <a href="blogs.php?id=<?php echo $row->id; ?>">
                                            <?php echo $row->title; ?></a>
                                    </div>
                                </form>
                                <nav class="item_content_actions recommend_footer">
                                    <ul class="item_content_actionscontainer">
                                        <li class="item_content_savecontainer">
                                            <a class="item_content_save"
                                                data-saveurl="https://bleacherreport.com/articles/2828649-what-happened-in-green-bay"
                                                href="#">
                                                <svg class="item_save_icon" height="427pt" viewBox="-40 0 427 427.00131"
                                                    width="427pt" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                                    <path
                                                        d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                                    <path
                                                        d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0" />
                                                    <path
                                                        d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0" />
                                                    </svg>
                                                <span class="item_content_savetext">
                                                    <a href="api/blog/del.php?id=<?php echo $row->id; ?>">Delete</a>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="item_content_hidecontainer">
                                            <a class="item_content_overflow"
                                                data-feeditemid="9b2af4a4-b8fa-437f-ac29-633462e068d0-r97d63401"
                                                href="editblog.php">
                                                <svg class="item_save_icon" id="Capa_1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="20px" height="20px" viewBox="0 0 485.219 485.22">
                                                    <path d="M467.476,146.438l-21.445,21.455L317.35,39.23l21.445-21.457c23.689-23.692,62.104-23.692,85.795,0l42.886,42.897
												C491.133,84.349,491.133,122.748,467.476,146.438z M167.233,403.748c-5.922,5.922-5.922,15.513,0,21.436
												c5.925,5.955,15.521,5.955,21.443,0L424.59,189.335l-21.469-21.457L167.233,403.748z M60,296.54c-5.925,5.927-5.925,15.514,0,21.44
												c5.922,5.923,15.518,5.923,21.443,0L317.35,82.113L295.914,60.67L60,296.54z M338.767,103.54L102.881,339.421
												c-11.845,11.822-11.815,31.041,0,42.886c11.85,11.846,31.038,11.901,42.914-0.032l235.886-235.837L338.767,103.54z
												M145.734,446.572c-7.253-7.262-10.749-16.465-12.05-25.948c-3.083,0.476-6.188,0.919-9.36,0.919
												c-16.202,0-31.419-6.333-42.881-17.795c-11.462-11.491-17.77-26.687-17.77-42.887c0-2.954,0.443-5.833,0.859-8.703
												c-9.803-1.335-18.864-5.629-25.972-12.737c-0.682-0.677-0.917-1.596-1.538-2.338L0,485.216l147.748-36.986
												C147.097,447.637,146.36,447.193,145.734,446.572z" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <?php
								}
							}
						?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style type="text/css">
    .custom-select {
        position: relative;
        font-family: Arial;
    }

    .custom-select select {
        display: contents;
    }
    </style>
    <footer class="footer">
        <div class="footer-in">
            <div class="footer-menu">
                <div class="footer-menu-top">
                    <ul>
                        <li>
                            <div class="footer_icon">
                                <img class="footer_iconn" src="image/footer_icons/puppy.png">
                            </div>
                            <div class="footer_big_title">
                                <p class="foot_big_title">Missing animals</p>
                            </div>
                            <div class="footer_links">
                                <div class="link">
                                    <a class="foot-menu" href="">Lost dog</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Lost cat</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Other animals</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="footer_icon">
                                <img class="footer_iconn" src="image/footer_icons/cat-house.png">
                            </div>
                            <div class="footer_big_title">
                                <p class="foot_big_title">Animals found</p>
                            </div>
                            <div class="footer_links">
                                <div class="link">
                                    <a class="foot-menu" href="">Dog found</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Cat found</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Other animals</a>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="footer_icon">
                                <img class="footer_iconn" src="image/footer_icons/dog-house.png">
                            </div>
                            <div class="footer_big_title">
                                <p class="foot_big_title">In good hands</p>
                            </div>
                            <div class="footer_links">
                                <div class="link">
                                    <a class="foot-menu" href="">Pets in shelter</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Animals in trapping</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">I'll give the dog</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">I'll give the cat back</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Other animals</a>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="footer_icon">
                                <img class="footer_iconn" src="image/footer_icons/consumer.png">
                            </div>
                            <div class="footer_big_title">
                                <p class="foot_big_title">Cotact details</p>
                            </div>
                            <div class="footer_links">
                                <div class="link">
                                    <a class="foot-menu" href="">Phone number</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">Fax</a>
                                </div>
                                <div class="link">
                                    <a class="foot-menu" href="">E-mail</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
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