
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
                    <div class="gender">
                        <span>Nam</span><input type="radio" name="gender" value="1">
                        <span>Nữ</span><input type="radio" name="gender" value="0">
                    </div>
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