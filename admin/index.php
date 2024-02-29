<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <?php
    include('../styles/cssStyles.html');
    ?>
</head>

<body>
    <?php
    include('../includes/admin_header.php');
    ?>
    <div class="container-fluid">
        <div class="col-8 mx-auto">
            <div class="row">
                <?php
                include('../includes/config.php');

                $sql = "SELECT * FROM reports";
                $result = $conn->query($sql);
                ?>

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        echo $id;
                ?>

                        <div class="card m-2" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo "" . $row['subject'] . ""; ?></h5>
                                <p class="card-text"><strong>Date: </strong><?php echo "" . $row['date'] . ""; ?></p>
                                <p class="card-text"><?php echo "" . $row['description'] . ""; ?></p>
                                <form action="" method='post'>
                                    <input type="hidden" name="newID" value='1'>
                                    <?php
                                    if (($id) == 1) {
                                    ?>
                                        <button type="submit" class="btn btn-ok" name="done">Done</button>
                                    <?php
                                    } else {
                                    ?>
                                        <button type="submit" class="btn btn-success" name="done">Done</button>
                                    <?php
                                    }
                                    ?>
                                </form>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="../styles/bootstrap.min.js"></script>
</body>

</html>
<?php
include('../includes//config.php');
if (isset($_POST['done'])) {
    $newID = $_POST['newID'];
    echo $newID;
    $sql = "UPDATE reports set status = '$newID' WHERE id='$id'";
    if ($conn->query($sql)) {
        echo "<script>alert('Report Updated Successfully');</script>";
    }
}

?>