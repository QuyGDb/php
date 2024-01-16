<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minh hoạ cookie</title>
</head>
<body>
    <h1>Minh hoạ cookie</h1>
    <!-- Nhúng PHP -->
    <?
        // Kiểm tra xem đã có cookie hay chưa
        try{
            if(isset($_COOKIE['user'])){
                $username = $_COOKIE['user'];
                echo "Welcome $username !";
            }
            else
                echo die("Cook!");
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
           
    ?>
</body>
</html>