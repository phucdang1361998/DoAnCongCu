<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation" style="background-color:#c72c2c;color:">
    <div class="container-fluid">
 
        <div class="navbar-header">
            <!-- to enable navigation dropdown when viewed in mobile device -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
 
            <!-- Change "Site Admin" to your site name -->
     
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="background-color:#c72c2c;color: #f5f7fa">
 
 
                <!-- highlight for order related pages -->
                <li  <?php echo $page_title=="Hệ thống quản lý thi trắc nghiệm" ? "class='active'" : ""; ?>>
                    <a style="background-color:#c72c2c" href="<?php echo $home_url; ?>admin/index.php"><span class="glyphicon glyphicon-home"></span> Trang chủ</a>
                </li>
 
                <!-- highlight for user related pages -->
                <li <?php echo $page_title=="Danh mục người dùng" ? "class='active'" : ""; ?> >
                    <a style="background-color:#c72c2c" href="<?php echo $home_url; ?>admin/read_users.php"><span class=""><span class="glyphicon glyphicon-user"></span> Tài khoản</a>
                </li>
               
              

                    <li <?php echo $page_title=="Quản lý môn học" ? "class='active'" : ""; ?> >
                    <a href="<?php echo $home_url; ?>admin/subject/view/subject.php">Môn học</a>
                   </li>

                   <li <?php echo $page_title=="Quản lý câu hỏi" ? "class='active'" : ""; ?> >
                    <a href="<?php echo $home_url; ?>admin/question/view/question.php">Câu hỏi</a>
                   </li>
                    
                   <li <?php echo $page_title=="Cấu hình đề thi" ? "class='active'" : ""; ?> >
                    <a href="<?php echo $home_url; ?>admin/exam_config/view/exam_config.php">Đề thi</a>
                   </li>    

                   <li <?php echo $page_title=="Quản lý kết quả thi" ? "class='active'" : ""; ?> >
                    <a href="<?php echo $home_url; ?>admin/result/view/result.php">Kết quả thi</a>
                   </li>                  
                   
             
        
            </ul>
 
            <!-- options in the upper right corner of the page -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        &nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?> <?php echo $_SESSION['lastname']; ?>
                        &nbsp;&nbsp;<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <!-- log out user -->
                        <li><a href="<?php echo $home_url; ?>logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
 
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->