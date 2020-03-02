<?php
class Session{
    //Hàm khởi tạo session
    //dùng để đăng ký 1 phiên làm việc cho ng dùng trên server, tạo ra 1 ID riêng k trùng lặp cho ng dùng
    //chỉ tồn tại đến khi đóng trình duyệt
    function start(){
        session_start();
    }
    //hàm hủy session, hủy tất cả các biến session trên server
    //hủy đơn từng sesion dùng unset
    function destroy(){
        session_destroy();
    }
    //Lưu session
    function send($user){
        $_SESSION['user'] = $user;
    }
    //lấy thông tin session đã lưu, kiểm tra xem session có giá trị hay k
    public  function  get(){
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        }else{
            $user ='';
        }
        return $user;
    }
}