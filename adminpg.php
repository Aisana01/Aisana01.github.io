<?php 
   include "config/db.php" ;
   include "config/config.php" ;
   session_start();
   if(isset($_SESSION["user_id"])){
   	$id = $_SESSION["user_id"];
   	$query = $db->query("SELECT * FROM ibuild_users WHERE id=$id");
   	
   	$query2 = $db->query("SELECT b.title, b.description, b.date,b.id,b.img,u.full_name FROM shop b LEFT OUTER JOIN users u ON b.user_id =u.id ORDER BY b.date DESC");
   
   	if($query->num_rows>0){
   		$user = $query->fetch_object();
   ?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="descroption" content="Key Slova do 200 slov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/all.css">
    <link rel="shortcut icon" href="../favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
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
                        <input type="text" name="search_text">
                    </div>
                </div>
                <div class="basket">
                    <a href="" class="basket_link">Закупки</a>
                </div>
            </div>
            <div class="header_left">
            <div class="icons" style="display: flex;">
                    <a href="profile.php" class="logo_icon">
                        <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 460.8 460.8" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M230.432,0c-65.829,0-119.641,53.812-119.641,119.641s53.812,119.641,119.641,119.641s119.641-53.812,119.641-119.641    S296.261,0,230.432,0z"  data-original="#000000" style="" class="" />
                                    </g>
                                </g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M435.755,334.89c-3.135-7.837-7.314-15.151-12.016-21.943c-24.033-35.527-61.126-59.037-102.922-64.784    c-5.224-0.522-10.971,0.522-15.151,3.657c-21.943,16.196-48.065,24.555-75.233,24.555s-53.29-8.359-75.233-24.555    c-4.18-3.135-9.927-4.702-15.151-3.657c-41.796,5.747-79.412,29.257-102.922,64.784c-4.702,6.792-8.882,14.629-12.016,21.943    c-1.567,3.135-1.045,6.792,0.522,9.927c4.18,7.314,9.404,14.629,14.106,20.898c7.314,9.927,15.151,18.808,24.033,27.167    c7.314,7.314,15.673,14.106,24.033,20.898c41.273,30.825,90.906,47.02,142.106,47.02s100.833-16.196,142.106-47.02    c8.359-6.269,16.718-13.584,24.033-20.898c8.359-8.359,16.718-17.241,24.033-27.167c5.224-6.792,9.927-13.584,14.106-20.898    C436.8,341.682,437.322,338.024,435.755,334.89z"  data-original="#000000" style="" class="" />
                                    </g>
                                </g>
                            </g>
                        </svg>

                    </a>
                    <a href="Saved.php" class="logo_icon">
                    <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><path d="m462.453 0h-16.516l-16.516 19.294h-346.842l-16.516-19.294h-16.516l-8.157 16.516v484.514l20.851 1.086 193.759-155.274 187.864 160.033c13.827 11.778 35.105 1.952 35.105-16.211v-474.148c.001-9.121-7.394-16.516-16.516-16.516z"  data-original="#ff7e92" style=""/><path d="m66.063 0v447.363c0 7.043 8.251 10.854 13.613 6.286l154.904-131.953c6.169-5.258 13.794-7.887 21.42-7.887 7.625 0 15.25 2.629 21.42 7.887l154.904 131.954c5.362 4.567 13.613.757 13.613-6.286v-447.364h-16.516l-14.675 16.036h-323.185l-8.982-16.036z" data-original="#fb4455" style="" class=""/><g ><path d="m256 346.842c0-8.546-10.012-13.169-16.517-7.627l-182.057 155.088c-1.919 1.637-3.815 1.286-5.105.702-1.266-.585-2.774-1.815-2.774-4.343v-490.662c-9.122 0-16.517 7.394-16.517 16.516v474.146c0 18.164 21.279 27.99 35.106 16.211z"  data-original="#ff5f7a" style="" class=""/><path d="m223.871 309.124c8.952-7.629 20.363-11.831 32.129-11.831s23.178 4.202 32.129 11.835l100.452 85.565c16.086 13.702 40.839 2.27 40.839-18.86v-375.833h-346.841v375.832c0 21.13 24.754 32.562 40.84 18.86z"  data-original="#ff5f7a" style="" class=""/></g></g></g></svg>

                    </a>
                    <a href="Log.php" class="logo_icon">
                        <svg class = "header_logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="23" height="23" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <g xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <g>
                                            <path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0     c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333     h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251     l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z"  data-original="#000000" style="" class="" />
                                            <path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437     l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128     C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512     c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715     C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992     c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907     l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491     v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z"  data-original="#000000" style="" class="" />
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
                <div class="auth_button">
                    <a href="Log.php" class="btn_SignIn"><?php echo $user->full_name; ?></a>
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
                <a href="shop.php" class="categories">Матералы</a>
                <a href="" class="categories">Заборы</a>
                <a href="" class="categories">Техники строения</a>
            </div>
        </div>
    </header>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Verdana, sans-serif;
    }

    .mySlides {
        display: none;
    }

    img {
        vertical-align: middle;
    }
    </style>
    <div class="list">
        <ul>
            <?php 
               $st = $db->query("SELECT * FROM status");
               if($st->num_rows>0){
                  	while($row = $st->fetch_object()){
                   ?>
            <li><a href="adminpg.php?st=<?php echo $row->status_id;?>"><?php echo $row->status_name;?></a></li>
            <?php 
               }
               } 
               ?>
        </ul>
    </div>
    <section class="main-content">
        <div class="container2">
            <div class="section-inner">
                <div class="grid">
                    <div class="grid_inside">
                        <?php
                           if(isset($_GET["st"])&&strlen($_GET["st"]) > 0){
                              $st=$_GET["st"];
                              $query = $db->query("SELECT * FROM pocket_blog WHERE status_id=$st and $st = 1 ORDER BY date DESC");
                              $query2 = $db->query("SELECT * FROM pocket_blog WHERE status_id=$st and $st = 2 ORDER BY date DESC");
                           
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
                                <div>
                                    <form class="form_contact" action="blogs.php" method="GET">
                                        <div class="fig_title_adm">
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
                                                    <svg class="item_save_icon" height="427pt"
                                                        viewBox="-40 0 427 427.00131" width="427pt"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                        <a
                                                            href="api/blog/del_admin.php?id=<?php echo $row->id; ?>">Delete</a>
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
                                <div class="adm_button">
                                    <a href="api/blog/confirmation.php?confID=<?php echo $row->id; ?>"
                                        class="not_conf_button">Confirm</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        
                        ?>
                        <?php
                        }elseif ($query2->num_rows > 0){
                        			while ($row = $query2->fetch_object()){
                        		?>
                        <div class="post1">
                            <div class="figure_inside">
                                <figure class="effect-phoebe">
                                    <img class="post_image" src="<?php echo $row->img; ?>">
                                </figure>
                            </div>
                            <div class="post_bottom">
                                <div>
                                    <form class="form_contact" action="blogs.php" method="GET">
                                        <div class="fig_title_adm">
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
                                                    <svg class="item_save_icon" height="427pt"
                                                        viewBox="-40 0 427 427.00131" width="427pt"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                        <a
                                                            href="api/blog/del_admin.php?id=<?php echo $row->id; ?>">Delete</a>
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
                                <div class="adm_button">
                                    <a href="api/blog/removing.php?remID=<?php echo $row->id; ?>"
                                        class="remove_button">Remove</a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        }
                        ?>
                        <?php  
                        }else{			
                        	$query = $db->query("SELECT * FROM pocket_blog ORDER BY date DESC");
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
                                                    <a
                                                        href="api/blog/del_admin.php?id=<?php echo $row->id; ?>">Delete</a>
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
                        } 
                        ?>
                    </div>
                    <div>
                        <p class="title_adm">Categories</p>
                    </div>
                    <div class="add_product">
                        <form method="POST" action="api/blog/save_category.php" enctype="multipart/form-data">
                            <input type="text" name="title" placeholder="Enter title">
                            <button type="submit">Save</button>
                        </form>
                    </div>
                    <div class="products">
                        <?php
                        $query1 = $db->query("SELECT * FROM stroy_categories");
                        if($query1->num_rows > 0){
                        	while ($row = $query1->fetch_object()){
                        ?>
                        <div class="category" style="padding: 20px 20px">
                            <h1><?php echo $row->title; ?> </h1>
                            <a href="api/blog/del_category.php?id=<?php echo $row->id; ?>">delete</a>
                        </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                    <div>
                        <p class="title_adm">Sub Categories</p>
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
                    <div class="products">
                        <?php
                        $query1 = $db->query("SELECT * FROM stroy_sub_categories");
                        if($query1->num_rows > 0){
                        	while ($row = $query1->fetch_object()){
                        ?>
                        <div class="product_item">
                            <img src="<?php echo $row->img; ?>" width="200px">
                            <h1><?php echo $row->title; ?> </h1>
                            <h1><?php echo $row->categ_title; ?> </h1>
                            <a href="api/blog/del_sub_category.php?id=<?php echo $row->id; ?>">delete</a>
                        </div>
                        <?php
                        }
                        }
                        ?>
                    </div>
                    <div>
                        <p class="title_adm">Products</p>
                    </div>
                    <div class="add_product">
                        <form method="POST" action="api/blog/save.php" enctype="multipart/form-data">
                            <input type="text" name="title" placeholder="Enter title">
                            <input type="text" name="description" placeholder="Enter description">
                            <input type="text" name="price" placeholder="Enter price">
                            <input type="file" name="image">
                            <select name="categ_id">
                                <?php
                              $query1 = $db->query("SELECT * FROM category_shop");
                              			if($query1->num_rows > 0){
                              					while ($row1 = $query1->fetch_object()){
                              					?>
                                <option value="<?php echo $row1->categ_id; ?>"><?php echo $row1->title; ?></option>
                                <?php
                              }
                              }
                              
                              ?>
                            </select>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                    <div class="products">
                        <?php
                        $query1 = $db->query("SELECT * FROM shop");
                        if($query1->num_rows > 0){
                        	while ($row = $query1->fetch_object()){
                        ?>
                        <div class="product_item">
                            <img src="<?php echo $row->img; ?>" width="200px">
                            <h1><?php echo $row->title; ?> </h1>
                            <p><?php echo $row->price; ?>$ </p>
                            <p><?php echo $row->date; ?> </p>
                            <h1> Category<?php echo $row->categ_id; ?> </h1>
                            <a href="editblog.php?id=<?php echo $row->id; ?>">edit</a>
                            <a href="api/blog/del_product.php?id=<?php echo $row->id; ?>">delete</a>
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