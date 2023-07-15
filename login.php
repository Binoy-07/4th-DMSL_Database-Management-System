<?php include 'connection.php'; ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="">
            </div>
            <div class="form-group">
                <button type="submit" name="loginBtn" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php 
    if(isset($_POST['loginBtn'])){
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $s = "select * from users where email='".$email."' 
        and password='".$password."'";
        $q = mysqli_query($conn, $s);
        if($r=mysqli_fetch_assoc($q)){
            $status = $r['status'];
            if($status){
                // save user data into session
                $_SESSION['user_name'] = $r['name'];
                $_SESSION['user_role'] = $r['role'];
                header('Location: dashboard.php');
            }
            else{
                echo 'Not Approved';
            }
        }
    }
?>