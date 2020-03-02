<?php
// Hàm điều hướng trang
//dùng hàm khởi tạo để n chạy luôn khi gọi class mà k cần phải gọi hàm
//dùng hàm _destructor để hủy dối tượng, n sẽ thực hiện khi hoàn thành xong quá trình chạy class
class Redirect {
    public function __construct($url = null) {
        if ($url)
        {
        echo '<script>location.href="'.$url.'";</script>';
        }
    }
}