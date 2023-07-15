<?php include 'connection.php'; ?>
<?php 
    $t_id = $_REQUEST['tId'];
    $s = "Select * from teachers where id=".$t_id;
    $q = mysqli_query($conn, $s);
    $r = mysqli_fetch_assoc($q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit Teacher</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo $r['name'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo $r['email'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Salary</label>
                <input type="number" name="salary" class="form-control" value="<?php echo $r['salary'] ?>" id="">
            </div>
            <div class="form-group">
                <label for="">Department</label>
                <select name="department" class="form-control" id="">
                    <option value="">Select Department</option>
                    <option <?php echo $r['department']=="CSE" ? 'selected': '' ?> value="CSE">Computer Science & Engineering</option>
                    <option <?php echo $r['department']=="CE" ? 'selected': '' ?> value="CE">Civil Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary" name="submitBtn">Update</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php 
    if(isset($_POST['submitBtn'])){
        $teacher_name = $_POST["name"];
        $teacher_email = $_POST["email"];
        $teacher_salary = $_POST["salary"];
        $teacher_department = $_POST["department"];

        $str = "UPDATE teachers SET name='".$teacher_name."', 
                    email='".$teacher_email."', 
                    salary=$teacher_salary, 
                    department='".$teacher_department."' 
                    WHERE id=$r[id]";

        if(mysqli_query($conn, $str)){
            header('Location: teachers.php');
        }
    }

?>