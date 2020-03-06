<?php include "../includes/header.php" ?>
<div class="registration">
    <div class="quytrinhnhanvc">
        <h3>Quy trình đăng ký đi làm</h3>
        <div class="cacbuoc">
            <div class="buoc buoc1">
                <p class="so-buoc">1</p>
                <p class="title-buoc">Chuẩn bị hồ sơ</p>
                <p class="ghichu-buoc">chứng minh thư, giấy sức khỏe, lý lịch cá nhân</p>
            </div>
            <div class="buoc buoc2">
                <p class="so-buoc">2</p>
                <p class="title-buoc">Phỏng vấn và hứớng dẫn công việc</p>
                <p class="ghichu-buoc">nghe tư vấn và hướng dẫn tay nghề miên phí</p>
            </div>
            <div class="buoc buoc3">
                <p class="so-buoc">3</p>
                <p class="title-buoc">Ký hợp đồng</p>
                <p class="ghichu-buoc">ký kết, nhận dụng cụ và đồng phục</p>
            </div>
            <div class="buoc buoc4">
                <p class="so-buoc">4</p>
                <p class="title-buoc">Nhận việc</p>
                <p class="ghichu-buoc">về nhà nhận việc và đi làm ngay!</p>
            </div>
        </div>
    </div>
	<form action="" class="formdangky" onsubmit="messageSuccess()">
        <h3>Đăng ký đi làm ngay</h3>
		<div class="item">
			<div class="title-input">Họ và tên</div>
			<div class="container-input">
				<input type="text" class="input-custom" name="name" required>
			</div>
		</div>
		<div class="item">
			<div class="title-input">Tuổi</div>
			<div class="container-input">
				<input type="text" class="input-custom" name="age" required>
			</div>
		</div>
		<div class="item">
			<div class="title-input">Địa chỉ</div>
			<div class="container-input">
				<input type="text" class="input-custom" name="address" required>
			</div>
		</div>
		<div class="item">
			<div class="title-input">Điện thoại</div>
			<div class="container-input">
				<input type="text" class="input-custom" name="phone" required>
			</div>
		</div>
        <div class="btn-ok">
            <button type="submit">Đăng ký</button>
        </div>
	</form>

</div>
<style type="text/css" media="screen">
	.registration{
        clear: both;
        position: relative;
        color: black;
    }
    html {
        background: url('../image/killhong.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    .registration .quytrinhnhanvc{
        width: 980px;
        margin: auto;
        text-align: center;
    }
    .registration .quytrinhnhanvc h3{
        font-size: 25px;
        padding-top: 20px;
        padding-bottom: 20px;
        border-bottom: 2px solid black;
        border-bottom-length:20px;
    }
    .registration .quytrinhnhanvc .cacbuoc{

    }
    .registration .quytrinhnhanvc .cacbuoc .buoc{
        border: 1px solid #6c757d;
        background: white;
        color: #e4606d;
        width: 190px;
        height: 130px;
        float: left;
        margin: 20px;
        border-radius: 8px;
        position: relative;
    }
    .registration .quytrinhnhanvc .cacbuoc .buoc .so-buoc{
        position: absolute;
        border: 1px solid black;
        width: 20px;
        height: 20px;
        border-radius: 20px;
        top: -25px;
        right: 0;
        left: 85px;
        bottom: 0;
        background: black;
        color: white;
    }
    .registration .quytrinhnhanvc .cacbuoc .buoc .title-buoc{
        font-weight: 600;
        font-size: 19px;
    }
    .registration .formdangky{
        width: 900px;
        height: 700px;
        padding-top: 20px;
        margin: auto;
        text-align: center;
    }
    .registration .formdangky h3{
        font-size: 25px;
        padding-top: 2px;
        padding-bottom: 20px;
        border-bottom: 2px solid black;
        border-bottom-length:40px;
    }
    .registration .formdangky .item{

    }
    .registration .formdangky .item .title-input{
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 15px;
        margin-top: 5px;
    }
    .registration .formdangky .item .container-input .input-custom{
        width:70%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 5px;
        text-align: center;
    }
    .registration .formdangky button{
        cursor: pointer;
        height: 40px;
        padding: 10px 20px;
        text-align: center;
        background-color: black;
        border-radius: 8px;
        color: #e4606d;
        margin-top: 20px;
    }

</style>
<script type="text/javascript">
    function messageSuccess(){
        alert("Cảm ơn bạn đã đăng ký. Chúng tôi sẽ liên lạc lại với bạn ngay!");
    }
</script>
<?php //include "../../includes/footer.php" ?>