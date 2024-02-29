<?php
include('includes/config.php');


if (isset($_POST['del'])) {
    $id = $_POST['id'];
    $sql = "DELETE from reports WHERE id = $id";

    // Use the instance to run the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Report deleted')</script>";
        header('location: history.php');
    }
}
