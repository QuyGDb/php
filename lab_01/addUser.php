<?
    // require "config.php";
    // require "classes/database.php";
    // require "classes/user.php";

    
    require "inc/init.php";
    $conn = require "admin/inc/db.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = new User($username, $password);
        try{
            if($user->addUser($conn)){
                echo"Add User Successfully!";
            }
            else{
                echo"Cannot Add User!";
            }
        }
        catch(PDOException $e){
            echo $e->getMessage();
            // Có thể gọi trang xử lí lỗi
            // Header('Location: error.php');
        }
        
    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Books Store</title>
</head>
<body>
    <h2>Add New User</h2>
    <form name="frmADDUSER" method="post">
        <fieldset>
            <legend>Thông tin người dùng</legend>
            <p>
                <label for="username">Username:</label>
                <input name="username" id="username" type="text" placeholder="Nhập Username"/>
            </p>
            <p>
                <label for="password">Password:</label>
                <input name="password" id="password" type="password" placeholder="Nhập password"/>
            </p>
            <p>
                <input type="submit" value="Save">
                <input type="reset" value="Reset">
            </p>
        </fieldset>
    </form>
</body>
</html>