<?
require "init_session.php";
$message = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['$username'];
        $password = $_POST['$password'];
        if($username == 'abc' && $password == 'abc'){
            $_SESSION['id'] = "1";
            $_SESSION['name'] = $username;
        }
        else{
            $message = "Invalid user";
        }
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
    <form name="frmLogin" action="" method="post">
        <div class="msg">
            <?
                if($message!="")
                    echo $message;
            ?>
        </div>
        <h3>Enter Login Details</h3>
        Username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <p>
                <input type="submit" value="Lưu">
                <input type="reset" value="Huỷ">
        </p>
    </form>
</body>
</html>