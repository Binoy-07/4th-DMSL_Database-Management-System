<?php 
    include 'connection.php';
    $s = "select c.name as course_name, d.name as dept_name 
          from courses as c inner join departments as d 
          ON c.department_id = d.id";
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
                <th>Department</th>
            </thead>
            <tbody>
                <?php 
                    while($r = mysqli_fetch_array($q)){ ?>
                        <tr>
                            <td><?php echo $r['course_name'] ?></td>
                            
                            <td><?php echo $r['dept_name'] ?></td>
                            
                        </tr>
                    <?php  }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>