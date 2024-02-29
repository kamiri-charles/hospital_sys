<?php
// auth.php - Authentication file

// Start the session
session_start();

// Check if the user is not logged in, redirect to the login page
if (!isset($_SESSION['fullName'])) {
    header("Location: login.php");
    exit();
} else {
}
