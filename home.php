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
            <?php
            include('includes/carousel.php');
            ?>
        </div>
        <h5 class="text-center">
            Report and resolve issues seamlessly. Whether it's a malfunctioning laptop, leaking pipe, or faulty bulbs, we've got you covered. Submit your requests here.
            <a href="report.php" class="btn btn-ok mx-auto">Report NOW</a>
        </h5>
        <h5 class="text-center">
            Stay in the loop! Track the progress of your requests in real-time.
        </h5>
    </div>
    <script src="styles/bootstrap.min.js"></script>
</body>

</html>