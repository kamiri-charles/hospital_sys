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
                <h3 class="text-center">Login</h3>
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="fullName" id="" class="form-control" required>
                <label for="" class="form-label">Password</label>
                <input type="password" name="password" id="" class="form-control" required>
                <br>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-ok" name='login'>Submit</button>
                    </div>
                    <div class="col">
                        <p>Don't Have an Account? <strong><a href="register.php">Register</a></strong></p>
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
if (isset($_POST['login'])) {
    $fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT fullName, password FROM users WHERE fullName = '$fullName' and password = '$password'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fullName = $row['fullName'];
        $_SESSION['fullName'] = $fullName;
        header("Location: home.php");
    } else {
        echo "<script>alert('Invalid Login Details');</script>";
    }
}
?>