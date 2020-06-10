<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation" style="background-color :#c72c2c">
    <div class="container-fluid">
 
        <div class="navbar-header" style="background-color: red;">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Your Site" to your site name -->
           
        </div>

        <div class="navbar-collapse collapse" style="background-image: url(logo.png);">
            <ul class="nav navbar-nav">
                <!-- link to the "Cart" page, highlight if current page is cart.php -->
                <li <?php echo $page_title=="" ? "class='active'" : ""; ?>>
                    <a href="<?php echo $home_url; ?>"><img src="images/Webp.net-resizeimage.jpg"></a>
                </li>
                

                <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
                ?>
             
                <li <?php echo $page_title=="Tra cứu điểm thi" ? "class='active'" : ""; ?>>
                    <a href="<?php echo $home_url; ?>user/result/view/result.php" style="margin-top: 20px; size: 100px;" >Điểm thi</a>
                </li>
               
                <?php
                }
                ?>

               
                </ul>
 
            <?php
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true && $_SESSION['access_level']=='Customer'){
    ?>
    <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;size: 100px;">
        <li <?php echo $page_title=="Edit Profile" ? "class='active'" : ""; ?>>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
                &nbsp;&nbsp;<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo $home_url; ?>user/info/view/info.php">Tài khoản</a></li>
                       <li><a href="<?php echo $home_url; ?>user/info/view/changepass.php">Đổi mật khẩu</a></li>
                <li><a href="<?php echo $home_url; ?>logout.php">Đăng xuất</a></li>
            </ul>
        </li>
    </ul>
    <?php
    }
     
    // show login and register options here 
    // if user was not logged in, show the "login" and "register" options
else{
    ?>
    <ul class="nav navbar-nav navbar-right" style="margin-top: 20px;size: 24px;" >
        <li <?php echo $page_title=="Login" ? "class='active'" : ""; ?>>
            <a style="background-color:#c72c2c" href="<?php echo $home_url; ?>login.php">
                <span class="glyphicon glyphicon-log-in"></span> Đăng nhập
            </a>
        </li>
     
        <li <?php echo $page_title=="Register" ? "class='active'" : ""; ?>>
            <a href="<?php echo $home_url; ?>register.php">
                <span class="glyphicon glyphicon-check"></span> Đăng ký
            </a>
        </li>
    </ul>
    <?php
    }
            ?>
             
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->