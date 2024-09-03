<?php
session_start();
require_once "../config/dbcon.php";
include "../plugin.php";

// Check if the user is logged in and has a user role
if (isset($_SESSION['status']) == TRUE && isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
    include 'userNav.php';
    include 'userModal.php';
?>
    <div class="container">
        <div class="centered-box">
            <h1 class="interactive-heading">Welcome User</h1>
            <p class="interactive-paragraph">This is your dashboard</p>
        </div>
    </div>
<?php
} else {
    // Set the error message
    $_SESSION['error'] = "You must login as a user first";

    // Display an alert before redirecting
    echo "<script>
        alert('Access Denied: You must login as a user first.');
        window.location.href = '../index.php';
    </script>";
    exit(); // Ensure no further code is executed
}
?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
