<?php
    require_once 'core/init.php';
    if (isset($_POST['login'])){
        $username = $injection -> db_escape_postparam($db ->cn, "username");
        $password = $injection -> db_escape_postparam($db ->cn, "password");

        if($username == "" || $password == ""){
            echo "vui lòng điền đầy đủ thông tin";
        }else{
            $sql_check_username = "SELECT user_name FROM USERS WHERE user_name = '$username'";
            if($db ->num_rows($sql_check_username)){
                $passmh = md5($password);
                $sql_check_password = "SELECT user_name, user_password FROM USERS WHERE user_name = '$username' AND user_password ='$passmh'";
                if($db->num_rows($sql_check_password)){
                    //lưu session
                    $session ->send($username);
                    $db ->close();
                    new Redirect($DOMAIN);
                }else{
                    echo "mk k đúng";
                }
            }else{
                echo " tên đăng nhập k đúng";
            }
        }
    }
?>
<div class="login">
	<div class="logo-login">
		<img src="../../image/logolev.png" alt="">
		<span>Vcleaning</span>
	</div>
	<div class="title">Chào mừng đến với hệ thống quản trị</div>
	<form action="" method="POST">
		<div class="item">
			<div class="title-input">Tên đăng nhập:</div>
			<div class="container-input">
				<input type="text" class="input-custom" name="username" id="username" required>
			</div>
		</div>
		<div class="item">
			<div class="title-input">Mật khẩu:</div>
			<div class="container-input">
				<input type="password" class="input-custom" id="password" name="password" required>
			</div>
		</div>
		<div class="btn-login">
			<button type="submit" name="login" onclick="validateForm()">Đăng nhập</button>
		</div>
	</form>
</div>
<style type="text/css">
	.login{
		background-color: #e4606d;
		width: 400px;
		height: 200px;
		top: 0;
		left: 0;
		bottom: 0;
		right: 0;
		margin: auto;
		position: absolute;
		border: 1px solid #6B6C6F;
		border-radius: 10px;
		padding: 10px 10px;
		font-family: arial;
	}
	.login .title{
		font-size: 20px;
		text-align: center;
		font-weight: bold;
		opacity: 1;
	}
	.login .logo-login{
		display: flex;
		justify-content: center;
	}
	.login .logo-login span{
        margin-left: 10px;
        font-weight: 600;
        text-align: center;
        font-size: :26px;
     }

     .login .item{
        margin-top: 15px;
        justify-content: space-between;
        display: flex;
        align-items: center;
     }
     .login.item .title-input{
        font-size: :18px;
        color: #6B6C6F;
        font-weight: 500;
        width: 50%;
     }
     .login .item .container-input .input-custom{
        border-radius: 4px;
        width: 250px;
        height: 37px;
        border: 1px solid #6B6C6F;
     }
     .login .btn-login{
        margin-top: 15px;
        float: right;
     }
     .login .btn-login button{
        border: 1px solid #6B6C6F;
        height: 33px;
        border-radius: 6px;
        cursor: pointer;
     }
</style>