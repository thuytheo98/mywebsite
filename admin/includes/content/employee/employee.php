<div class="list-employee">
    <div class="title-list">
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
            <td class="edit">
                <a href="index.php?page=employee&crud=edit&id=<?=$emp['emp_id'];?>"><i class="fa fa-edit">Edit</i></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
<style type="text/css">
    .list-employee{
        width: 100%;
        margin: 10px;
        padding: 10px;
        background-color: white;
    }
    .list-employee .title-list{
        margin-bottom: 50px;
    }
    .list-employee .title-list .float-left{
        box-sizing: border-box;
        margin-right: 20px;
        float: left;
    }
    .list-employee .title-list .float-left .title{
        font-size: 22px;
        font-weight: 600;
        font-family: SansSerif;
    }
    .list-employee .title-list .float-right{
        float:right;
        margin-right: 20px;
        border: 1px solid #6B6C6F;
        border-radius: 5px;
        height: 30px;
        background-color: #ea704d;
    }
    .list-employee .title-list .float-right a{
        text-align: center;
        text-decoration: none;
        padding: 7px;
        color: black;
        font-size: 14px;
    }
    .list-employee .table{
        width: 100%;
    }
</style>