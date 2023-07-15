<?php 
    session_start();
    if(!isset($_SESSION['user_name'])){
        header('Location: login.php');
    }
?>
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
        <h2>Dashboard</h2>
        <p>This is dashboard Page</p>
        <?php 
            if($_SESSION['user_role']=="Admin"){ ?>
                <ul>
                    <li><a href="pending_users.php">Pending Users</a></li>
                </ul>
            <?php  }
        ?>
        
    </div>
</body>
</html>