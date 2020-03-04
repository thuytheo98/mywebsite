<div class="list-employee">
    <div class="float-left">
        <div class="title">Danh sách nhân viên</div>
    </div>
    <div class="float-right">
        <a href="index.php?page=employee&crud=add">Thêm nhân viên</a>
    </div>
</div>
<?php
$sql_get_list = "SELECT * FROM employee";
$i = 1;
?>
<table class="table table-striped">
    <tr>
        <th>STT</th>
        <th>Họ Tên</th>
        <th>Giới Tính</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Ngày sinh</th>
        <th>Căn cước công dân</th>
        <th>Mã nhân viên</th>
    </tr>
    <?php foreach ($db ->fetch_assoc($sql_get_list,0) as $emp){ ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $emp['emp_name'] ?></td>
        <td><?php echo $emp['emp_gender'] ?></td>
        <td><?php echo $emp['emp_address'] ?></td>
        <td><?php echo $emp['emp_phone'] ?></td>
        <td><?php echo $emp['emp_birthday'] ?></td>
        <td><?php echo $emp['emp_identification'] ?></td>
<!--        <td class=\"edit\">-->
<!--            <a href="index.php?page=employee&crud=edit&id=--><?// echo $emp['emp_id']?><!--"><i class="fa fa-edit">HĐ</i></a>-->
<!--        </td>-->
    </tr>
    <?php } ?>
</table>