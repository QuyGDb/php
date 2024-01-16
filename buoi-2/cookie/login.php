<?
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "abc" && $password == "abc"){
            //Tạo cookie
            $cookie_name = 'user';
            $cookie_value = $username;
            setcookie($cookie_name, $cookie_value, time() + 60, "/");
        }
        // Quay về trang chủ
        header('Location: index.php');
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2> Đăng nhập</h2>
    <form name="frmLOGIN" action="" method="post">
        <fieldset>
            <legend class="legend">Thông tin người dùng</legend>
            <p>
                <label for="username">Username:</label>
                <input name="username" id="username" type="text" placeholder="Username"/>
            </p>
            <p>
                <label for="password">Password:</label>
                <input name="password" id="password" type="password" placeholder="Password"/>
            </p>
            <p>
                <input type="submit" value="Login">
                <input type="reset" value="Reset">
            </p>
        </fieldset>
    </form>
</body>
</html>