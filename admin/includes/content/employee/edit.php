<?php
    if(isset($_GET['id'])){
        $emp_id = $_GET['id'];
        $sql_set_employee = "SELECT * FROM employee WHERE emp_id = $emp_id";
        $data_employee_id = $db ->fetch_assoc($sql_set_employee,1);
    }
    if(isset($_POST['update'])){
        $emp_name = $injection ->db_escape_postparam($db ->cn, 'name');
        $emp_mail = $injection ->db_escape_postparam($db ->cn, 'email');
        $emp_phone = $injection ->db_escape_postparam($db ->cn, 'phone');
        $emp_birthday = $injection ->db_escape_postparam($db ->cn, 'birth');
        $emp_gender = $injection ->db_escape_postparam($db ->cn, 'gender');
        $emp_iden = $injection ->db_escape_postparam($db ->cn, 'identification');
        $emp_address = $injection ->db_escape_postparam($db ->cn, 'address');
        $sql_update_emp = "UPDATE `employee` SET `emp_id`='$emp_id',`emp_name`='$emp_name',`emp_email`='$emp_mail',`emp_phone`='$emp_phone',`emp_gender`='$emp_gender',`emp_birthday`='$emp_birthday',`emp_address`='$emp_address',`emp_identification`='$emp_iden',`emp_role`= 1 WHERE emp_id = '$emp_id'";
        if($db ->query($sql_update_emp)){
            header("location:edit.php");
        }
    }
?>
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
                    <input type="text" class="text-item" name="name" value="<?= $data_employee_id['emp_name']?>" required>
                </div>
                <div class="item">
                    <div class="title">Quyền nhân viên</div>
                    <input type="text" class="text-item" name="role" value="Nhân viên">
                </div>
                <div class="item">
                    <div class="title">Email</div>
                    <input type="email" class="text-item" name="email" value="<?=$data_employee_id['emp_email']?>" required>
                </div>
                <div class="item">
                    <div class="title">Số điện thoại</div>
                    <input type="number" class="text-item" name="phone" value="<?= $data_employee_id['emp_phone']?>" required>
                </div>
                <div class="item">
                    <div class="title">Ngày sinh</div>
                    <input type="date" class="text-item" name="birth" value="<?= $data_employee_id['emp_birthday']?>" required>
                </div>
                <div class="item">
                    <div class="title">Giới tính</div>
                    <input type="text" class="text-item" name="gender" value="<?=$data_employee_id['emp_gender']?>" required>
                </div>
                <div class="item">
                    <div class="title">Địa chỉ</div>
                    <input type="text" class="text-item" name="address" value="<?= $data_employee_id['emp_address']?>" required>
                </div>
                <div class="item">
                    <div class="title">Thẻ căn cước</div>
                    <input type="number" class="text-item" name="identification" value="<?= $data_employee_id['emp_identification']?>" required>
                </div>
                <div class="item">
                    <div class="title">Mã nhân viên</div>
                    <input type="number" class="text-item" name="emp_id" value="<?= $data_employee_id['emp_id']?>" placeholder="Mã nhân viên tự sinh" disabled>
                </div>
                <div class="image-emp">
                    <img src="" alt="">
                </div>
                <div class="btn-create">
                    <button type="submit" name="update">Cập nhật thông tin</button>
                </div>
                <div class="btn-delete">
                    <button type="submit" name="delete">Xóa nhân viên</button>
                </div>
            </form>
        </div>
    </div>
</div>