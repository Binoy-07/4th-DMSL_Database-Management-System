<?php   
    require 'auth.php'; // Include the authentication code
    restrictAccess('Student');
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
        <p> This is Student dashboard Page</p>
        
        
    </div>
</body>
</html>