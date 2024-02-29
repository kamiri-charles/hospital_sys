<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <?php
    include('styles/cssStyles.html');
    ?>
</head>

<body>
    <?php
    include('includes/header.php');
    ?>
    <div class="container-fluid">
        <div class="col-8 mx-auto">
            <form action="" method="post" class="form">
                <p><strong>Reporting?..</strong></p>
                <h3 class="text-center">Fill The fields below</h3>
                <label for="" class="form-label">Subject</label>
                <input type="text" name='subject' class="text form-control" required>
                <label for="" class="form-label">Department</label>
                <input type="text" name='department' class="text form-control" required>
                <label for="" class="form-label">Building Number</label>
                <input type="text" name="buildingNo" id="" class="form-control" required>
                <label for="" class="form-label">Desccriptiion</label>
                <textarea name="description" id="" class="form-control" rows="4" placeholder="Describe Your Issue here....." required></textarea>
                <br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-ok" name='report'>Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="styles/bootstrap.min.js"></script>
</body>

</html>

<?php
include('includes/config.php');
if (isset($_POST['report'])) {
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $buildingNo = mysqli_real_escape_string($conn, $_POST['buildingNo']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $sql  = "INSERT INTO reports (subject, department, buildingNo, description, status) values('$subject','$department','$buildingNo','$description', '1')";

    if ($conn->query($sql)) {
        echo "<script>alert('Report Sent Successfully');</script>";
        header("location: home");
    }
}
?>