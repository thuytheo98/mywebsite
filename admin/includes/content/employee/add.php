<button class="btn-return">
    <a href="">Quay lại</a>
</button>
<div class="add-account">
    <div class="action-bar">
        <div class="float-left">
            <div class="title">Thiết lập thông tin nhân viên</div>
        </div>
        <div class="form">
            <form action="" method="post">
                <div class="item">
                    <div class="title">Họ và tên</div>
                    <input type="text" class="text-item" name="name" required>
                </div>
                <div class="item">
                    <div class="title">Quyền nhân viên</div>
                    <input type="text" class="text-item" name="role" value="Nhân viên">
                </div>
                <div class="item">
                    <div class="title">Email</div>
                    <input type="email" class="text-item" name="email"required>
                </div>
                <div class="item">
                    <div class="title">Số điện thoại</div>
                    <input type="number" class="text-item" name="phone" required>
                </div>
                <div class="item">
                    <div class="title">Ngày sinh</div>
                    <input type="date" class="text-item" name="birth" required>
                </div>
                <div class="item">
                    <div class="title">Giới tính</div>
                    <input type="text" class="text-item" name="gender" required>
                </div>
                <div class="item">
                    <div class="title">Địa chỉ</div>
                    <input type="text" class="text-item" name="address" required>
                </div>
                <div class="item">
                    <div class="title">Thẻ căn cước</div>
                    <input type="number" class="text-item" name="identification" required>
                </div>
                <div class="item">
                    <div class="title">Mã nhân viên</div>
                    <input type="number" class="text-item" name="emp_id" placeholder="Mã nhân viên tự sinh">
                </div>
                <div class="image-emp">
                    <img src="" alt="">
                </div>
                <div class="btn-create">
                    <button type="submit" name="createprofile">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['createprofile'])){
        $name  = $_POST['name'];
        $role  = $_POST['role'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $birth = $_POST['birth'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $iden = $_POST['identification'];
        $emp_id = $_POST['emp_id'];
        $sql_insert_emp = "INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_phone`, `emp_gender`, `emp_birthday`, `emp_address`, `emp_identification`, `emp_role`) VALUES (NULL, '$name', '$email', '$phone', '$gender', '$birth', '$address', '$iden', '$role');";
        $db ->query($sql_insert_emp);
    }
?>
<style type="text/css">
    .add-account{
        margin: 20px;
    }
    .add-account .action-bar .float-left{
        font-family: SansSerif;
        font-size: 16px;
        font-weight: 500;
        text-align: center;
    }s
    .add-account .form{
        border: 1px solid #6B6C6F;
        width: 400px;
    }
    .add-account .form .item{

    }
    .add-account .form .item .title{

    }
</style>