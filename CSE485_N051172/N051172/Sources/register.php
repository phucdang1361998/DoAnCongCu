<?php
// core configuration
include_once "config/core.php";
 
// set page title
$page_title = "Đăng ký tài khoản";
 
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
    if($user->emailExists()){
        echo "<div class='alert alert-danger'>";
            echo "Email đã được đăng ký. Xin hãy thử lại hoặc <a href='{$home_url}login'>Đăng nhập.</a>";
        echo "</div>";
    }
 
    else{
        // create user will be here
        // set values to object properties
$user->firstname=$_POST['firstname'];
$user->lastname=$_POST['lastname'];
$user->contact_number=$_POST['contact_number'];
$user->address=$_POST['address'];
$user->password=$_POST['password'];
$user->access_level='Customer';
$user->status=0;
// access code for email verification
$access_code=$utils->getToken();
$user->access_code=$access_code;
 
// create the user
// create the user
if($user->create()){
 
    // send confimation email
    $send_to_email=$_POST['email'];
    $body="Chào {$send_to_email}.<br /><br />";
    $body.="Chúc mừng bạn đã đăng ký tài khoản thành công";
    $subject="Register account";
 
    if($utils->sendEmailViaPhpMail($send_to_email, $subject, $body)){
        echo "<div class='alert alert-success'>
           Email xác thực đã được gửi. Vui lòng kiểm tra mail của bạn.
        </div>";
    }
 
    else{
        echo "<div class='alert alert-danger'>
           Tài khoản đã được tạo nhưng chưa được kích hoạt. 
        </div>";
    }
 
    // empty posted values
    $_POST=array();
 
}else{
    echo "<div class='alert alert-danger' role='alert'>Không thể đăng ký. Vui lòng thử lại.</div>";
}
    }
}
?>
<img style='width:250px; height:160px;margin-left:700px;' src="images/logo.png">
<form action='register.php' method='post' id='register' style="margin: auto;width: 800px;" >
 
    <table class='table table-responsive' style="width: 500px;margin-left: 135px;"   >
 
        <tr>
            <td><input type='text' name='firstname' class='form-control' placeholder="Nhập họ" required value="<?php echo isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 
        <tr >
       
            <td><input type='text' name='lastname' class='form-control'placeholder="Nhập tên" required value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 
        <tr>
         
            <td><input type='text' name='contact_number' class='form-control'placeholder="Nhập số điện thoại" required value="<?php echo isset($_POST['contact_number']) ? htmlspecialchars($_POST['contact_number'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 
        <tr>
          
            <td><textarea name='address' class='form-control' placeholder="Nhập địa chỉ" required><?php echo isset($_POST['address']) ? htmlspecialchars($_POST['address'], ENT_QUOTES) : "";  ?></textarea></td>
        </tr>
 
        <tr>
               <td><input type='email' name='email' class='form-control'placeholder="Nhập email" required value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES) : "";  ?>" /></td>
        </tr>
 
        <tr>
           
            <td><input type='password' name='password' class='form-control' placeholder="Nhập mật khẩu" required id='passwordInput'></td>
        </tr>
    
        <tr>
            <td>
            </br>
                <button type="submit" class="btn btn-primary" style="width: 500px;height: 50px;size: 24px;border-radius: 20px;background-color: #b82a2a"> <b>ĐĂNG KÝ</b>
                </button>
            </td>
        </tr>
 
    </table>
</form>
<style>
.container{
    height:1000px;
}
</style>
<?php
 
echo "</div>";
 
// include page footer HTML
include_once "layout_foot.php";
?>