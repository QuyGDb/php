<?
    $hoten = $_POST['hoten'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Kiểm tra password
    if($password == "abc")
        echo "Hello $hoten - Email $email";
    else
        echo "Nhập lại";
?>