<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbName = 'hospital_sys';



$conn = mysqli_connect($server, $username, $password, $dbName);

if (!$conn) {
    echo '<div class="alert alert-danger" role="alert"> Connection to the database failed</div>';
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>