<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title = "Khôi phục mật khẩu";
 
// include login checker
include_once "login_checker.php";
 
// include classes
include_once 'config/database.php';
include_once 'objects/user.php';
include_once "libs/php/utils.php";
 
// include page header HTML
include_once "layout_head.php";
 
echo "<div class='col-md-12'>";
 
    // registration form HTML will be here
    // code when form was submitted will be here
    // if form was posted
if($_POST){
 
    // get database connection
    $database = new Database();
    $db = $database->getConnection();
 
    // initialize objects
    $user = new User($db);
    $utils = new Utils();
 
    // set user email to detect if it already exists
    $user->email=$_POST['email'];
    
    // check if email already exists
    if(!$user->emailExists()){
        echo "<div class='alert alert-danger'>";
            echo "Email không tồn tại. Xin hãy thử lại";
        echo "</div>";
    }
 
    else{

    
    $access_code= $user->getAccesscode();
    // send confimation email
    $send_to_email=$_POST['email'];
    $body="Chào {$send_to_email}.<br /><br />";
    $body.="Mật khẩu của bạn được reset mặc định :123456 ";
    $subject="Reset Password";
 
    if($utils->sendEmailViaPhpMail($send_to_email, $subject, $body)){
        echo "<div class='alert alert-success'>
           Email xác thực đã được gửi. Vui lòng kiểm tra mail của bạn.
        </div>";
    }
 
    else{
        echo "<div class='alert alert-danger'>
           Có lỗi xảy ra
        </div>";
    }
 
    // empty posted values
    $_POST=array();
    }
}
?>
<img style='width:250px; height:160px;margin-left:700px;' src="images/logo.png" >
<h3 style="text-align: center;">Khôi phục lại mật khẩu bằng Email </h3>
</br>
<form action='forgotPass.php' method='post' id='forgot'>
    <table class='table table-responsive' style="width: 30%;margin-left: 580px;" >
        <tr>
            <td><input style="width:100%;" placeholder="Nhập email" type='email' name='email' class='form-control' required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
        <tr>
            <td>
            </br>
                <button type="submit" class="btn btn-primary" style="background-color: #c72c2c;font-weight: bold;width: 50%;margin-left: 120px;border-radius: 20px;">
                     LẤY LẠI MẬT KHẨU
                </button>
            </td>
        </tr>
 
    </table>
</form>
<style>
.container{
    height:1000px;
}
table{
    margin-left:100px;
   
}

</style>
<?php
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>