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
                <h3 class="text-center">Create Account</h3>
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="fullName" id="" class="form-control" required>
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control" required>
                <label for="" class="form-label">Phone Number</label>
                <input type="text" name="phoneNumber" id="" class="form-control" required>
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control" required>

                <br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-ok" name='register'>Submit</button>
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
if (isset($_POST['register'])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql  = "INSERT INTO users (fullName, phoneNumber, email, password) values('$fullName','$phoneNumber','$email','$password')";

    if ($conn->query($sql)) {
        echo "<script>alert('UUser Registered Successfully');</script>";
        header("location: index");
    }
}
?>