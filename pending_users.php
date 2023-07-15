<?php 
    include 'connection.php';
    $s = "select * from users where status=0";
    $q = mysqli_query($conn, $s);
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
        <table class="table table-striped">
            <thead>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php 
                    while($r = mysqli_fetch_array($q)){ ?>
                        <tr>
                            <td><?php echo $r['name'] ?></td>
                            <td><?php echo $r['email'] ?></td>
                            <td><?php echo $r['department'] ?></td>
                            <td>
                                <a href="approve.php?userId=<?php echo $r['id'] ?>" class="btn btn-secondary">Approve</a>
                            </td>
                        </tr>
                    <?php  }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>